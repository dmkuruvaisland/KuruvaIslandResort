
  <?php
  
$url = "https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyCMOHnCzRpjUtiBv6vRXJbqBEoZznkJ74A&placeid=ChIJV532o2rnpTsRifwcCec231M";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec ($ch);
$res        = json_decode($result,true);

if($res['status'] == "REQUEST_DENIED")
{
    $reviews    = [];
}
else{
   $reviews    = $res['result']['reviews']; 
}



// echo json_encode($reviews)."-----";

  
  ?>
  
    <section class="section3 package-details">
    <div class="container">
        <h1 class="mb-3" style="line-height:1.2;"><?=$rooms_details[0]['title'];?></h1>
        
        
        <?php
        if(count($reviews) > 0)
        {
        ?>
        <div class="rating">
            
            <div class="star">
                
                
                    <?php
                    $total_rating =  5;
                    $number_of_ratings = $res['result']['rating'];
                  
                    ?>
                <?php
                    for($i = 1; $i <= $total_rating; $i++):?>
                        <?php if ($i <= $number_of_ratings): ?>
                           <i class="fas fa-star"></i>
                        <?php else: ?>
                             <i class="fa-regular fa-star"></i>
                        <?php endif; ?>
                    <?php endfor; ?>
                
                
                <!--<i class="fas fa-star-half-alt"></i>-->
                
                    
            </div>
            
    
            <div class="point">
                <h6><?=$res['result']['rating'];?>/5</h6>
            </div>
            <div class="g-review">
                <a href="https://www.google.com/travel/hotels/kuruva%20island%20resort/entity/CgoIifnzyPDcze9TEAE/reviews?q=kuruva%20island%20resort&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4597339%2C4703207%2C4718358%2C4723331%2C4757164%2C4786958%2C4790928%2C4794648%2C4809518%2C4814050%2C4816977%2C4828448%2C4829505&hl=en-IN&gl=in&ssta=1&rp=EIn588jw3M3vUxCJ-fPI8NzN71M4AkAASAHAAQI&ictx=1&utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAESABpJCisSJzIlMHgzYmE1ZTc2YWEzZjY5ZDU3OjB4NTNkZjM2ZTcwOTFjZmM4ORoAEhoSFAoHCOYPEAkYARIHCOYPEAkYAhgBMgIQACoJCgU6A0lOUhoA">
                    <?=$res['result']['user_ratings_total'];?> Google reviews</a>
            </div>
        </div>
        

        <?php
        }
        
        if(count($photos) > 0)
        {
            
        
        ?>
        <div class="images mt-3 mb-2">
            
            <img class="img1" src="<?=base_url($photos[0]['image']);?>" />

            <img class="img2" src="<?=base_url($photos[1]['image']);?>" />

            <img src="<?=base_url($photos[2]['image']);?>" />
            <img src="<?=base_url($photos[3]['image']);?>" />


        </div>
        
        <?php
        }
        ?>


        <!-- images mobile view -->
        <div class="row mt-3">
            <div class="col-md-12 mb-3">
                <!-- Swiper -->
                <div class="swiper imageSwiper">
                    <div class="swiper-wrapper">
                        
                        <?php
                        foreach($photos as $pp)
                        {
                        ?>
                        <div class="swiper-slide">
                            <img src="<?=base_url($pp['image']);?>" class="img-fluid"
                                alt="">
                        </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>



            <div class="row row2">
                <div class="col-lg-8 mt-3">
                    <?=$rooms_details[0]['description'];?>
                </div>
                <div class="col-lg-4 mt-3 text-center">
                    
                    
                    <div class="box">
                        <p>Wayanad Honeymoon Resort</p>
                        <a href="<?=get_settings('booking_url')?>"
                    class="border-0 main-btn me-3">Book Now</a>
                    
                    <a href="<?=$rooms_details[0]['brochure_url'];?>"
                        class="border-0 main-btn mb-3">E-Brochure <i class="fas fa-download"></i></a>
                    </div>
                    
                    <!--<div class="row box align-items-center">-->
                    <!--    <div class="col-md-6">-->
                    <!--        <div class="content">-->
                    <!--        <h6 class="mb-5">From</h6>-->
                    <!--        <h4><i class="fas fa-rupee-sign"></i> 15,000</h4>-->
                    <!--        <p>Wayanad Honeymoon Resort</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                        
                    <!--    <div class="col-md-6 mb-3 text-start text-md-center">-->
                    <!--        <div class="button">-->
                    <!--            <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/g7gZT_E-BSEViKSs5QBD6g/#/search" -->
                    <!--            class="border-0 main-btn">Book Now</a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                        
                        
                    <!--</div>-->
                    
                    <!--<div class="box">-->
                    <!--    <div class="content">-->
                    <!--        <h6>From</h6>-->
                    <!--        <h4><i class="fas fa-rupee-sign"></i> 15,000</h4>-->
                    <!--        <p>Wayanad Honeymoon Resort</p>-->
                    <!--    </div>-->
                    <!--    <div class="button">-->
                    <!--        <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/g7gZT_E-BSEViKSs5QBD6g/#/search" class="border-0 main-btn ms-3">Book Now</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>

            <div class="row activity-row">
                
                <?php
                if(($rooms_details[0]['youtube_video_id'] != null || trim($rooms_details[0]['youtube_video_id']) != ''))
                {
                ?>
                <div class="col-md-12 col-lg-4 d-block d-sm-none mb-5">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/<?=$rooms_details[0]['youtube_video_id'];?>" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php
                }
                ?>
                
                <div class="col-md-12 col-lg-8">
                    <h3>Features</h3>

                <!--<div class="activity">-->
                <!--    <div class="icon">-->
                <!--        <i class="fas fa-thumbs-up"></i>-->
                <!--    </div>-->
                <!--    <div class="content ">-->
                <!--        <h6>Free Cancellation</h6>-->
                <!--        <p class="text-muted">Cancel up to 24 hours in advance to recieve a full refund</p>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="activity">
                    <div class="icon">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                    <div class="content ">
                        <h6>Covid-19 precuations</h6>
                        <p class="text-muted">Special health and safety measures apply. <a href="#">Learn more</a>
                        </p>
                    </div>
                </div>
                <div class="activity">
                    <div class="icon">
                        <i class="fas fa-cash-register"></i>
                    </div>
                    <div class="content ">
                        <h6>Reserve now & pay later</h6>
                        <p class="text-muted">Reserve now & pay later to book your spot without any charges today.
                            <a href="#">Learn more</a>
                        </p>
                    </div>
                </div>
                <div class="activity">
                    <div class="icon">
                        <i class="fas fa-mobile-alt me-2"></i>
                    </div>
                    <div class="content ">
                        <h6>Direct Booking System</h6>
                        <p class="text-muted">Hustle free direct booking system</p>
                    </div>
                </div>
                <div class="activity">
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="content ">
                        <h6>Duration 24 hours</h6>
                        <p class="text-muted">Check availability to see starting times</p>
                    </div>
                </div>
                <div class="activity">
                    <div class="icon">
                        <i class="fas fa-lightbulb me-2"></i>
                    </div>
                    <div class="content">
                        <h6>Instant Confirmation</h6>
                    </div>
                </div>
                <div class="activity">
                    <div class="icon">
                        <i class="fas fa-flag-checkered"></i>
                    </div>
                    <div class="content">
                        <h6>Host a Greeter</h6>
                        <p class="text-muted mb-0 mt-2">English</p>
                        <p class="text-muted mb-0">Hindi</p>
                        <p class="text-muted">Malayalam</p>
                        
                    </div>
                </div>
                <div class="activity">
                    <div class="icon">
                        <i class="fas fa-bus"></i>
                    </div>
                    <div class="content ">
                        <h6>Pickup and Drope</h6>
                    </div>
                </div>
                <div class="activity">
                    <div class="icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="content ">
                        <h6>Private Group</h6>
                    </div>
                </div>
                </div>
                
                  <?php
                if(($rooms_details[0]['youtube_video_id'] != null || trim($rooms_details[0]['youtube_video_id']) != ''))
                {
                ?>
                <div class="col-md-12 col-lg-4 d-none d-sm-block">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/<?=$rooms_details[0]['youtube_video_id'];?>" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php
                }
                ?>
                
                
        </div>

        <div class=" experience">
            <div class="container">
                <h3 class="mb-4">Amenities</h3>

                <div class="row highlites">
                    
                    <?php
                    foreach($amenity as $am)
                    {
                    ?>
                    <div class="col-lg-2 col-md-3 ">
                        <h6><?=$am['amenity'];?></h6>
                    </div>
                    <div class="col-lg-10 col-md-9">
                        <ul>
                             <?php
                            foreach($amenity_values as $amv)
                            {
                                if($amv['amenity_id'] == $am['id'])
                                {
                            ?>
                            <li><img src="<?=base_url();?>images/check-mark.png"> <?=$amv['value'];?></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <hr>
                    <?php
                    }
                    ?>


                    
                    
                </div>
            </div>
        </div>

        <div class="also-like">
            <div class="container">
                <h3 class="mb-3">You might also like</h3>

                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?=base_url();?>images/also-like/jeep-trucking.jpg" class="img-fluid card-img-top" alt="">
                                <h3>Morning Safari</h3>
                            </div>

                            <div class="card-body">
                                <h6>Forest Safari 20 km</h6>
                                <h6>Off road 15 km to forest</h6>
                                <h6>Thirunelli temple (freshup)</h6>
                                <h6>Traditional shop visit</h6>


                            </div>
                            <!--<div class="card-footer">-->
                            <!--    <h4>4500/-3hr</h4>-->
                            <!--    <h6><strong>Sharing:900/-</strong> (If 6 persons)</h6>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?=base_url();?>images/also-like/morning-trecking.jpg" class="img-fluid card-img-top" alt="">
                                <h3>Morning Trekking</h3>
                            </div>

                            <div class="card-body">
                                <h6>Kurumbalakotta Sunrise (Trekking)</h6>
                                <h6>Toddy shop visit</h6>
                                <h6>Jain temple visit</h6>


                            </div>
                            <!--<div class="card-footer">-->
                            <!--    <h4>4500/-3hr</h4>-->
                            <!--    <h6><strong>Sharing:900/- </strong> (If 6 persons)</h6>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?=base_url();?>images/also-like/day-package.jpg" class="img-fluid card-img-top" alt="">
                                <h3>Day Package</h3>
                            </div>
                            <div class="card-body">
                                <h6>Banasura sagar visit</h6>
                                <h6>Meen mutty waterfalls</h6>
                                <h6>Karinthandan Temple</h6>
                                <h6>Tea estate & factory visit</h6>

                            </div>
                            <!--<div class="card-footer">-->
                            <!--    <h4>4500/-3hr</h4>-->
                            <!--    <h6><strong>Sharing:900/- </strong> (If 6 persons)</h6>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?=base_url();?>images/also-like/nightsafari.jpg" class="img-fluid card-img-top" alt="">
                                <h3>Evening Safari</h3>
                            </div>
                            <div class="card-body">
                                <h6>Thirunelli temple</h6>
                                <!--<h6>Forest on road</h6>-->
                                <h6>Tholpetti/Bavali</h6>


                            </div>
                            <!--<div class="card-footer">-->
                            <!--    <h4>4500/-3hr</h4>-->
                            <!--    <h6><strong>Sharing:900/- </strong> (If 6 persons)</h6>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="subscribe-email">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="section-title text-center mb-2">
                <h3 class="title mb-3" style="font-size:20px !important;">Subscribe Now</h3>
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


  
