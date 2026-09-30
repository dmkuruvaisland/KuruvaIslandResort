
  <nav class="mobile-bottom-nav">
    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i style="margin-top: 5px;font-size: 20px;margin-bottom: 0px !important;" class="fas fa-stream navbar-toggler-icon">
          </i>
          
        </button> 
       <br><span style="font-size: 10px;margin-top: 0px !important;">Menu</span> 
      <a href="#" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <i style="font-size: 20px;margin-top: 5px !important;margin-bottom: -10px !important;"
          class="fas fa-bars navbar-toggler-icon"></i> <br> <span>Menu</span></a>
    </div>
    <div class="mobile-bottom-nav__item">

      <a
        href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/g7gZT_E-BSEViKSs5QBD6g/#/search"><i
          style="font-size: 20px;" class="fas fa-calendar-days"></i> <br> <span>Book Now</span></a>

    </div>
    <div class="mobile-bottom-nav__item">

      <a href="tel:+919562205599"><i style="font-size: 20px;" class="fas fa-phone-alt"></i> <br> <span>Call</span></a>

    </div>
    <div class="mobile-bottom-nav__item">

      <a
        href="https://www.google.co.in/maps/place/Kuruva+Island+Resort/@11.8300242,76.085609,17z/data=!3m1!4b1!4m8!3m7!1s0x3ba5e76aa3f69d57:0x53df36e7091cfc89!5m2!4m1!1i2!8m2!3d11.8300242!4d76.0877977?hl=en-GB&authuser=0"><i
          style="font-size: 20px;" class="fas fa-location-dot"></i> <br> <span>Map</span></a>

    </div>
  </nav>



  <section class="section3 gallery-wrapper">
    <div class="container">

      <div class="row"> 
        <?php
          foreach($list_all as $i)
          {
        ?>
            <div class="col-lg-4 col-sm-6 mb-4">
                
                <a href="<?=$i['image'];?>" data-lightbox="image" >
                <img src="<?=$i['image'];?>" class="img-fluid" alt="">
              </a>
            </div>
         <?php
          }
        ?>
       </div> 
       

      </div>
      <!-- Gallery -->


      <!-- Modal -->
      <!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
      <!--  <div class="modal-dialog modal-dialog-centered modal-lg">-->
      <!--    <div class="modal-content">-->
      <!--      <div class="modal-header">-->
      <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--      </div>-->
      <!--      <div class="modal-body">-->
      <!--        <img src="images/facilities/barbeque.jpg" class="img-fluid" alt="">-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!--<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
      <!--  <div class="modal-dialog modal-dialog-centered modal-lg">-->
      <!--    <div class="modal-content">-->
      <!--      <div class="modal-header">-->
      <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--      </div>-->
      <!--      <div class="modal-body">-->
      <!--        <img src="images/facilities/Camp Fire.jpg" class="img-fluid" alt="">-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!--<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
      <!--  <div class="modal-dialog modal-dialog-centered modal-lg">-->
      <!--    <div class="modal-content">-->
      <!--      <div class="modal-header">-->
      <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--      </div>-->
      <!--      <div class="modal-body">-->
      <!--        <img src="images/facilities/candle-light-dinner.jpg" class="img-fluid" alt="">-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!--<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
      <!--  <div class="modal-dialog modal-dialog-centered modal-lg">-->
      <!--    <div class="modal-content">-->
      <!--      <div class="modal-header">-->
      <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--      </div>-->
      <!--      <div class="modal-body">-->
      <!--        <img src="images/facilities/spa.jpg" class="img-fluid" alt="">-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!--<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
      <!--  <div class="modal-dialog modal-dialog-centered modal-lg">-->
      <!--    <div class="modal-content">-->
      <!--      <div class="modal-header">-->
      <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--      </div>-->
      <!--      <div class="modal-body">-->
      <!--        <img src="images/facilities/sunrise-trecking.jpg" class="img-fluid" alt="">-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!--<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
      <!--  <div class="modal-dialog modal-dialog-centered modal-lg">-->
      <!--    <div class="modal-content">-->
      <!--      <div class="modal-header">-->
      <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--      </div>-->
      <!--      <div class="modal-body">-->
      <!--        <img src="images/slider/slider2.jpg" class="img-fluid" alt="">-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->



    </div>
  </section>
  <!-- <section class="section3 gallery-wrapper">
    <div class="container">
      <a href="#" data-lightbox="homePortfolio">
        <img data-bs-toggle="modal" data-bs-target="#exampleModal" src="images/facilities/barbeque.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="vertical">
        <img src="images/facilities/campfire.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="horizontal">
        <img src="images/facilities/candle-light-dinner.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio">
        <img src="images/facilities/flower-bed.jpeg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio">
        <img src="images/facilities/indoor-play.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="big">
        <img src="images/facilities/restaurant.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio">
        <img src="images/facilities/spa.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="vertical">
        <img src="images/facilities/swimming-pool.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio">
        <img src="images/facilities/wild-life-safari.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="horizontal">
        <img src="images/facilities/sunrise-trecking.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio">
        <img src="images/facilities/sunrise-trecking.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="big">
        <img src="images/facilities/swimming-pool.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio">
        <img src="images/facilities/sunrise-trecking.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="horizontal">
        <img src="images/facilities/spa.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio">
        <img src="images/facilities/river-side-trukking.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="big">
        <img src="images/facilities/restaurant.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio">
        <img src="images/facilities/campfire.jpg" class="img-fluid" />
      </a>

      <a href="#" data-lightbox="homePortfolio" class="vertical">
        <img src="images/facilities/candle-light-dinner.jpg" class="img-fluid" />
      </a>
    </div>
  </section> -->

