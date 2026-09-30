
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <!-- main slider section start -->
  <div class="main-slider mt-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      
      <div class="carousel-inner">
          
        <?php
        $cnt = 1;
        foreach($home_banners as $i)
        {
        ?>
          
        <div class="carousel-item <?php if($cnt == 1){ echo "active"; } ?>">
          <img src="<?=$i['image'];?>" class="d-block img-fluid" alt="...">
          <div class="carousel-caption text-start">
            <h1 class="animate__animated animate__fadeInUpBig animate__delay-1s "><?=$i['title'];?></h1>
            <p class="animate__animated animate__fadeInUpBig animate__delay-2s "><?=$i['sub_title'];?></p>
            
            <div class="buttons d-flex animate__animated animate__fadeInUpBig animate__delay-2s">
              <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/"
                class="main-btn"><?=$i['button_name'];?> </a>
              <a href="Kuruva Island Resort & Spa.pdf" class="main-btn">E-Brochure <i class="fas fa-download"></i></a>
            </div>
          </div>
        </div>
        
        <?php
        $cnt++;
        }
        ?>
        
        <!--<div class="carousel-item">-->
        <!--  <img src="images/slider/slider2.jpg" class="d-block w-100" alt="...">-->
        <!--  <div class="carousel-caption text-start">-->
        <!--    <h1 class="animate__animated animate__fadeInUpBig animate__delay-1s ">Best Jungle Resorts <br> in Wayanad</h1>-->
        <!--    <p class="animate__animated animate__fadeInUpBig animate__delay-2s ">Best Wildlife Resort in Wayanad to Experience Jungle Stay</p>-->
        <!--    <div class="buttons animate__animated animate__fadeInUpBig animate__delay-2s">-->
        <!--      <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/"-->
        <!--        class="main-btn">Book Now </a>-->
        <!--      <a href="Kuruva Island Resort & Spa.pdf" class="main-btn">E-Brochure <i class="fas fa-download"></i></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
        <!--<div class="carousel-item">-->
        <!--  <img src="images/slider/slider3.jpg" class="d-block w-100" alt="...">-->
        <!--  <div class="carousel-caption text-start">-->
        <!--    <h1 class="animate__animated animate__fadeInUpBig animate__delay-1s ">Best Private Pool Villa <br> in Wayanad</h1>-->
        <!--    <p class="animate__animated animate__fadeInUpBig animate__delay-2s ">Enjoy the Most Popular Private Pool Resort in Wayanad</p>-->
        <!--    <div class="buttons animate__animated animate__fadeInUpBig animate__delay-2s">-->
        <!--      <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/"-->
        <!--        class="main-btn">Book Now </a>-->
        <!--      <a href="Kuruva Island Resort & Spa.pdf" class="main-btn">E-Brochure <i class="fas fa-download"></i></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- main slider section end -->

  <!-- mobile-slider section -->
  <div class="mobile-slide-section">

    <div id="carouselExampleMobile" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleMobile" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleMobile" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleMobile" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      
      
      <div class="carousel-inner" style="padding:0px !important">
          
          <?php
        foreach($home_banners as $i)
        {
        ?>
        
        <div class="carousel-item active">
          <img src="<?=$i['image'];?>" class="d-block w-100" alt="...">
          <div class="carousel-caption ">
            <h1 class="animate__animated animate__fadeInUpBig animate__delay-1s" style="font-size:25px !important;margin-top:50px !important;"><?=$i['title'];?></h1>
            <p class="animate__animated animate__fadeInUpBig animate__delay-2s "><?=$i['sub_title'];?></p>

            <div class="buttons d-flex animate__animated animate__fadeInUpBig animate__delay-2s">
              <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/"
                class="mobile-btn ms-2"><?=$i['button_name'];?> </a>
              <a href="Kuruva Island Resort & Spa.pdf" class="border-btn ms-2">E-Brochure <i class="fas fa-download"></i></a>
            </div>
          </div>
        </div>
        
            
        <?php
        }
        ?>
        
        <!--<div class="carousel-item">-->
        <!--  <img src="images/slider/mobile/img2.jpg" class="d-block w-100" alt="...">-->
        <!--  <div class="carousel-caption ">-->
        <!--    <h1 class="animate__animated animate__fadeInUpBig animate__delay-1s " style="font-size:25px !important;margin-top:50px !important;">Honeymoon Resorts in Wayanad</h1>-->
        <!--    <p class="animate__animated animate__fadeInUpBig animate__delay-2s ">Explore the Top Luxury Resorts in Wayanad</p>-->

        <!--    <div class="buttons d-flex animate__animated animate__fadeInUpBig animate__delay-2s">-->
        <!--      <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/"-->
        <!--        class="mobile-btn ms-2">Book Now </a>-->
        <!--      <a href="Kuruva Island Resort & Spa.pdf" class="border-btn ms-2">E-Brochure <i class="fas fa-download"></i></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
        <!--<div class="carousel-item">-->
        <!--  <img src="images/slider/mobile/img3.jpg" class="d-block w-100" alt="...">-->
        <!--  <div class="carousel-caption ">-->
        <!--    <h1 class="animate__animated animate__fadeInUpBig animate__delay-1s " style="font-size:25px !important;margin-top:50px !important;">Best Private Pool Villa in Wayanad</h1>-->
        <!--    <p class="animate__animated animate__fadeInUpBig animate__delay-2s ">Enjoy the Most Popular Private Pool Resort in Wayanad</p>-->

        <!--    <div class="buttons d-flex animate__animated animate__fadeInUpBig animate__delay-2s">-->
        <!--      <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/"-->
        <!--        class="mobile-btn ms-2">Book Now </a>-->
        <!--      <a href="Kuruva Island Resort & Spa.pdf" class="border-btn ms-2">E-Brochure <i class="fas fa-download"></i></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleMobile" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleMobile" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>


  </div>

  <!-- room section start -->
  <section class="rooms-wrapper" id="rooms">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h3 class="title mb-3">Our Favourite Rooms</h3>
            <p class="text-muted mx-auto para-desc mb-0">It is our priority to furnish a pleasant atmosphere throughout
              the stay for all guests. We offer four
              luxurious types of rooms that are specially designed to ensure the most comfortable stay for our guests.
            </p>
          </div>
        </div>
      </div>

      <div class="row m-0">
        <div class="col-md-6 col-lg-6 mb-lg-4  room1">
          <div class="room-items">
            <img src="images/rooms/Honeymoon Suite with Plunge Pool/img1.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">HONEYMOON SUITE WITH PLUNGE POOL</h5>
                <a href="<?=base_url('rooms/honeymoon-cottage')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-lg-4 room2">
          <div class="room-items">
            <img src="images/rooms/honeymoon-suite-with-jacuzzi-wayanad.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">HONEYMOON SUITE WITH JACUZZI</h5>


                <a href="<?=base_url('rooms/kabini-suite')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-4 room3">
          <div class="room-items">
            <img src="images/rooms/premium-family-room-wayanada.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">PREMIUM FAMILY SUITE ROOM</h5>


                <a href="<?=base_url('rooms/valley-view')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-4 room4" style="margin-top: -25px;">
          <div class="room-items">
            <img src="images/rooms/private-pool-villa-wayanad.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">PRIVATE POOL VILLA</h5>


                <a href="<?=base_url('rooms/private-pool-villa-wayanad')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- room section end -->


  <!-- Activity Wrapper start-->
  <section class="activity-wrapper">
    <div class="container">
      <div class="row justify-content-center head1">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h3 class="title mb-3">Recreational Activities</h3>
            <p class="text-muted mx-auto para-desc mb-0">The Fully equipped Kids world offers indoor ballroom play and
              slide and much more. <br> Call us: +91 9562205599</p>
          </div>
        </div>
      </div>


      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 col-xl-4 col-md-12 sec1">
          <div class="activity activity1">
            <div class="activity-title">
              <h4>Campfire</h4>
            </div>
            <div class="activity-details">
              <div class="activity-image">
                <img src="images/activity/Campfire.jpg" class="img-fluid" alt="">
              </div>
              <div class="activity-description">
                <p>As a romantic getaway for couples, warm up your relationships and share the best moments with your
                  partner in the cold weather of Wayanad.</p>
              </div>
            </div>
          </div>

          <div class="activity">
            <div class="activity-title">
              <h4>Indoor Play Area</h4>
            </div>
            <div class="activity-details">
              <div class="activity-image">
                <img src="images/activity/Indoor-Play-Area.jpg" class="img-fluid" alt="">
              </div>
              <div class="activity-description">
                <p>We organised a free space by providing the facility of a great entertainment area to spend the
                  precious
                  time of the guest in the best possible way. Spend your every moment most creatively, interactively and
                  imaginatively.</p>
              </div>
            </div>
          </div>

          <div class="activity">
            <div class="activity-title">
              <h4>Candle Light Dinner</h4>
            </div>
            <div class="activity-details">
              <div class="activity-image">
                <img src="images/activity/Candle-Light-Dinner.jpg" class="img-fluid" alt="">
              </div>
              <div class="activity-description">
                <p>Walk with that special person in your life by lighting the candle of your love in a unique atmosphere
                  in the dim light. Spread the rays of love in your every breath and in every direction.
                </p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 col-xl-4 col-md-12 text-center head2">
          <h3 class="title mb-3">Recreational Activities</h3>
          <p class="text-muted mx-auto para-desc mb-0">The Fully equipped Kids world offers indoor ballroom play and
            slide and much more. <br> Call us: +91 9562205599</p>
        </div>

        <div class="col-lg-6 col-xl-4 col-md-12 sec2">
          <div class="activity">
            <div class="activity-title">
              <h4>Wild Safari</h4>
            </div>
            <div class="activity-details">
              <div class="activity-image">
                <img src="images/activity/Wild-Safari.jpg" class="img-fluid" alt="">
              </div>
              <div class="activity-description">
                <p>Wayanad has a lot of mysteries of its own, and the greatest reward and luxury of this trip is getting
                  to know the wildlife and nature up close, and understanding how they are perfectly maintained.</p>
              </div>
            </div>
          </div>

          <div class="activity">
            <div class="activity-title">
              <h4>Sunrise Trekking</h4>
            </div>
            <div class="activity-details">
              <div class="activity-image">
                <img src="images/activity/Sunrise-Trekking.jpg" class="img-fluid" alt="">
              </div>
              <div class="activity-description">
                <p>A beautiful view of the sunrise always refreshes the mind and contributes to a state of happiness.
                  Enjoy the wild beauty of Wayanad in the light of the rising sun.</p>
              </div>
            </div>
          </div>

          <div class="activity">
            <div class="activity-title">
              <h4>Swimming Pool</h4>
            </div>
            <div class="activity-details">
              <div class="activity-image">
                <img src="images/activity/Swimming-pool.jpg" class="img-fluid" alt="">
              </div>
              <div class="activity-description">
                <p>A swimming pool is not only a place to bath, a swimming pool reduces the distance between you and
                  your loved ones, and creates a space of togetherness. Spending a few precious moments in the water
                  will revitalize you.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
  <!-- Activity Wrapper end-->
  
  
  
  
  <section class="section2">
        <div class="container">
            <div class="col-12">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/QqeA6fN2ee0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
  </section>
  
  
  
  
  
  
  
  

  <!-- service icon section start -->
  <section class="service-icon-wrapper section2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h3 class="title mb-3">Services</h3>

          </div>
        </div>
      </div>

      <div class="facilities">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-2 col-md-2 col-4 text-center">
              <img src="images/wifi.png" class="img-fluid" alt="">
              <p>Wi-Fi</p>
            </div>
            <div class="col-lg-2 col-md-2 col-4 text-center">
              <img src="images/24-hours.png" class="img-fluid" alt="">
              <p>24/7 Support</p>
            </div>
            <div class="col-lg-2 col-md-2 col-4 text-center">
              <img src="images/dish.png" class="img-fluid" alt="">
              <p>Dining</p>
            </div>
            <div class="col-lg-2 col-md-2 col-4 text-center">
              <img src="images/double-bed.png" class="img-fluid" alt="">
              <p>Queen Bed</p>
            </div>
            <div class="col-lg-2 col-md-2 col-4 text-center">
              <img src="images/bath.png" class="img-fluid" alt="">
              <p>Hot Water Shower</p>
            </div>
            <div class="col-lg-2 col-md-2 col-4 text-center">
              <img src="images/martini.png" class="img-fluid" alt="">
              <p>Mini Bar</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- service icon section end -->

  <!-- spa section start -->
  <section class="spa-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h4 class="mb-2" style="font-weight: 100 !important;font-size: 18px;">Give your body a new lease of life at the <h3 class="title mb-3">Best Spa Resort in Wayanad!</h3></ class="mb-1">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <p>Today's world of fast food and the hurly-burly of the city can be very stressful for us, which can make us
            sick in a short period of time and sometimes lead us to end our life very quickly. The main reason for this
            is the changes in our lifestyle that allow for various diseases. Ayurveda helps you to prevent these
            lifestyle diseases.
            <br>
            Kuruva Island Resort, one of the most popular spa resorts in Wayanad, offers a refreshing atmosphere and
            refreshes everyone on the path to tough working conditions. We are all looking for a way to relax and the
            Kuruva Island Resort is fulfilling those desires by providing a beautiful atmosphere at our resort. Sanskriti,
            an efficient Ayurvedic centre that offers traditional spa treatments including Ayurvedic massages, is one of
            the best facilities we offer here.As a top luxury family resort in Wayanad, we can nurture the health of you, your loved ones and your family alike.
            <br>
            We offer a customized treatment that includes specialized ayurvedic massage, essential oils, and herbal-infusions tailored to each individual's needs.
          </p>

          <div class="mt-5 mb-5">
            <a href="<?=base_url('spa')?>" class="main-btn">Know More</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="images/facilities/Spa.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- spa section end -->

  <!-- instagram post section start -->
  <section class="instagram-photos section2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h3 class="title mb-3">Follow Our Flow</h3>
          </div>
        </div>
      </div>
    
         
      <div class="row">
      <?php 
        $instagram_posts = $this->db->get_where('instagram_post')->result_array();
        foreach($instagram_posts as $instagram_post){
      ?> 
        <div class="col-lg-4 col-md-4">
          <div class="img">
            <img src="<?=base_url($instagram_post['post'])?>" class="img-fluid" alt="">
            <div class="overlay-work bg-dark"></div>
            <div class="top-left"><a href="https://www.instagram.com/kuruvaislandresort/"><i
                  class="fab fa-instagram" style="color:#E1306C;"></i> </a> </div>
            <!--<div class="icons text-center">-->
            <!--  <a href="images/instagram/insta1.jpg" class="btn btn-icon btn-pills lightbox"><i-->
            <!--      class="fas fa-camera"></i></a>-->
            <!--</div>-->
          </div>
        </div>
     <?php } ?>
     </div>
     
    <!--<div class="row">-->
    <!--    <div class="col-lg-4 col-md-4">-->
    <!--      <div class="img">-->
    <!--        <img src="images/instagram/insta1.jpg" class="img-fluid" alt="">-->
    <!--        <div class="overlay-work bg-dark"></div>-->
    <!--        <div class="top-left"><a href="https://www.instagram.com/kuruvaislandresort/"><i-->
    <!--              class="fab fa-instagram" style="color:#E1306C;"></i> </a> </div>-->
            <!--<div class="icons text-center">-->
            <!--  <a href="images/instagram/insta1.jpg" class="btn btn-icon btn-pills lightbox"><i-->
            <!--      class="fas fa-camera"></i></a>-->
            <!--</div>-->
          <!--</div>-->
        <!--<div class="col-lg-4 col-md-4">-->
        <!--  <div class="img">-->
        <!--    <img src="images/instagram/insta2.jpg" class="img-fluid" alt="">-->
        <!--    <div class="top-left"><a href="https://www.instagram.com/kuruvaislandresort/"><i-->
        <!--          class="fab fa-instagram" style="color:#E1306C;"></i> </a> </div>-->
            <!--<div class="icons text-center">-->
            <!--  <a href="images/instagram/insta2.jpg" class="btn btn-icon btn-pills lightbox"><i-->
            <!--      class="fas fa-camera"></i></a>-->
            <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4 col-md-4">-->
        <!--  <div class="img">-->
        <!--    <img src="images/instagram/insta3.jpg" class="img-fluid" alt="">-->
        <!--    <div class="top-left"><a href="https://www.instagram.com/kuruvaislandresort/"><i-->
        <!--          class="fab fa-instagram" style="color:#E1306C;"></i> </a> </div>-->
            <!--<div class="icons text-center">-->
            <!--  <a href="images/instagram/insta3.jpg" class="btn btn-icon btn-pills lightbox"><i-->
            <!--      class="fas fa-camera"></i></a>-->
            <!--</div>-->
        <!--  </div>-->
        <!--</div>-->


      <div class="row justify-content-center">
        <div class="col-12">
          <div class=" text-center mb-4 pb-2">
            <a href="https://www.instagram.com/kuruvaislandresort/" style="text-transform: lowercase !important;color:#E1306C;font-size:18px;"><i
                class="fab fa-instagram">&nbsp; </i> Follow Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- instagram post section end -->

  <!-- testimonial section start -->
  <section class="testimonials">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h4 class="mb-2" style="font-weight: 100 !important;font-size: 18px;">What our clients say <h3 class="title mb-3">Testimonials</h3></ class="mb-1">
            <!--<h4 class="mb-2">What our clients say</h4>-->
            <!--<h3 class="title mb-3">Testimonials</h3>-->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="swiper testimonialSlider">
          <div class="swiper-wrapper">
            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/profile/women-profile.jpg" class="img-fluid" alt="">
                </div>
                <div class="profile-details">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="customer-name">
                    <h6>Manisha J</h6>
                  </div>
                  <div class="place">
                    <h6>Mumbai</h6>
                  </div>
                </div>
              </div>

              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span> Awesome place to visit. Very good and supportive
                  staff and helpful too. Very nice bonfire with barbeque . Specially like the pool side candle light
                  dinner arrangements done here. Will surely like to visit here . </p>
              </div>


            </div>
            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/profile/profile.jpg" class="img-fluid" alt="">
                </div>
                <div class="profile-details">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="customer-name">
                    <h6>Naveen Peter</h6>
                  </div>
                  <div class="place">
                    <h6>Qatar</h6>
                  </div>
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  A great place Hospitality and And ambience
                  "We had great time staying at this resort,all the staffs with great hospitality and keeping smile
                  always on face ,rooms are clean and big .I would recommend this resort for a fun-filled trip to enjoy
                  with family within my circle .once again thanks for all staffs for showing warm hospitality"
                </p>
              </div>


            </div>
            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/profile/women-profile.jpg" class="img-fluid" alt="">
                </div>
                <div class="profile-details">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="customer-name">
                    <h6>Bhavana K</h6>
                  </div>
                  <div class="place">
                    <h6>Kochi</h6>
                  </div>
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  Rooms are clean and the staff and services were friendly. Will recommend to all guys for sure.
                  Near to kuruva island... Raft jetty....
                  Thirunelly Temple....
                  Honeymoon cottages are good for couples as always with a balcony towards river side. Food can be
                  enjoyed with buffets as always
                </p>
              </div>
            </div>



            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/profile/profile.jpg" class="img-fluid" alt="">
                </div>
                <div class="profile-details">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="customer-name">
                    <h6>MOHAMMED FAIZE</h6>
                  </div>
                  <div class="place">
                    <!-- <h6>Kochi</h6> -->
                  </div>
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  Visited middle of February with my family. Scenic ambiance, good , spacious and sanitized rooms. staff
                  were very friendly and caring. service and food were excellent. Overall we had a good time with family
                  there.
                </p>
              </div>
            </div>

            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/profile/profile.jpg" class="img-fluid" alt="">
                </div>
                <div class="profile-details">
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="customer-name">
                    <h6>TEJESH</h6>
                  </div>
                  <div class="place">
                    <!-- <h6>Kochi</h6> -->
                  </div>
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  Good resort at reasonable price and its located near lake Service is awesome,good place to relax
                  Nearby there are good places to explore Rooms are so clean , bathroom is simply good like u can spend
                  the whole day there... Food is good i …
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial section end -->
  
  
  
  <!---------------------------->
  
  <?php
  
$url = "https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyCMOHnCzRpjUtiBv6vRXJbqBEoZznkJ74A&placeid=ChIJV532o2rnpTsRifwcCec231M";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec ($ch);
$res        = json_decode($result,true);
$reviews    = $res['result']['reviews'];


// echo json_encode($reviews)."-----";
  
  ?>
  
  
  <!-- testimonial section start -->
  <section class="testimonials" style="background-color:white;">
    <div class="container" style="background-color:white; padding:20px; border-radius:20px;">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h4 class="mb-2" style="font-weight: 100 !important;font-size: 18px;">Google <h3 class="title mb-3">Reviews</h3>
            <div class="star" style="color:#d58e30;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
            <!--</ class="mb-1">-->
            <!--<h4 class="mb-2">What our clients say</h4>-->
            <!--<h3 class="title mb-3">Testimonials</h3>-->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="swiper testimonialSlider">
          <div class="swiper-wrapper">
              
              <?php
              
              foreach($reviews as $i)
              {
              
              ?>
              <!--------------------------------------->
            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="<?=$i['profile_photo_url']; ?>" class="img-fluid" alt="">
                </div>
                <div class="profile-details">
                    
                 
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="customer-name">
                    <h6><?=$i['author_name']; ?></h6>
                  </div>
                  <div class="place">
                    <h6><?=$i['relative_time_description']; ?></h6>
                  </div>
                </div>
              </div>

              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span> <?=$i['text']; ?></p>
              </div>
            </div>
            <!---------------------------------------->
            <?php
              }
            ?>
            
            
          



            


          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial section end -->
  
  
  
  
  <!-- Modal -->
<?php
if($home_pagepopup[0]['link'] != "")
{
?>
<div id="myModal" class="modal fade" role="dialog" style="z-index:99999;">
 
  <div class="modal-dialog modal-lg modal-dialog-centered">
      

    <!-- Modal content-->
    <div class="modal-content">
        <div onclick="hidemdl()" style="position:absolute; cursor:pointer; right:20px; top:20px; color:red; padding-left:10px; padding-right:10px; padding-top:5px; padding-bottom:5px; border-radius:100px; z-index:999999; font-color:black; background-color:white;">X</div>
      
      <a href="<?=$home_pagepopup[0]['link'];?>">
          <div class="modal-body">
        <img style="width:100%;" src="<?=base_url().$home_pagepopup[0]['image'];?>">
      </div>
      </a>
      
    </div>

  </div>
</div>
<?php
}
?>


 <script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
    
    function hidemdl(){
        $('#myModal').modal('hide');
    }
 </script>
  
  