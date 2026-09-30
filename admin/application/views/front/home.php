
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
              <a href="<?=get_settings('booking_url')?>"
                class="main-btn"><?=$i['button_name'];?> </a>
              <a href="Kuruva_Brochure_Portrait.pdf" class="main-btn">E-Brochure <i class="fas fa-download"></i></a>
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
          $cntt = 1;
        foreach($home_banners as $i)
        {
        ?>
        
        <?//=$i['image'];?>
        
        <div class="carousel-item <?php if($cntt == 1){ echo "active"; } ?>">
          <img src="
          <?php
          if($cntt == 1)
          {
              echo "https://www.kuruvaislandresort.com/uploads/home_banner_mobile/mob_slid_20.jpg";
          }
          else if($cntt == 2)
          {
              echo "https://www.kuruvaislandresort.com/uploads/home_banner_mobile/22.jpg";
          }
          else if($cntt == 3)
          {
              echo "https://www.kuruvaislandresort.com/uploads/home_banner_mobile/33.jpg";
          }
          ?>
          " class="d-block w-100" alt="...">
          <div class="carousel-caption ">
            <h1 class="animate__animated animate__fadeInUpBig animate__delay-1s" style="font-size:25px !important;margin-top:50px !important;"><?=$i['title'];?></h1>
            <p class="animate__animated animate__fadeInUpBig animate__delay-2s "><?=$i['sub_title'];?></p>

            <div class="buttons d-flex animate__animated animate__fadeInUpBig animate__delay-2s">
              <a href="<?=get_settings('booking_url')?>"
                class="mobile-btn ms-2"><?=$i['button_name'];?> </a>
              <a href="Kuruva_Brochure_Portrait.pdf" class="border-btn ms-2">E-Brochure <i class="fas fa-download"></i></a>
            </div>
          </div>
        </div>
        
            
        <?php
        $cntt++;
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

      <div class="grid-row">
        
        <div class="item">
          <div class="room-items">
            <img src="images/rooms/honeymoon-cottage-with-private-pool/Untitled-4.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">HONEYMOON COTTAGE WITH PRIVATE POOL</h5>


                <a href="<?=base_url('rooms/Honeymoon-Cottage-with-private-pool-wayanad')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>
          
        
        <div class="item">
          <div class="room-items">
            <img src="images/rooms/Honeymoon Suite with Plunge Pool/img1.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">HONEYMOON SUITE WITH PLUNGE POOL</h5>
                <a href="<?=base_url('rooms/Honeymoon-suite-plunge-pool-Wayanad')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="room-items">
            <img src="images/rooms/honeymoon-suite-with-jacuzzi-wayanad.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">HONEYMOON SUITE WITH JACUZZI</h5>


                <a href="<?=base_url('rooms/Honeymoon-Suite-Jacuzzi-Wayanad')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="room-items">
            <img src="images/rooms/premium-family-room-wayanada.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">PREMIUM FAMILY ROOM</h5>


                <a href="<?=base_url('rooms/premium-family-suite-resort-wayanad')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="room-items">
            <img src="images/rooms/private-pool-villa-wayanad.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">PRIVATE POOL ROOM</h5>


                <a href="<?=base_url('rooms/private-pool-villa-wayanad')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="item">
          <div class="room-items">
            <img src="images/rooms/suit-room/suit-room-wayanad.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">SUITE ROOM WITH TUB</h5>
                <a href="<?=base_url('rooms/suite_room_with_tub_in_wayanad')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="room-items">
            <img src="images/rooms/studio-room/studio-room.jpg" class="img-fluid" alt="">
            <div class="room-item-wrap">
              <div class="room-content">
                <h5 class="text-white mb-lg-5">STUDIO ROOM WITH TUB</h5>


                <a href="<?=base_url('rooms/studio_room_with_tub_in_wayanad')?>" class="main-btn border-white text-white ">View Room</a>
              </div>
            </div>
          </div>
        </div>
        
        
        <!--<div class="item">-->
        <!--  <div class="room-items">-->
        <!--    <img src="images/rooms/honeymoon-cottage-with-private-pool/Hpr.webp" class="img-fluid" alt="">-->
        <!--    <div class="room-item-wrap">-->
        <!--      <div class="room-content">-->
        <!--        <h5 class="text-white mb-lg-5">HONEYMOON COTTAGE WITH PRIVATE POOL</h5>-->


        <!--        <a href="<?=base_url('rooms/Honeymoon-Cottage-with-private-pool-wayanad')?>" class="main-btn border-white text-white ">View Room</a>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->


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
            <a href="<?=base_url('thingstodo')?>" class="main-btn mt-3" style="margin-bottom:30px !important;padding:15px 25px !important;">Explore Wayanad</a>
            <h3 class="title mb-3 mt-3" style="font-size:32px !important;margin-top:20px !important;">Recreational Activities</h3>
            <p class="text-muted mx-auto para-desc mb-0" style="font-size:18px !important;line-height:1.4 !important;">The Fully equipped Kids world offers indoor ballroom play and
              slide and much more. <br> Call us: +91 9562205599</p>
              
            
          </div>
        </div>
      </div>


        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-xl-4 col-md-12 sec1">
            
                <div class="activity">
                    <div class="activity-title">
                        <h4>Sunrise Trekking</h4>
                    </div>
                    <div class="activity-details">
                        <div class="activity-image">
                            <img src="images/activity/Sunrise-Trekking.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="activity-description">
                            <p>A beautiful view of the sunrise always refreshes the mind and contributes to a state of happiness.Enjoy the wild beauty of Wayanad in the light of the rising sun.</p>
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
                            <p>We organised a free space by providing the facility of a great entertainment area to spend the precious time of the guest in the best possible way. Spend your every moment most creatively, interactively and imaginatively.</p>
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

        <div class="col-lg-6 col-xl-4 col-md-12 text-center head2">
          <h3 class="title mb-3">Recreational Activities</h3>
          <p class="text-muted mx-auto para-desc mb-3">The Fully equipped Kids world offers indoor ballroom play and
            slide and much more. <br> Call us: +91 9562205599</p>
            
        <a href="<?=base_url('thingstodo')?>" class="main-btn mt-3" style="margin-top:30px !important;">Explore Wayanad</a>
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
            Kuruva Island Resort, one of the best resorts in Wayanad with spa, offers a refreshing atmosphere and
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
                  <img src="images/testimonial/Meritxell-Jimenez-Bonet.png" class="img-fluid" alt="">
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
                    <h6>Meritxell Jimenez Bonet5</h6>
                  </div>
                  <!--<div class="place">-->
                  <!--  <h6>Mumbai</h6>-->
                  <!--</div>-->
                </div>
              </div>

              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span> We couldn't have better experience!. We came here for few days and we decided to extend our time because the attention was excellent.The place is very nice, comfortable, stylish and fashion. All the amenities are needed to be mentioned too.The rooms are clean and pleasant, we had a high standard experience.
                The cuisine is amazing, even they provide us food that was not in the menu and made everything possible for us.
                The stuff is also a must to mention. </p>
              </div>


            </div>
            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/testimonial/Mohammed-Azaruddin.png" class="img-fluid" alt="">
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
                    <h6>Mohammed Azaruddin A</h6>
                  </div>
                  <!--<div class="place">-->
                  <!--  <h6>Qatar</h6>-->
                  <!--</div>-->
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  Had a wonderful time on Kuruva Island. All of the staff there went above and beyond to make sure we were comfortable during our stay. They will handle all other issues. Up until I arrived, Mathew kept in touch with me frequently to ensure our arrival there was secure. If you want to live close to nature with excellent service, which we cannot expect in most resorts, I'll heartily recommend this location. Considering all the other benefits of this resort, I didn't care that some food items were expensive
                </p>
              </div>


            </div>
            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/testimonial/Pranathi.png" class="img-fluid" alt="">
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
                    <h6>Pranathi</h6>
                  </div>
                  <!--<div class="place">-->
                  <!--  <h6>Kochi</h6>-->
                  <!--</div>-->
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  It was an excellent visit stay at the resorts. The sound of the river flow was very soothing and took us into a trance. The beauty of the nature was very pleasant and the sunrise along with the cold breeze was very amazing. The food at the resorts was very delicious and the buffet served in the morning was very great and healthy. The amenities provided were very much reasonable and gave a great experience. The service was excellent and was very pleasing to stay there forever.
                </p>
              </div>
            </div>



            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/testimonial/Arihant-Aircon.png" class="img-fluid" alt="">
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
                    <h6>Arihant Aircon</h6>
                  </div>
                  <!--<div class="place">-->
                  <!--   <h6>Kochi</h6> -->
                  <!--</div>-->
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  It's wonderful location and beautiful property.The entire staff very nice and humble.Food quality - Superb We felt like homely food on demand and they made really fantastic.We have seen all category of rooms. Specifically, Pool rooms, Jacuzzi Rooms are excellent.Very good site seeing by Hotel as well.Jungle safari also good.All were celebrating Diwali and they always standby to make guests happy.Must visit this property to experience the difference.

                </p>
              </div>
            </div>

            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/testimonial/Ratish-Menon.png" class="img-fluid" alt="">
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
                    <h6>Ratish Menon</h6>
                  </div>
                  <!--<div class="place">-->
                  <!--   <h6>Kochi</h6> -->
                  <!--</div>-->
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  It was a pleasure staying at Kuruva Island Resort & spa for two days. It's a nice resort with well maintained garden, excellent food and service. They offered complementary fruits, coffee & tea in the room. Breakfast is very good and you can choose north Indian, South Indian & continental, etc. We had a night jungle safari trip arranged by the hotel management and we were able to see Tiger, elephant, Bison and deer. Overall the experience was brilliant and enjoyed our vacation trip. I will definitely stay here again
                </p>
              </div>
            </div>
            
            <div class="swiper-slide card p-3 border-0 text-center">
              <div class="customer-profile justify-content-center text-start  ">
                <div class="profile-img">
                  <img src="images/testimonial/Janani-Bala.png" class="img-fluid" alt="">
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
                    <h6>Janani Bala</h6>
                  </div>
                  <!--<div class="place">-->
                  <!--   <h6>Kochi</h6> -->
                  <!--</div>-->
                </div>
              </div>
              <div class="content">
                <p> <span><i class="fas fa-quote-left"></i></span>
                  Right from the moment we entered and till the time we checked out, the experience was surreal. From welcoming and cheerful staff to the location of the resort, from the amenities available to the arrangements made, everything was up to the mark. Every member of Kuruva Island resort was very courteous. The rooms were clean, very comfortable, and the staff were amazing. They went over and beyond to help make our stay enjoyable. We hope to revisit Kuruva for their spell bound hospitality, sometime in the future, possibly for a longer stay.
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
  
// $url = "https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyCMOHnCzRpjUtiBv6vRXJbqBEoZznkJ74A&placeid=ChIJV532o2rnpTsRifwcCec231M";
// $ch = curl_init();
// curl_setopt ($ch, CURLOPT_URL, $url);
// curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
// $result = curl_exec ($ch);
// $res        = json_decode($result,true);
// $reviews    = $res['result']['reviews'];


// echo json_encode($reviews)."-----";
  
  ?>
  
  
  <!-- testimonial section start -->
  <!--<section class="testimonials" style="background-color:white;">-->
  <!--  <div class="container" style="background-color:white; padding:20px; border-radius:20px;">-->
  <!--    <div class="row justify-content-center">-->
  <!--      <div class="col-12">-->
  <!--        <div class="section-title text-center mb-4 pb-2">-->
  <!--          <h4 class="mb-2" style="font-weight: 100 !important;font-size: 18px;">Google <h3 class="title mb-3">Reviews</h3>-->
            <!--</ class="mb-1">-->
            <!--<h4 class="mb-2">What our clients say</h4>-->
            <!--<h3 class="title mb-3">Testimonials</h3>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="row">-->
  <!--      <div class="swiper testimonialSlider">-->
  <!--        <div class="swiper-wrapper">-->
              
              <?php
              
            //   foreach($reviews as $i)
            //   {
              
              ?>
              <!--------------------------------------->
            <!--<div class="swiper-slide card p-3 border-0 text-center">-->
            <!--  <div class="customer-profile justify-content-center text-start  ">-->
            <!--    <div class="profile-img">-->
            <!--      <img src="" class="img-fluid" alt="">-->
            <!--    </div>-->
            <!--    <div class="profile-details">-->
                    
                 
            <!--      <div class="star">-->
            <!--        <i class="fas fa-star"></i>-->
            <!--        <i class="fas fa-star"></i>-->
            <!--        <i class="fas fa-star"></i>-->
            <!--        <i class="fas fa-star"></i>-->
            <!--        <i class="fas fa-star-half-alt"></i>-->
            <!--      </div>-->
            <!--      <div class="customer-name">-->
            <!--        <h6></h6>-->
            <!--      </div>-->
            <!--      <div class="place">-->
            <!--        <h6></h6>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->

            <!--  <div class="content">-->
            <!--    <p> <span><i class="fas fa-quote-left"></i></span></p>-->
            <!--  </div>-->
            <!--</div>-->
            <!---------------------------------------->
            <?php
            //   }
            ?>
            
            
          



            


  <!--        </div>-->
  <!--        <div class="swiper-pagination"></div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
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
  
  