<?php include('header.php') ?>
<<<<<<< HEAD

<div class="ViewContent text-center py-5 ">
=======
<div class="ViewContent text-center px-5 py-5">
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1

  <h1 class='responsive mt-4  landing_header' ><strong class="text-white text-capitalize">Coronavirus Status in India</strong></h1>
  <br>
  <h4 class='responsive heading font-weight-bold' style='font-size:1.3rem; '><strong >Confirmed Cases</strong></h4>

<<<<<<< HEAD
  <div id="confirmed_cases_cover" class="count text-monospace text-center" style="font-size: 8.5rem; color: white;"></div>
=======
  <div id="confirmed_cases" class="count text-monospace" style="font-size: 9rem; color: white;"></div>
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1

  <p id='latestDate'>  </p>

</div>
<<<<<<< HEAD
</div>
</div>
</div>
</div>
</header>
<div id="loading">
</div>
<a id="myBtn" class="emergency hoverable bg-danger text-center flex-center" href="tel:01123978046"><i class="fas  fa-phone text-white pb-1"></i></a>

<main class="mt-5">


 <div class="container mt-4 px-5 pt-5">
 <!--  <div class="row  ">
    <div class="col-md-4 p-md-4 col-12">
      <h6 class="h6-responsive pt-md-2" style="font-family: 'PT Serif', serif;"><b><strong>Total Confirmed cases (Indian National) - </strong></b> </h6>
    </div>
    <div class="col-md-2 p-md-4 pr-5 mb-3 col-12">
      <h6 class="h6-responsive " style="font-family: 'PT Serif', serif;"><div class="counters"><span class="count " id="confirmed_cases" >00</span></div></h6>
    </div>
    <div class="col-md-4 p-md-4 col-12">
      <h6 class="h6-responsive pt-md-2" style="font-family: 'PT Serif', serif;"><b><strong>Total Confirmed cases (Foreign National) - </strong></b></h6>
    </div>
    <div class="col-md-2 p-md-4 mb-3 col-12">
      <h6 class="h6-responsive" style="font-family: 'PT Serif', serif;"> <div class="counters"><span class="count " id="foreign_cases" >00</span></div></h6>
    </div>
  </div> -->

  <div class="row">
    <div class="col-md-4 p-md-4 col-12">
      <h6 class="h6-responsive pt-md-2" style="font-family: 'PT Serif', serif;"><b><strong>Cured / Discharged / Migrated -  </strong></b> </h6>
    </div>
    <div class="col-md-2 p-md-4 pr-5 mb-3 col-12 ">
      <h6 class="h6-responsive" style="font-family: 'PT Serif', serif;"><div class="counters"><span class="count" id="cured" >00</span></div></h6>
    </div>
    <div class="col-md-4 p-md-4 col-12">
      <h6 class="h6-responsive pt-md-2" style="font-family: 'PT Serif', serif;"><b><strong>Deaths -</strong></b></h6>
    </div>
    <div class="col-md-2 p-md-4 mb-3 col-12">
      <h6 class="h6-responsive" style="font-family: 'PT Serif', serif;"><div class="counters"><span class="count" id="deaths" >00</span></div></h6>
    </div>
  </div>
=======

</div>

</div>
</header>

<main>


   <div class="container mt-4 px-5">
    <div class="row  ">
        <div class="col-md-4 p-md-4 col-12">
            <h6 class="h6-responsive pt-md-2" style="font-family: 'PT Serif', serif;"><b><strong>Total Confirmed cases (Indian National) - </strong></b> </h6>
        </div>
        <div class="col-md-2 p-md-4 pr-5 mb-3 col-12">
            <h6 class="h6-responsive " style="font-family: 'PT Serif', serif;"><div class="counters"><span class="count " id="indian_cases" >00</span></div></h6>
        </div>
        <div class="col-md-4 p-md-4 col-12">
            <h6 class="h6-responsive pt-md-2" style="font-family: 'PT Serif', serif;"><b><strong>Total Confirmed cases (Foreign National) - </strong></b></h6>
        </div>
        <div class="col-md-2 p-md-4 mb-3 col-12">
            <h6 class="h6-responsive" style="font-family: 'PT Serif', serif;"> <div class="counters"><span class="count " id="foreign_cases" >00</span></div></h6>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 p-md-4 col-12">
            <h6 class="h6-responsive pt-md-2" style="font-family: 'PT Serif', serif;"><b><strong>Cured / Discharged / Migrated -  </strong></b> </h6>
        </div>
        <div class="col-md-2 p-md-4 pr-5 mb-3 col-12 ">
            <h6 class="h6-responsive" style="font-family: 'PT Serif', serif;"><div class="counters"><span class="count" id="cured" >00</span></div></h6>
        </div>
        <div class="col-md-4 p-md-4 col-12">
            <h6 class="h6-responsive pt-md-2" style="font-family: 'PT Serif', serif;"><b><strong>Deaths -</strong></b></h6>
        </div>
        <div class="col-md-2 p-md-4 mb-3 col-12">
            <h6 class="h6-responsive" style="font-family: 'PT Serif', serif;"><div class="counters"><span class="count" id="deaths" >00</span></div></h6>
        </div>
    </div>
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1

</div>




<div class="container">

<<<<<<< HEAD
 <!--Section: Main info-->
 <section class="mt-4 mb-4 pt-0 wow fadeIn">

   <!--Grid row-->
   <div class="row justify-content-center align-items-center" style="height: 100%;">

     <div id="total_cases_in_india_div" class="col-md-6 p-4" style="height: 21rem;">

     </div>
     <div id="daily_new_cases_in_india_div" class="col-md-6 p-4" style="height: 21rem;">

     </div>

   </div>
   <!--Grid row-->


   <!--Section: Main info-->

</section>
</div>
<div class="container">
  <hr class="my-3">
</div>

<div class="container pb-5">
  <center >  <h4 class="h4 mt-md-1 ml-lg-5 pb-3 heading" style=" font-family: 'Kurale', serif; ">Most Affected States</h4></center>
  <div id="tree_chart_div"></div>
</div>





<section class="mt-2 p-2 middlecontainer" >
 <div class="container mt-5 mb-5">
  <center>
    <div id="affected_states_div" style="width: 100%;height: 100vh;border-radius: 10px;"></div>
  </center>
</div>
<center>
  <div id="affected_states_mobile_div" style="width: 100%;height: 100vh;border-radius: 10px;"></div>
</center>








<h6 class="h6-responsive pt-4 text-center "><a href="insights.php" class="btn btn text-white light-blue darken-3">Insights </a></h6>
=======
   <!--Section: Main info-->
   <section class="mt-4 mb-4 pt-0 wow fadeIn">

       <!--Grid row-->
       <div class="row justify-content-center align-items-center" style="height: 100%;">

           <div id="total_cases_in_india_div" class="col-md-6 p-4" style="height: 21rem;">

           </div>
           <div id="daily_new_cases_in_india_div" class="col-md-6 p-4" style="height: 21rem;">

           </div>

       </div>
       <!--Grid row-->


       <!--Section: Main info-->
   </div>
</section>

<section class="mt-2 p-2 middlecontainer" >
 <div class="container mt-5 mb-5">
    <center>
        <div id="affected_states_div" style="width: 100%;height: 100vh;border-radius: 10px;"></div>
    </center>
</div>
<center>
    <div id="affected_states_mobile_div" style="width: 100%;height: 100vh;border-radius: 10px;"></div>
</center>
<h6 class="h6-responsive pt-4 text-center "><a href="insights.html" class="btn btn text-white light-blue darken-3">Insights </a></h6>
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
</section>




<section class=" pb-4 pt-5">
<<<<<<< HEAD
  <div class="container">

    <div class="row">
      <div class="col-md-6 pl-lg-5">
        <h4 class="h4 mt-md-1 ml-lg-5 pb-3 heading" style=" font-family: 'Kurale', serif; ">COVID-19 Major Symptoms:</h4>
        <ul class="ml-lg-5 pl-lg-4 matter">
          <li class="ml-lg-5"><strong>cough</strong></li>
          <li class="ml-lg-5"><strong>Fever</strong></li>
          <li class="ml-lg-5"><strong>Tiredness</strong></li>
          <li class="ml-lg-5"><strong>Shortness of breath</strong></li>


        </ul>
      </div>


      <div class="col-md-6">
       <h4 class="h4 mt-md-1 pb-3 heading" style="font-family: 'Kurale', serif;">Diseases which have similarity with covid-19:</h4>
       <ul class="ml-lg-5 pl-lg-4 ">
        <li><strong>Flu</strong></li>
        <li><strong>Seasonal Fever</strong></li>
        <li><strong>Common Cold</strong></li>          

      </ul>
    </div>
    <div class="container ml-lg-5">
      <strong class="ml-lg-5"><i>Incubation period:</i> 4-14 days. It can extend upto 24 days.</strong></div>
    </div>
  </div>
=======
    <div class="container">

        <div class="row">
            <div class="col-md-6 pl-lg-5">
                <h4 class="h4 mt-md-1 ml-lg-5 pb-3 heading" style=" font-family: 'Kurale', serif; ">COVID-19 Major Symptoms:</h4>
                <ul class="ml-lg-5 pl-lg-4 matter">
                    <li class="ml-lg-5"><strong>cough</strong></li>
                    <li class="ml-lg-5"><strong>Fever</strong></li>
                    <li class="ml-lg-5"><strong>Tiredness</strong></li>
                    <li class="ml-lg-5"><strong>Shortness of breath</strong></li>


                </ul>
            </div>


            <div class="col-md-6">
             <h4 class="h4 mt-md-1 pb-3 heading" style="font-family: 'Kurale', serif;">Diseases which have similarity with covid-19:</h4>
             <ul class="ml-lg-5 pl-lg-4 ">
                <li><strong>Flu</strong></li>
                <li><strong>Seasonal Fever</strong></li>
                <li><strong>Common Cold</strong></li>          

            </ul>
        </div>
        <div class="container ml-lg-5">
            <strong class="ml-lg-5"><i>Incubation period:</i> 4-14 days. It can extend upto 24 days.</strong></div>
        </div>
    </div>
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1

</div>

<div class="container">
<<<<<<< HEAD
 <hr class="mb-5 mt-5">
</div>

<div class="container">
  <center><h3 class="h3 mt-md-4 mb-5 heading" style="font-family: 'Kurale', serif;">Preventive Measures</h3></center>
  <div class="row">
    <div class="col-md-6">
      <center>
        <img data-aos="zoom-in" class="img-fluid mb-4" style="height: 10rem;" src="assets/images/mask.png">
      </center>
      <ul class="ml-lg-5 list-unstyled">
        <li class="ml-lg-5"><strong>Social distancing (at least 6 feet far)</strong></li>
        <li  class="ml-lg-5"><strong>Frequent hand wash</strong></li>
        <li  class="ml-lg-5"><strong>Personal hygiene</strong></li>
        <li  class="ml-lg-5"><strong>Not touching the face with hands</strong></li>
        <li  class="ml-lg-5"><strong>Use of masks by diseased</strong></li>
      </ul>
    </div>

    <div class="col-md-6">
      <center>
        <img data-aos="zoom-in" class="img-fluid mb-4" style="height: 10rem;" src="assets/images/sanitizer.jpg">
      </center>
      <ul class="ml-lg-5 list-unstyled">
        <li class="ml-lg-5"><strong>Use of sanitizers</strong></li>
        <li  class="ml-lg-5"><strong>STAY AT HOME</strong></li>
        <li  class="ml-lg-5"><strong>Work from home</strong></li>
        <li  class="ml-lg-5"><strong>Visit near health facility if ill</strong></li>
        <li  class="ml-lg-5"><strong>Call state helpline number - <span><a class="callanchors" href="tel:+91104">104</a><span></strong></li>
        </ul>
      </div>
    </div>

  </div>
  <div class="container justify-content-center text-justify pb-5 mt-5 ">
    <center><strong class="heading">Central helpline number - <a  class="callanchors " href="tel:01123978046">01123978046</a> </strong></center></div>
  </div>
=======
   <hr class="mb-5 mt-5">
</div>

<div class="container">
    <center><h3 class="h3 mt-md-4 mb-5 heading" style="font-family: 'Kurale', serif;">Preventive Measures</h3></center>
    <div class="row">
        <div class="col-md-6">
            <center>
                <img data-aos="zoom-in" class="img-fluid mb-4" style="height: 10rem;" src="assets/images/mask.png">
            </center>
            <ul class="ml-lg-5 list-unstyled">
              <li class="ml-lg-5"><strong>Social distancing (at least 6 feet far)</strong></li>
              <li  class="ml-lg-5"><strong>Frequent hand wash</strong></li>
              <li  class="ml-lg-5"><strong>Personal hygiene</strong></li>
              <li  class="ml-lg-5"><strong>Not touching the face with hands</strong></li>
              <li  class="ml-lg-5"><strong>Use of masks by diseased</strong></li>
          </ul>
      </div>

      <div class="col-md-6">
        <center>
            <img data-aos="zoom-in" class="img-fluid mb-4" style="height: 10rem;" src="assets/images/sanitizer.jpg">
        </center>
        <ul class="ml-lg-5 list-unstyled">
            <li class="ml-lg-5"><strong>Use of sanitizers</strong></li>
            <li  class="ml-lg-5"><strong>STAY AT HOME</strong></li>
            <li  class="ml-lg-5"><strong>Work from home</strong></li>
            <li  class="ml-lg-5"><strong>Visit near health facility if ill</strong></li>
            <li  class="ml-lg-5"><strong>Call state helpline number - <span><a class="callanchors" href="tel:+91104">104</a><span></strong></li>
            </ul>
        </div>
    </div>

</div>
<div class="container justify-content-center text-justify pb-5 mt-5 ">
    <center><strong class="heading">Central helpline number - <a  class="callanchors " href="tel:01123978046">01123978046</a> </strong></center></div>
</div>
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1

</div>
</section>

<!-- <div class="container">
 <hr class="mb-5 mt-5">
</div> -->
<section class="mt-2 pb-5 pt-2 middlecontainer">
<<<<<<< HEAD
  <div class="container mt-5">
   <center><h4 class="h3 mt-md-4 mb-5 heading" style="font-family: 'Kurale', serif;">Myth Busters</h4></center>

   <div class="row">

    <div class="col-md-4 order-md-2 pb-5">
      <img class="img-thumbnail" data-aos="fade-down" src="assets/images/myth.jpg">
    </div>

    <div class="col-md-8">
      <ol class="pr-1 ">
        <li  class=" text-justify"><strong>  Pets do not spread. However, follow hand hygiene practices before and after.</strong></li>
        <li  class=" text-justify"><strong>  Vaccines against pneumonia like pneumococcal vaccine and HIB are not effective against corona virus.</strong></li>
        <li  class=" text-justify"><strong>  Chemical disinfectants such as alcohol, chlorine are strictly used to disinfect surfaces only. They should not be used on body.</strong></li>
        <li  class=" text-justify"><strong>  Garlic is not proved to be effective.</strong></li>
        <li  class=" text-justify"><strong>  No evidence that regular gargling with mouthwash is effective.</strong></li>
        <li  class=" text-justify"><strong>  No evidence that regular rinsing of nose with saline is effective.</strong></li>
        <li  class=" text-justify"><strong>  Thermal scanners can't detect all the effected. They can't detect people with no symptoms yet.</strong></li>
        <li  class=" text-justify"><strong>  Putting on sesame oil is not effective.</strong></li>
        <li  class=" text-justify"><strong>  Hand dryers, UV radiation are not effective.</strong></li>
        <li  class=" text-justify"><strong>  Cow's urine is not effective.</strong></li>
      </ol>
=======
    <div class="container mt-5">
       <center><h4 class="h3 mt-md-4 mb-5 heading" style="font-family: 'Kurale', serif;">Myth Busters</h4></center>

       <div class="row">

        <div class="col-md-4 order-md-2 pb-5">
            <img class="img-thumbnail" data-aos="fade-down" src="assets/images/myth.jpg">
        </div>

        <div class="col-md-8">
          <ol class="pr-1 ">
            <li  class=" text-justify"><strong>  Pets do not spread. However, follow hand hygiene practices before and after.</strong></li>
            <li  class=" text-justify"><strong>  Vaccines against pneumonia like pneumococcal vaccine and HIB are not effective against corona virus.</strong></li>
            <li  class=" text-justify"><strong>  Chemical disinfectants such as alcohol, chlorine are strictly used to disinfect surfaces only. They should not be used on body.</strong></li>
            <li  class=" text-justify"><strong>  Garlic is not proved to be effective.</strong></li>
            <li  class=" text-justify"><strong>  No evidence that regular gargling with mouthwash is effective.</strong></li>
            <li  class=" text-justify"><strong>  No evidence that regular rinsing of nose with saline is effective.</strong></li>
            <li  class=" text-justify"><strong>  Thermal scanners can't detect all the effected. They can't detect people with no symptoms yet.</strong></li>
            <li  class=" text-justify"><strong>  Putting on sesame oil is not effective.</strong></li>
            <li  class=" text-justify"><strong>  Hand dryers, UV radiation are not effective.</strong></li>
            <li  class=" text-justify"><strong>  Cow's urine is not effective.</strong></li>
        </ol>
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
    </div>


    


<<<<<<< HEAD
  </div>
=======
</div>
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
</div>

</section>
<div class="container">
<<<<<<< HEAD
 <hr class="mb-5 mt-5">
=======
   <hr class="mb-5 mt-5">
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
</div>



</main>
<div class="container">
<<<<<<< HEAD
  <center>
    <h3 class="h3-responsive" style="color: #FF0266;">
      <strong class="text-black text-center" style="color: #03a9f4;">“Be a responsible citizen, don’t go out and do not let others go out”</strong></h3>
    </center>
  </div>


  <?php include('footer.php');?>

  <script>
 //   updateDate();
    quickGlance();
    drawTotalCasesIndia();
    drawDailyNewCasesInIndia();
    drawAffectedStates();
    drawAffectedStatesForMobile();
    drawTreeChart();

    // function updateDate(){
    //   $.get("assets/latestDate.csv", function(csvString) {
    //     document.getElementById('latestDate').innerHTML = csvString;

    //   });
    // }
  </script>



=======
    <center>
        <h3 class="h3-responsive" style="color: #FF0266;">
            <strong class="text-black text-center" style="color: #03a9f4;">“Be a responsible citizen, don’t go out and do not let others go out”</strong></h3>
        </center>
    </div>


<?php include('footer.php');?>

    <script>
        updateDate();
        quickGlance();
        drawTotalCasesIndia();
        drawDailyNewCasesInIndia();
        drawAffectedStates();
        drawAffectedStatesForMobile();



        function updateDate(){
            $.get("assets/latestDate.csv", function(csvString) {
                document.getElementById('latestDate').innerHTML = csvString;

            });
        }


    </script>
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1

