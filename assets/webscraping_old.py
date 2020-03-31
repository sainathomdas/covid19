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
containers = pageSoup.findAll("tbody")
raw_data = containers[-1].text.strip()
#print(raw_data)
data = ""
for c in raw_data:
    if c=='\n':
        data += ','
    else:
        data += c
#print(data)
data_array = data.split(',')
#print(data_array)
column_count = 6
mydata = ""
i=0
for c in data_array:
    if c != "":
        mydata += c + ','
        i = i+1
        if i % column_count == 0:
            mydata = mydata[:-1]
            mydata += '\n'
mydata = mydata[:-1]
#print(mydata)
headers = "S. No.,Name of State / UT,Total Confirmed cases (Indian National),Total Confirmed cases ( Foreign National ),Cured/Discharged/Migrated,Death"
mydata = StringIO(headers + "\n" + mydata)
df = pd.read_csv(mydata,sep=',')
print(df.iloc[-1,0])

df.to_csv('demo.csv')

patterns= [r'\d+']

for p in patterns:
    #if not df.iloc[-1,1].isnull():
    match = re.findall(p,str(df.iloc[-1,1]))
    df.iloc[-1,1] = match[0]

'''
for i in range(0, len(df['Total Confirmed cases (Indian National)'])):
    for p in patterns:
        match = re.findall(p,str(df['Total Confirmed cases (Indian National)'][i]))
        df.loc[i,'Total Confirmed cases (Indian National)'] = match[0]

for i in range(0, len(df['Total Confirmed cases ( Foreign National )'])):
    for p in patterns:
        match = re.findall(p,str(df['Total Confirmed cases ( Foreign National )'][i]))
        df.loc[i,'Total Confirmed cases ( Foreign National )'] = match[0]

for i in range(0, len(df['Cured/Discharged/Migrated'])):
    for p in patterns:
        match = re.findall(p,str(df['Cured/Discharged/Migrated'][i]))
        df.loc[i,'Cured/Discharged/Migrated'] = match[0]

for i in range(0, len(df['Death'])-1):
    for p in patterns:
        match = re.findall(p,str(df['Death'][i]))
        df.loc[i,'Death'] = match[0]


if not os.path.isdir('datasets'):
    os.mkdir('datasets')
df.to_csv('datasets/completedataset.csv',encoding='utf-8',index = False)



f = open("datasets/completedataset.csv", 'r')
all_rows = f.readlines()
last_row = all_rows[(len(all_rows)-1)]
f.close()

#end of completedataset.csv

                #a###################################################################################

f = open("datasets/overall.csv", 'w')
headers = "type,count"
f.write(headers)
f.write("\n")
last_row = last_row.split(',')
f.write("Indians," + last_row[1] + "\n")
f.write("Foreigners," + last_row[2] + "\n")
f.write("Discharged," + last_row[3] + "\n")
f.write("Deaths," + last_row[4] + "\n")
f.close()
#end of overall.csv

                ####################################################################################

f = open("datasets/affected_states.csv",'w')
headers = "State,Indians,Immigrants,Cured,Deaths"
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
            f.write(statekeys[str(row[1]).upper()] + "," + row[2] + ',' + row[3] + ',' + row[4] + ',' + row[5] + '\n')
f.close()
df = pd.read_csv('datasets/affected_states.csv')
df = df.sort_values('Indians', ascending=False)
df.to_csv('datasets/affected_states.csv', encoding='utf-8', index=False)
#--------------------------------------------------------------------------------------------
df = pd.read_csv('datasets/affected_states.csv',nrows=12)
df.to_csv('datasets/affected_states_for_mobile.csv',encoding='utf-8',index = False)
#--------------------------------------------------------------------------------------------


df = pd.read_csv('datasets/completedataset.csv')
df = df.head(-1)
df = df.sort_values('Total Confirmed cases (Indian National)', ascending=False)
df = df.drop('S. No.', axis=1)
df.insert(1, 'Parent', 'India')
df.insert(3,'Color','')
for i in range(0,len(df)):
    df.loc[i, 'Color']  = df.loc[i, 'Total Confirmed cases (Indian National)']
#{'State': 'India', 'Parent': '', 'Indians': 0, 'Color':0, 'Immigrants':0, 'Cured':0, 'Deaths':0}
print(df)
line = pd.DataFrame([['India','',0,0,0,0,0]], columns=list(['Name of State / UT','Parent','Total Confirmed cases (Indian National)','Color','Total Confirmed cases ( Foreign National )','Cured/Discharged/Migrated','Death']))
line = line.append(df,ignore_index=True)
line['Death'] = line['Death'].apply(int)
line = line.head(16)
line.to_csv('datasets/tree_chart.csv', header=['State','Parent','Indians','Color','Immigrants','Cured','Deaths'], index= False)

                    ####################################################################################


overall_df = pd.read_csv('datasets/overall.csv')
total_cases_df = pd.read_csv('datasets/total_cases_in_india.csv')
count = overall_df.iloc[0,1] + overall_df.iloc[1,1]
currentDay = str(datetime.now().day)
currentMonth = datetime.now().month
currentMonth = calendar.month_name[3]
currentMonth = currentMonth[:3]
df = pd.read_csv('datasets/total_cases_in_india.csv')
last_updated_date = df.iloc[-1,0]
last_updated_value = df.iloc[-1,1]

if str(last_updated_date) == str(currentDay + " " + currentMonth):
    df = df[df.Date != str(last_updated_date)]
    temp = pd.DataFrame([[last_updated_date,count]],columns=list(['Date','no_of_cases']))
    df = df.append(temp, ignore_index = True)
else:
    temp = pd.DataFrame([[currentDay + " " + currentMonth, count]], columns=list(['Date', 'no_of_cases']))
    df = df.append(temp, ignore_index=True)

df.to_csv('datasets/total_cases_in_india.csv',index= False)

                    ####################################################################################


total_cases_df = pd.read_csv('datasets/total_cases_in_india.csv')
total_cases_df = total_cases_df.tail(2)
diff = total_cases_df.iloc[1,1] - total_cases_df.iloc[0,1]
df = pd.read_csv('datasets/daily_new_cases_in_india.csv')
last_updated_date = df.iloc[-1,0]
last_updated_value = df.iloc[-1,1]
if (str(last_updated_date) == str(currentDay + " " +currentMonth)):
    df = df[df.Date != str(last_updated_date)]
    temp = pd.DataFrame([[currentDay + " " + currentMonth, diff]], columns=list(['Date', 'no_of_cases']))
    df = df.append(temp, ignore_index=True)
else:
    temp = pd.DataFrame([[currentDay + " " + currentMonth, diff]], columns=list(['Date', 'no_of_cases']))
    df = df.append(temp, ignore_index=True)
df.to_csv('datasets/daily_new_cases_in_india.csv', index=False)


                    ####################################################################################


df = pd.read_csv('datasets/total_cases_and_deaths_in_india.csv')
last_updated_date = df.iloc[-1,0]
last_updated_case = df.iloc[-1,1]
last_updated_death = df.iloc[-1,2]

if (str(last_updated_date) == str(currentDay +" " + currentMonth)):
    df = df[df.Date != str(last_updated_date)]
    temp = pd.DataFrame([[currentDay + " " + currentMonth, count,str(overall_df.iloc[3,1])]], columns=list(['Date', 'no_of_cases','no_of_deaths']))
    df = df.append(temp, ignore_index=True)
else:
    temp = pd.DataFrame([[currentDay + " " + currentMonth,count, str(overall_df.iloc[3,1])]], columns=list(['Date', 'no_of_cases','no_of_deaths']))
    df = df.append(temp, ignore_index=True)

df.to_csv('datasets/total_cases_and_deaths_in_india.csv', index=False)

                    ####################################################################################


df = pd.read_csv('datasets/deaths.csv')
last_updated_date = df.iloc[-1,0]
last_updated_value = df.iloc[-1,1]
if (str(last_updated_date) == str(currentDay + " " + currentMonth)):
    df = df[df.Date != str(last_updated_date)]
    temp = pd.DataFrame([[last_updated_date, str(last_row[4])]], columns=list(['Date', 'no_of_deaths']))
    df = df.append(temp, ignore_index=True)
else:
    temp = pd.DataFrame([[currentDay + " " + currentMonth, str(last_row[4])]], columns=list(['Date', 'no_of_deaths']))
    df = df.append(temp, ignore_index=True)
df.to_csv('datasets/deaths.csv', index=False)


                    ####################################################################################

df = pd.read_csv('datasets/completedataset.csv')
df2 = df.copy()
indians = df2.iloc[-1][1]
foreigners = df2.iloc[-1][2]
cured = df2.iloc[-1][3]
death = df2.iloc[-1][4]
df2.iloc[-1,1] = "Total"
df2.iloc[-1,2] = indians
df2.iloc[-1,3] = foreigners
df2.iloc[-1,4] = cured
df2.iloc[-1,5] = death
df2['Death'] = df2['Death'].apply(int)


temp = df2.tail(1)
df2 = df2[:-1]

df2['S. No.'] = df2['S. No.'].apply(int)
df2 = df2.sort_values('S. No.')
df2 = df2.append(temp)
df2.to_csv('datasets/datatable.csv' ,header=['S.No','State','Indians','Immigrants','Recovered','Deaths'],index=False)

                       ####################################################################################


containers = pageSoup.find("div",{'class':'newtab'})
containers = str(containers)
containers = containers.split('\n')
containers = containers[1]
patterns= [r'\d+']
for p in patterns:
    match = re.findall(p,containers)
latestDate = "As on " + match[0] + "." + match[1] + "." + match[2] + " at " + match[3] + ":" + match[4]
f = open('datasets/latestDate.csv','w').close();
f = open('datasets/latestDate.csv', 'w')
f.write(latestDate)
'''