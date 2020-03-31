from bs4 import BeautifulSoup as soup
from urllib.request import urlopen as uReq
import os
import csv
import pandas as pd
from datetime import datetime
import calendar
import re
from io import StringIO

my_url = "https://www.mohfw.gov.in/"
uClient = uReq(my_url)
pageHTML = uClient.read()
uClient.close()
pageSoup = soup(pageHTML,"html.parser")
containers = pageSoup.findAll("table")[-1]

rawData = containers.text
data = ""
for c in rawData:
    if c=='\n':
        data += ','
    else:
        data += c
data_array = data.split(',')

# For finding and setting table column names from <th>
colnames = []
row_num = 0
for row in containers.find_all('tr'):
    column_num = 0
    columns = row.find_all('th')
    for column in columns:
        colnames.append(column.get_text())
        column_num += 1
column_num = len(colnames)
mydata = ""
i=0
for c in data_array:
    if c != "":
        mydata += c + ','
        i = i+1
        if i % column_num == 0:
            mydata = mydata[:-1]
            mydata += '\n'
mydata = mydata[:-1]
f = open('datasets2/completedataset.csv','w')
f.write(mydata)
f.close()
df = pd.read_csv('datasets2/completedataset.csv',sep=',')

patterns= [r'\d+']
r=2
for j in range(2,len(colnames)):
    if j!= (len(colnames)-1):
        for i in range(0, len(df[colnames[j]])):
            for p in patterns:
                match = re.findall(p,str(df[colnames[j]][i]))
                df.loc[i,colnames[j]] = match[0]
    else:
        for i in range(0, len(df[colnames[j]])-1):
            for p in patterns:
                match = re.findall(p,str(df[colnames[j]][i]))
                df.loc[i,colnames[j]] = match[0]

total = df.iloc[-1,1]
for p in patterns:
    match = re.findall(p,str(total))
    df.iloc[-1,1] = match[0]

if not os.path.isdir('datasets2'):
    os.mkdir('datasets2')
df.to_csv('datasets2/completedataset.csv', encoding='utf-8',index = False)

# a###################################################################################

f = open("datasets2/completedataset.csv", 'r')
all_rows = f.readlines()
last_row = all_rows[(len(all_rows)-1)]
f.close()

f = open("datasets2/overall.csv", 'w')
headers = "type,count"
f.write(headers)
f.write("\n")
last_row = last_row.split(',')
f.write("Confirmed Cases," + last_row[1] + "\n")
f.write("Cured," + last_row[2] + "\n")
f.write("Deaths," + last_row[3] + "\n")
f.close()
#end of overall.csv

# a###################################################################################


f = open("datasets2/affected_states.csv",'w')
headers = "State,Confirmed Cases,Cured,Deaths"
f.write(headers)
f.write("\n")

statekeys = {'A & N ISLANDS':'AN','ANDHRA PRADESH':'AP','ARUNACHAL PRADESH':'AR','ASSAM':'AS','BIHAR':'BR','CHANDIGARH':'CH','CHHATTISGARH':'CT','D & N HAVELI':'DN',
             'DAMAN & DIU':'DD','DELHI':'DL','GOA':'GA','GUJARAT':'GJ','HARYANA':'HR','HIMACHAL PRADESH':'HP','JAMMU AND KASHMIR':'JK','JHARKHAND':'JH','KARNATAKA':'KA','KERALA':'KL','LADAKH':'LA','LAKSHADWEEP':'LD','MADHYA PRADESH':'MP','MAHARASHTRA':'MH','MANIPUR':'MN','MEGHALAYA':'ML','MIZORAM':'MZ','NAGALAND':'NL','ODISHA':'OR','PUDUCHERRY':'PY','PUNJAB':'PB','RAJASTHAN':'RJ','SIKKIM':'SK','TAMIL NADU':'TN','TELENGANA':'TS','TRIPURA':'TR','UTTAR PRADESH':'UP','UTTARAKHAND':'UT','WEST BENGAL':'WB'}

i=0
with open("datasets/completedataset.csv", 'r') as csvfile:
    csvreader = csv.reader(csvfile)
    next(csvreader,None)
    for row in csvreader:
        if str(row[1]).upper() in statekeys:
            f.write(statekeys[str(row[1]).upper()] + "," + row[2] + ',' + row[3] + ',' + row[4] + '\n')
f.close()
df = pd.read_csv('datasets2/affected_states.csv')
df = df.sort_values('Confirmed Cases', ascending=False)
df.to_csv('datasets2/affected_states.csv', encoding='utf-8', index=False)
#--------------------------------------------------------------------------------------------
df = pd.read_csv('datasets2/affected_states.csv',nrows=12)
df.to_csv('datasets2/affected_states_for_mobile.csv',encoding='utf-8',index = False)
#--------------------------------------------------------------------------------------------

df = pd.read_csv('datasets2/completedataset.csv')
df = df.head(-1)
df = df.sort_values(colnames[2], ascending=False)
df = df.drop('S. No.', axis=1)
df.insert(1, 'Parent', 'India')
df.insert(2,'Color','')

for i in range(0,len(df)):
    df.loc[i, 'Color']  = df.loc[i, colnames[2]]
df.to_csv('datasets2/tree_chart.csv', index= False)
dup_colnames = colnames.copy()
dup_colnames.insert(2,'Parent')
dup_colnames.insert(4,'Color')
dup_colnames.pop(0)
#print(dup_colnames)
line = pd.DataFrame([['India','',0,0,0,0]], columns= dup_colnames)
line = line.append(df,ignore_index=True)
line['Death'] = line['Death'].apply(int)
print(line)
line = line.head(16)
line.to_csv('datasets2/tree_chart.csv', index= False,header=dup_colnames)

####################################################################################


overall_df = pd.read_csv('datasets2/overall.csv')
total_cases_df = pd.read_csv('datasets2/total_cases_in_india.csv')
count =  overall_df.iloc[0,1]
currentDay = str(datetime.now().day)
currentMonth = datetime.now().month
currentMonth = calendar.month_name[3]
currentMonth = currentMonth[:3]
df = pd.read_csv('datasets2/total_cases_in_india.csv')
last_updated_date = df.iloc[-1,0]
last_updated_value = df.iloc[-1,1]

if str(last_updated_date) == str(currentDay + " " + currentMonth):
    df = df[df.Date != str(last_updated_date)]
    temp = pd.DataFrame([[last_updated_date,count]],columns=list(['Date','no_of_cases']))
    df = df.append(temp, ignore_index = True)
else:
    temp = pd.DataFrame([[currentDay + " " + currentMonth, count]], columns=list(['Date', 'no_of_cases']))
    df = df.append(temp, ignore_index=True)

df.to_csv('datasets2/total_cases_in_india.csv',index= False)

####################################################################################


total_cases_df = pd.read_csv('datasets2/total_cases_in_india.csv')
total_cases_df = total_cases_df.tail(2)
diff = int(total_cases_df.iloc[1,1]) - int(total_cases_df.iloc[0,1])
df = pd.read_csv('datasets2/daily_new_cases_in_india.csv')
last_updated_date = df.iloc[-1,0]
last_updated_value = df.iloc[-1,1]
if (str(last_updated_date) == str(currentDay + " " +currentMonth)):
    df = df[df.Date != str(last_updated_date)]
    temp = pd.DataFrame([[currentDay + " " + currentMonth, diff]], columns=list(['Date', 'no_of_cases']))
    df = df.append(temp, ignore_index=True)
else:
    temp = pd.DataFrame([[currentDay + " " + currentMonth, diff]], columns=list(['Date', 'no_of_cases']))
    df = df.append(temp, ignore_index=True)
df.to_csv('datasets2/daily_new_cases_in_india.csv', index=False)


                    ####################################################################################


df = pd.read_csv('datasets2/total_cases_and_deaths_in_india.csv')
last_updated_date = df.iloc[-1,0]
last_updated_case = df.iloc[-1,1]
last_updated_death = df.iloc[-1,2]

if (str(last_updated_date) == str(currentDay +" " + currentMonth)):
    df = df[df.Date != str(last_updated_date)]
    temp = pd.DataFrame([[currentDay + " " + currentMonth, count,str(overall_df.iloc[2,1])]], columns=list(['Date', 'no_of_cases','no_of_deaths']))
    df = df.append(temp, ignore_index=True)
else:
    temp = pd.DataFrame([[currentDay + " " + currentMonth,count, str(overall_df.iloc[2,1])]], columns=list(['Date', 'no_of_cases','no_of_deaths']))
    df = df.append(temp, ignore_index=True)

df.to_csv('datasets2/total_cases_and_deaths_in_india.csv', index=False)

                    ####################################################################################2

df = pd.read_csv('datasets2/deaths.csv')
last_updated_date = df.iloc[-1,0]
last_updated_value = df.iloc[-1,1]
if (str(last_updated_date) == str(currentDay + " " + currentMonth)):
    df = df[df.Date != str(last_updated_date)]
    temp = pd.DataFrame([[last_updated_date,str(overall_df.iloc[2,1]) ]], columns=list(['Date', 'no_of_deaths']))
    df = df.append(temp, ignore_index=True)
else:
    temp = pd.DataFrame([[currentDay + " " + currentMonth,str(overall_df.iloc[2,1]) ]], columns=list(['Date', 'no_of_deaths']))
    df = df.append(temp, ignore_index=True)
df.to_csv('datasets2/deaths.csv', index=False)


                    ####################################################################################

df = pd.read_csv('datasets2/completedataset.csv')
df2 = df.copy()
confirmed = df2.iloc[-1][1]
cured = df2.iloc[-1][2]
death = df2.iloc[-1][3]
df2.iloc[-1,1] = "Total"
df2.iloc[-1,2] = confirmed
df2.iloc[-1,3] = cured
df2.iloc[-1,4] = death
df2[colnames[-1]] = df2[colnames[-1]].apply(int)


temp = df2.tail(1)
df2 = df2[:-1]

#df2['S. No.'] = df2[colnames[0]].apply(int)
df2 = df2.sort_values(colnames[0])
df2 = df2.append(temp)
df2 = df2.drop(colnames[0],axis=1)
df2.to_csv('datasets2/datatable.csv' ,header=['State','Confirmed', 'Recovered','Deaths'],index=False)

                       ####################################################################################

# containers = pageSoup.find("div",{'class':'newtab'})
# containers = str(containers)
# containers = containers.split('\n')
# containers = containers[1]
# patterns= []
# for p in patterns:
#     match = re.findall(p,containers)
# latestDate = "As on " + match[0] + "." + match[1] + "." + match[2] + " at " + match[3] + ":" + match[4]
# f = open('datasets2/latestDate.csv','w').close();
# f = open('datasets2/latestDate.csv', 'w')
# f.write(latestDate)
