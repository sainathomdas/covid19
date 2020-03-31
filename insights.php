<?php include('header.php');?>

<<<<<<< HEAD
<style>
 
.tableRow {
    background-color: black;
    color:white;
    padding: 2px;    
}
html, body{
    background-color: #000;
}
.google-visualization-table .gradient {
    
    background:black;
}
</style>

<style type="text/css">

=======
<style type="text/css">
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
    .view {
        background: url(assets/images/bg.jpg) center;
        min-height: 50vh;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* Needed to position the navbar */
        position: relative;
        font-family: 'Open Sans', sans-serif;
    }
<<<<<<< HEAD

    #overlay {
        position: relative;
        height: 50vh;
    }
    body{
        background-color: #000;
    }

=======
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
    th {
        background-color: #0288d1;
        color: white;
    } 
<<<<<<< HEAD
 
=======
    tr{
        height: 0px;
        padding: 0px;
        color: black;
    }
    tr td{
        padding: 0px;
        margin: 0px;
    }
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1


</style>


<div class="ViewContent text-center px-5 py-5">

  <h1 class='responsive mt-4  landing_header' ><strong class="text-white text-capitalize">Insights</strong></h1>
</div>

</div>

</div>
</header>

<div class="container mt-5 mb-5">
    <div class="row">

     <div class="col-md-7">
<<<<<<< HEAD
       <!--  <div class="container table-responsive table-sm table-dark table-striped tabble-hover p-2" id="table-container"></div> -->
       <div id="table_div"></div>

   </div>
   <center>
     <div id="overall_div" class="col-md-5 mt-lg-5 justify-content-start" style="height: 15rem;vertical-align: middle;width: 100%;">
=======
        <div class="container table-responsive table-sm table-dark table-striped tabble-hover p-2" id="table-container"></div>

    </div>
    <center>
     <div id="overall_div" class="col-md-5 mt-lg-5 justify-content-start" style="height: 25rem;vertical-align: middle;width: 100%;">
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
     </div>
 </center>

</div>
<<<<<<< HEAD

=======
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
<div id="overall_div_mobile" class="col-md-12 justify-content-start" style="height: 25rem;vertical-align: middle;width: 100%;" style="">
</div>
</div>


<section  class="pt-lg-5 pb-lg-5 middle container">
    <div class="container mt-5 mb-5">
        <center>
            <div id="affected_states_div" style="width: 100%;height: 100vh;border-radius: 10px;"></div>
        </center>
    </div>
</section>

<div class="container mt-5 mb-5">
    <center>
        <div id="affected_states_mobile_div" style="width: 100%;height: 100vh;border-radius: 10px;"></div>
    </center>
</div>


<div class="container justify-content-center">
    <div class="row">
      <div id="total_cases_in_india_div" class="col-md-6 p-4" style="height: 25rem;">

      </div>

      <div id="deaths_div" class="col-md-6 p-4" style="height: 25rem;">

      </div>
  </div>
</div>
</div>

<!-- 
<div class="container">
   <hr class="mb-5 mt-5">
</div> -->

<section  class="py-5 my-5  middlecontainer">
    <div class="container my-5">
        <h4 class="h4 mt-md-1 pb-2" style="color: teal;font-family: 'Kurale', serif;">Disclaimer</h4>
        <p class="text-justify pt-1">Our sources are The Ministry of Health and trustworthy news articles. The ministry collects data from individual states and keeps updating the tally on its website multiple times in a day. We don't update our numbers throughout the day. Instead, we take the numbers that are available on the 
            <a href="https://www.mohfw.gov.in/" target="_blank"> ministry's website</a>
        after 9pm every day.</p>

        <p class="text-justify">
           Information on our website may be inaccurate and these inaccuracies, along with any other aspect of the website, may be updated without notice. Relying on the information provided is therefore strictly at your own risk.
       </p>
   </div>
</section>


</main>
<div class="container">
    <center>
        <h3 class="h3-responsive" style="color: #FF0266;">
            <strong class="text-black text-center" style="color: #03a9f4;">“Be a responsible citizen, don’t go out and do not let others go out”</strong></h3>
        </center>
    </div>
    <?php include('footer.php');?>



    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/csv_to_html_table.js"></script>

    <script type="text/javascript">

<<<<<<< HEAD
     //   showTable();
     drawOverall();
     drawTotalCasesIndia();

     drawAffectedStates();
     drawAffectedStatesForMobile();
     
     drawOverallForMobile();
     drawDeaths();
 </script>
 <script type="text/javascript">

    function drawTable1(){
        google.charts.load('current', {'packages':['table']});
        google.charts.setOnLoadCallback(drawTable);

        function drawTable() {
          var data;
          $.get("assets/datatable.csv", function(csvString) {
            var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
            data = new google.visualization.arrayToDataTable(arrayData);

            var table = new google.visualization.Table(document.getElementById('table_div'));
            table.draw(data, options);
        });


          var cssClassNames = {
            headerRow: 'headerRow',
            tableRow: 'tableRow',
            headerCell: 'gold-border',
            tableCell: 'tableRow',
            rowNumberCell: 'underline-blue-font'};



            options = {
                showRowNumber: false,
                width: '100%',
                height: '100%',
                page: 'enable',
                pageSize: 10,
                pagingButtons: 'auto',
                backgroundcolor: '#191919',
                allowHtml: true,
                'cssClassNames': cssClassNames
            };


        }
    }
    drawTable1();
</script>
=======
        showTable();
        drawOverall();
        drawTotalCasesIndia();

        drawAffectedStates();
        drawAffectedStatesForMobile();

        drawOverallForMobile();
        drawDeaths();
    </script>

>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
