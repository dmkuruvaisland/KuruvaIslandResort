<style>
    
    .package-heading h1{
        font-size:45px !important;
        line-height:1;
        margin-bottom:30px;
    }
    .feature-list li p{
        margin-bottom:-10px !important;
    }
    .inclusion .day p{
        font-size:18px !important;
        margin-bottom:-20px !important;
    }
    .order-list p{
        font-size:25px !important;
        margin-left:-30px !important;
        margin-bottom:0px !important;
    }
    .order-list h3{
        font-size:25px !important;
        margin-left:-30px !important;
        margin-top:10px !important;
    }
    
    @media screen and (max-width:1024px){
       .package-heading h1{
        font-size:30px !important;
        line-height:1.2;
        } 
        .order-list p{
            font-size:20px !important;
            /*margin-left:-30px !important;*/
            margin-top:10px !important;
        }
        .order-list h3{
            font-size:20px !important;
            margin-top:15px !important;
        }
    }
</style>

  <section class="section3 package-wrapper">
    <div class="container">
      <div class="package-heading">
        <h1><?=$package_details[0]['title'];?></h1>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="package-details">
              <ul>
                  <!--<li class="d-flex"><img style="width:20px;height:20px;margin-top:6px;" src="<?=base_url();?>images/check-mark.png"><?=$package_details[0]['content'];?></li>-->
                  
              <!--<li><img src="<?=base_url();?>images/check-mark.png"> Honeymoon Cottage 2 Nights Rack</li>-->
              <li><img src="<?=base_url();?>images/check-mark.png"> Candle Light Dinner with Five Course Menu</li>
              <li><img src="<?=base_url();?>images/check-mark.png"> Flower Bed</li>
              <li><img src="<?=base_url();?>images/check-mark.png"> Full Body Massage For Couple</li>
              <li><img src="<?=base_url();?>images/check-mark.png"> Local Tour With 4 Wheel Jeep</li>
              <li><img src="<?=base_url();?>images/check-mark.png"> Night Safari</li>
              <li><img src="<?=base_url();?>images/check-mark.png"> Second Day Dinner</li>
              <li><img src="<?=base_url();?>images/check-mark.png"> Morning Safari</li>
            </ul>
            <!--<?=$package_details[0]['content'];?>-->
          </div>
        </div>
        <div class="col-lg-4 col-md-8">
          <div class="card p-2 card1 mb-3 ">
            <?=$package_details[0]['book_now_section'];?>
            <a href="<?=get_settings('booking_url')?>" class="main-btn">Book Now</a>
          </div>
        </div>

        <div class="col-lg-8">
            
            <ol class="order-list">
                <?=$package_details[0]['content'];?>
            </ol>
            
          <!--<ol>-->
          <!--  <li>Honeymoon Suit with Plunge Pool</li>-->
          <!--  <li>Honeymoon Suit with Jacuzzi <br>-->
          <!--    <span>Rs- 45000/- Weekday</span> <br>-->
          <!--    <span>Rs- 49000/- Weekend</span>-->
          <!--  </li>-->
          <!--  <li>Honeymoon Suit with Private Pool <br>-->
          <!--    <span>Rs- 64000/- Weekday</span> <br>-->
          <!--    <span>Rs- 69000/- Weekend</span>-->
          <!--  </li>-->
          <!--</ol>-->
        </div>
        
        
        
        
        

        <!--Room Gallery start-->
        <div class="col-lg-4">
            <div class="card p-2 card2 mb-4">
                <h5>Rooms Gallery</h5>
                <div class="row">
                  
                  <div class="col-lg-6 col-md-6 col-6 mb-3">
                      
                    <a href="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img6.jpg" data-lightbox="image" >
                        <img src="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img6.jpg" class="img-fluid" alt="">
                    </a>
                      
                  </div>
                  <div class="col-lg-6 col-md-6 col-6 mb-3">
                     
                    <a href="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img5.jpg" data-lightbox="image" >
                        <img src="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img5.jpg" class="img-fluid" alt="">
                    </a>
                      
                  </div>
                  <div class="col-lg-6 col-md-6 col-6 mb-3">
                      
                    <a href="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img4.jpg" data-lightbox="image" >
                        <img src="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img4.jpg" class="img-fluid" alt="">
                    </a>
                      
                  </div>
                  <div class="col-lg-6 col-md-6 col-6 mb-3">
                     
                    <a href="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img5.jpg" data-lightbox="image" >
                        <img src="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img5.jpg" class="img-fluid" alt="">
                    </a>
                      
                  </div>
                  
                </div>
                <!-- end row -->
            </div>
            <!--end card -->
        </div>
        <!--Room Gallery end-->
        
        
        
        
        

        <div class="col-lg-8">
          <h4>Features & Amenities</h4>
          <div class="feature-list">
            <ul>
                <?php
                foreach($features as $f)
                {
                ?>
              <li class="d-flex"><img style="width:20px;height:20px;margin-top:6px;" src="<?=base_url();?>images/check-mark.png"><?=$f['facility'];?></li>
              <?php } ?>
            </ul>
          </div>
          <hr>
        </div>
        <div class="col-lg-4">

        </div>
        <div class="col-lg-8 inclusion">
        <h4>Inclusions</h4>
            
        <?php
        foreach($amenity as $am)
        {
        ?>
          <h5 class="day"><?=$am['amenity'];?></h5>
          <ul>
               <?php
        foreach($amenity_values as $amv)
        {
            if($am['id'] == $amv['amenity_id'])
            {
        ?>
            <li><img src="<?=base_url();?>images/check-mark.png"> <?=$amv['value'];?></li>
            <?php
            }
        }
            ?>
          </ul>
          <?php
        }
          ?>
          
          
          
          <hr>

          <ul>
            <li>T&C Ally</li>
            <li>Tax Excluded</li>
          </ul>
        </div>
      </div>
 
 
        <!--Photo gallery start-->
        <div class="row justify-content-center photogallery">
            
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-left mb-2 pb-2">
                        <h3 class="title mb-1">Photo Gallery</h3>
                    </div>
                </div>
            </div>
            
            <div class="row">
            <?php
            $cnt=1;
              $list_all = $this->main->get_photo_gallery();
              foreach($list_all as $i)
              {
                  if($cnt <= 4)
                  {
            ?>
                <div class="col-lg-3 col-6 mb-5">
                    <a href="<?=base_url().$i['image'];?>" data-lightbox="image" >
                    <img style="width:100%;height:200px;object-fit:cover;border-radius:10px;" src="<?=base_url().$i['image'];?>" class="img-fluid" alt="">
                    </a>
                </div>
            <?php
                  }
            $cnt++;
              }
            ?>
                <!--<div class="col-lg-3 col-6 mb-5">-->
                <!--    <a href="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img2.jpg" data-lightbox="image" >-->
                <!--    <img src="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img2.jpg" class="img-fluid" alt="">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-6 mb-5">-->
                <!--    <a href="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img4.jpg" data-lightbox="image" >-->
                <!--    <img src="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img4.jpg" class="img-fluid" alt="">-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-6 mb-5">-->
                <!--    <a href="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img5.jpg" data-lightbox="image" >-->
                <!--    <img src="<?=base_url();?>images/rooms/Honeymoon Suite with Jacuzzi/img5.jpg" class="img-fluid" alt="">-->
                <!--    </a>-->
                <!--</div>-->
            </div>
            <!--end row-->
            
            <a href="<?=base_url();?>photogallery" class="text-center main-btn" style="width:auto;">View More</a>
            
        </div>
        <!--Photo gallery end-->
          
          
          
    </div>
  </section>




<!--Subscribe email section-->
  <section class="subscribe-email">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-2">
            <h3 class="title mb-3">Subscribe Now</h3>
          </div>
        </div>
      </div>

      <div class="row justify-content-center align-items-center">
        <div class="text-center subcribe-form mt-4 pt-2">
          <form>
            <input type="email" id="url" class="border bg-white rounded-lg" style="opacity: 0.85;" required
              placeholder="Enter your email address">
            <button type="submit" class="btn btn-pills main-btn">Subscribe Now</button>
          </form>
          <!--end form-->
        </div>
      </div>
    </div>
  </section>

<script src="<?=base_url();?>js/lightbox.js"></script>
