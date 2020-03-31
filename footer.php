<div class="container">
 <hr class="mb-5 mt-5">
</div>

<footer class="site-footer bg-dark">
    <div class="container ">
        <div class="row pd-5 pt-5">
        </div>
        <div class="row pb-5 pt-5">
            <!-- col 1 -->
            <div class="col-md-4 mb-5 text-light">
                <h3 class="mb-4 ">About </h3>
                <p class="mb-5 text-justify">We 
                    <a href="https://masscoders2k18.github.io/" target="_blank">'MassCoders'</a>
                a team of website developers trying to keep everyone aware of novel coronovirus (covid-19) status in India. We do not make any profit from this and hence totally commited to not spreading false news.</p>
            </div>
            <!-- col 2 -->
            <div class="col-md-5 mb-5 pl-md-5 text-light">
                <div class="mb-5">
                    <h3 class="mb-4 ">Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block pb-2">
                            <span class="d-block "></span>
                            <span class="text-white "></span>
                        </li>
                            <!-- <li class="d-block pb-2">
                                <span class="d-block">Telephone:</span><span class="text-white"></span>
                            </li> -->
                            <li class="d-block pb-2">
                                <span class="d-block">E-mail:</span><span class="text-white"><a href="mailto:masscoders@gmail.com">masscoders@gmail.com</a></span>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- col 3 -->
                <div class="col-md-3 mb-5 text-light">
                    <h3 class="mb-4">Quick Links</h3>
                    <ul class="list-unstyled text-light quicklinks">
                        <li><a href="index.php" class="nav-link text-white">Home</a></li>
                        <li><a href="insights.php" class="nav-link text-white">Insights</a></li>

                    </ul>
                </div>

                <!-- col 4 -->
                <div class="col-md-3">

                </div>

            </div>
            <div class="row pd-5 pt-5 justify-content-center text-center ">
                <p class="grey-text" style="font-size:75%">Site developed by - <a href="https://masscoders2k18.github.io/" target="_blank" class="blue-grey-text">Mass Coders</a></p>
            </div>
<<<<<<< HEAD
            <div class="row justify-content-center text-center ">
                <p class="grey-text" style="font-size:75%"><a href="http://anuragweb.club/webclub/" target="_blank" class="blue-grey-text">Web Club - Anurag Group of Institutions </a></p>
            </div>
=======
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
        </div>

    </footer>

<<<<<<< HEAD
        
    <!-- Particle scripts -->
    <script src="particle_files//particles.js"></script>
    <script src="particle_files/js/app.js"></script>



    <script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
    </script>
<!-- End Particle scripts -->


=======
>>>>>>> 553e6234caebe6b57afcb8cb00ead0c64998eaf1
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/1.0.8/jquery.csv.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript" src="assets/js/myjs.js"></script>



    <script>
        AOS.init();

        var loading = document.getElementById('loading');

        window.addEventListener('load',function() {
            loading.style.display =  'none';
        });


         window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {

                document.getElementById("navbars").classList.remove("container");
                //document.getElementById("navbars").classList.remove("rgba-teal-strong");
                //document.getElementById("navbars").classList.add("teal");
                document.getElementById("navbars").classList.add("mynavbarcolor");
                document.getElementById("navbars").style.transition = "all 0.3s";
                document.getElementById("navbars").style.position = "fixed";
                document.getElementById("navbars").style.width = "100%";



            } else {

                document.getElementById("navbars").classList.add("container");
                //document.getElementById("navbars").classList.add("rgba-teal-strong");
                //document.getElementById("navbars").classList.remove("teal");
                document.getElementById("navbars").classList.remove("mynavbarcolor");
                document.getElementById("navbars").style.transition = "all 0.3s";
                document.getElementById("navbars").style.position = "sticky";



            }
        }
       

    </script>

</body>

</html>