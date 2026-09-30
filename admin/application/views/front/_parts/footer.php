<!-- Footer -->
  <footer class="text-white">

    <section style="padding: 30px 0;" class="">
      <div class="container mt-5">

        <div class="row mt-3">

          <div class="col-md-6 col-lg-5 col-xl-5 mx-auto mb-4">

            <img src="<?=base_url();?>images/whitelogo.png" alt="" class="logo img-fluid mb-3">
            <h4 class="mb-4">Kuruva Island Resort & Spa</h4>
            <p class="address">Palvelicham,
              Bavali Post, <br> <br>
              Mananthavady ,
              Wayanad, Kerala</p>
            <p>Reservation : <a href="tel:+919562205599" class="text-white">+91 9562205599</a></p>
            <p>Reception : <a href="tel:+919562185599" class="text-white"> +91 9562185599</a></p>
          </div>

          <div class="col-md-6 col-lg-2 col-xl-2 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
            <p><a href="<?=base_url();?>faq" class="text-reset">FAQ</a></p>
            <p><a href="<?=base_url();?>overview" class="text-reset">Overview</a></p>
            <p><a href="<?=base_url();?>blog" class="text-reset">Blog</a></p>
            <p><a href="<?=base_url();?>wayanad" class="text-reset">Wayanad</a></p>
            <p><a href="<?=base_url();?>thingstodo" class="text-reset">Things To Do</a></p>
            <p><a href="<?=base_url();?>spa" class="text-reset">Spa</a></p>
            <p><a href="<?=base_url();?>facilities" class="text-reset">Facilities</a></p>

          </div>

          <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">Rooms</h6>
       <?php
                  foreach($rooms as $r)
                  {
                ?>
                    <p><a href="<?=base_url();?>rooms/<?=$r['perma'];?>" class="text-reset"><?=$r['title'];?></a></p>
                    <?php
                  }
                  ?>
        
            <p><a href="<?=base_url();?>amenities" class="text-reset">Amenities</a></p>
            <p><a href="<?=base_url();?>placetovisit" class="text-reset">Places to Visit</a></p>
            <p><a href="<?=base_url();?>resort-in-kabini" class="text-reset">Resort near Kabini</a></p>
            <p><a href="<?=base_url();?>resort_near_nagerhole" class="text-reset">Resort near nagarahole</a></p>

          </div>


          <div class="col-md-6 col-lg-2 col-xl-2 mx-auto mb-md-0 mb-4">

            <p><a href="<?=base_url();?>dining" class="text-reset">Dining</a></p>
            <p><a href="<?=base_url();?>experiences" class="text-reset">Experiences</a></p>
            <p><a href="<?=base_url();?>photogallery" class="text-reset">Photo Gallery</a></p>
            <p><a href="<?=base_url();?>videogallery" class="text-reset">Video Gallery</a></p>
            <p><a href="<?=base_url();?>contact" class="text-reset">Contact Us</a></p>
            <p><a href="<?=base_url();?>nearbydestination" class="text-reset">Near By Destination</a></p>
            <p><a href="<?=base_url();?>covidupdate" class="text-reset">COVID19 Update</a></p>
            <p><a href="<?=base_url();?>site_map" class="text-reset">Sitemap</a></p>
            <p><a href="<?=base_url();?>privacypolicy" class="text-reset">Privacy Policy</a></p>
        

            <div class="social-icons">
              <a href="https://www.facebook.com/kuruvaislandresort"><i class="fab fa-facebook"></i></a>
              <a href="https://www.instagram.com/kuruvaislandresort/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCeseGY7Vx6LCpFXew_lxhqg"><i class="fab fa-youtube"></i></a>
              <a href="https://www.linkedin.com/company/kuruvaislandresortwayanad"><i class="fab fa-linkedin"></i></a>
              <a href="https://twitter.com/KuruvaResorts"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
        
        <div class="d-flex align-items-center justify-content-center">
          <!--<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mx-auto mb-4"></div>-->
          <div >
              <!--<a href="https://www.google.com/travel/hotels/kuruva%20island%20resort/entity/CgoIifnzyPDcze9TEAE/reviews?q=kuruva%20island%20resort&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4703207%2C4718358%2C4723331%2C4757164%2C4786958%2C4790928%2C4794648%2C4809518%2C4814050%2C4816977%2C4828448%2C4829505&hl=en-IN&gl=in&ssta=1&rp=EIn588jw3M3vUxCJ-fPI8NzN71M4AkAASAHAAQI&ictx=1&utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAESABpJCisSJzIlMHgzYmE1ZTc2YWEzZjY5ZDU3OjB4NTNkZjM2ZTcwOTFjZmM4ORoAEhoSFAoHCOYPEAkYARIHCOYPEAkYAhgBMgIQACoJCgU6A0lOUhoA">-->
              <!--    <img src="<?=base_url();?>images/g_review.png" style="width:150px; border-radius:10px;">-->
              <!--    </a>-->
              
          <!--    <div id="TA_certificateOfExcellence594" class="TA_certificateOfExcellence"><ul id="27Nwbr1xEVNh" class="TA_links FhXexAMo9zjc"><li id="MEwzoLZk" class="IL7X6odH99"><a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g2289005-d19820784-Reviews-Kuruva_Island_Resort_And_Spa-Mananthavady_Wayanad_District_Kerala.html"><img src="https://static.tacdn.com/img2/travelers_choice/widgets/tchotel_2022_LL.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=594&amp;locationId=19820784&amp;lang=en_IN&amp;year=2022&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>-->
          <!--</div>-->
          <div >
              <!--<a href="https://www.tripadvisor.in/Hotel_Review-g2289005-d19820784-Reviews-Kuruva_Island_Resort_Spa-Mananthavady_Wayanad_District_Kerala.html">-->
              <!--    <img src="<?=base_url();?>images/tr_review.png" style="width:150px; border-radius:10px;">-->
              <!--    </a>-->
          <!--    <div id="TA_excellent747" class="TA_excellent"><ul id="5YRGBD1" class="TA_links jbHDDHxju"><li id="4h1fpZ7" class="4eoz7k"><a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g2289005-d19820784-Reviews-Kuruva_Island_Resort_And_Spa-Mananthavady_Wayanad_District_Kerala.html"><img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=excellent&amp;uniq=747&amp;locationId=19820784&amp;lang=en_IN&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>-->
          <!--</div>-->
        </div>
        
        
      </div>
    </section>

    <!-- Copyright -->
    <!-- <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div> -->
    <!-- Copyright -->


  </footer>
  <!-- Footer -->


<a href="//api.whatsapp.com/send?phone=+919562205599&text=Hi, I would like to book a room. May I know the availability and rates?"><i class="open-button fab fa-whatsapp"></i></a>

<a href="https://www.instagram.com/kuruvaislandresort/"><i class="open-button2 fab fa-instagram"></i></a>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    
    <script>
        AOS.init();
    </script>

<!-- jQuery -->
<script src="<?php rootURL('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php rootURL('assets/'); ?>plugins/toastr/toastr.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script src="<?=base_url();?>js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <script>
  
  $(document).ready(function() {
		// setTimeout( function(){
		// 	toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		// }  , 500 );
		<?php show_alert(); ?>
	});
  
    var swiper = new Swiper(".testimonialSlider", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
  </script>



    <script>

        var swiper = new Swiper(".imageSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    
</body>

</html>