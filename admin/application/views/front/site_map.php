
<section class="section section3" id="contact" style="padding-bottom: 50px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="section-title text-center mb-4 pb-2">
            <h4 class="title mb-3">Site Map-kuruva Island Resort</h4>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->

<div class="col-lg-4 col-md-6 col-12 order-md-1 order-2 mt-4 pt-2">
    <div class="flex-1 ms-3">
        <a  class="link-dark" href="https://www.kuruvaislandresort.com"><h4>Home</h4></a>
    </div><br>
    
    <div class="flex-1 ms-3">
        <h4>Rooms</h4><br>
        <ul>
             <?php
                  foreach($rooms as $r)
                  {
                ?>
            <li><a href="<?=base_url();?>rooms/<?=$r['perma'];?>"><?=$r['title'];?></a></li><br>
             <?php
                  }
                  ?>
            <!--<li><a href="https://www.kuruvaislandresort.com/rooms/honeymoon-suite">Honeymoon-suite</a></li><br>-->
            <!--<li><a href="https://www.kuruvaislandresort.com/rooms/honeymoon-cottage">Honeymoon-cottage</a></li><br>-->
            <!--<li><a href="https://www.kuruvaislandresort.com/rooms/kabini-suite">Kabini-suite</a></li><br>-->
            <!--<li><a href="https://www.kuruvaislandresort.com/rooms/private-pool-villa-wayanad">Private-pool-villa-wayanad</a></li><br>-->
        </ul>
    </div>
    
    <div class="flex-1 ms-3">
        <h4>Packages</h4><br>
        <ul>
            <?php
                  foreach($packages as $p)
                  {
                      if($p['status'] == "1")
                      {
                ?>
            <li><a href="<?=base_url();?>packages/<?=$p['perma'];?>"><?=$p['title'];?></a></li>
            <?php
                      }
                  }
                  ?>
                <li><a  href="<?=base_url();?>treatment">7 Day Ayurvedic Holistic <br> Treatment Package</a></li>
            <!--<li><a href="https://www.kuruvaislandresort.com/packages/best-honeymoon-resort-wayanad">best-honeymoon-resort-wayanad</a></li><br>-->
            <!--<li><a href="https://www.kuruvaislandresort.com/packages/wayanad-resorts-honeymoon">wayanad-resorts-honeymoon</a></li><br>-->
            <!--<li><a href="https://www.kuruvaislandresort.com/treatment">Treatment</a></li><br>-->
            <!--<li><a href="https://www.kuruvaislandresort.com/treatment_details">Treatment details</a></li><br>-->
        </ul>
    </div>
    
    <div class="flex-1 ms-3">
        <h4>Gallery</h4><br>
        <ul>
            <li><a href="https://www.kuruvaislandresort.com/photogallery">Photogallery</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/videogallery">Videogallery</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog">Blog</a></li><br>
            
        </ul>
    </div>
    <div class="flex-1 ms-3">
        <h4>Blog</h4><br>
        <ul>
            <li><a href="https://www.kuruvaislandresort.com/blog">Blog</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/resorts-near-kabini">resorts-near-kabini</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/Wayanad-jungle-safari">Wayanad-jungle-safari</a></li><br>
            <!--<li><a href="hhttps://www.kuruvaislandresort.com/blog_details/jungle-resort-in-Wayanad">jungle-resort-in-Wayanad</a></li><br>-->
            <li><a href="https://www.kuruvaislandresort.com/blog_details/resorts-Wayanad-vacation">resorts-Wayanad-vacation</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/Items-trip-Wayanad">Items-trip-Wayanad</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/best-hiking-trails-wayanad">best-hiking-trails-wayanad</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/adventure-sports-activities-try-wayanad">radventure-sports-activities-try-wayanad</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/routes-bangalore-wayanad-road-trip">routes-bangalore-wayanad-road-trip</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/resort-hotel-what-major-differences">resort-hotel-what-major-differences</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/travel-guide-trip-wayanad">travel-guide-trip-wayanad</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/wellness-treatment-stay-wayanad-monsoon">wellness-treatment-stay-wayanad-monsoon</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/wayanad-heavenly-town-gods-own-abode">wayanad-heavenly-town-gods-own-abode</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/kuruva-island-resort-spa">kuruva-island-resort-spa</a></li><br>
            <!--<li><a href="https://www.kuruvaislandresort.com/blog_details/kuruva-island-resort-spa-best-family%20-holidays-wayanad">kuruva-island-resort-spa-best-family%20-holidays-wayanad</a></li><br>-->
            <li><a href="https://www.kuruvaislandresort.com/blog_details/best-luxurious-family-resort-pool-wayanad">best-luxurious-family-resort-pool-wayanad</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/blog_details/why-wayanad-must-have-bucket-list">why-wayanad-must-have-bucket-list</a></li><br>
            <!--<li><a href="https://www.kuruvaislandresort.com/blog_details/unique_casino_review">unique_casino_review</a></li><br>-->
            <!--<li><a href="https://www.kuruvaislandresort.com/blog_details/best_payout_online_casinos_in_2021">best_payout_online_casinos_in_2021</a></li><br>-->
            <!--<li><a href="https://www.kuruvaislandresort.com/blog_details/best-5-deposit-casinos-in-australia">best-5-deposit-casinos-in-australia</a></li><br>-->
        </ul>
    </div>
    
    
    <div class="flex-1 ms-3">
        <h4>Activities</h4><br>
        <ul>
            <li><a href="https://www.kuruvaislandresort.com/placetovisit">Place to visit</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/spa">Spa</a></li><br>
            <li><a href="https://kuruvaislandresort.com/nearbydestination">Near by destination</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/facilities">Facilities</a></li><br>
        </ul>
    </div>
    
    <div class="flex-1 ms-3">
        <h4>Contact</h4><br>
        <ul>
            <li><a href="https://www.kuruvaislandresort.com/contact">Contact Us</a></li><br>
            
            
        </ul>
    </div>
    
    <div class="flex-1 ms-3">
        <h4>Kuruva_Brochure</h4><br>
        <ul>
            <li><a href="https://www.kuruvaislandresort.com/Kuruva_Brochure_Portrait.pdf">Kuruva_Brochure_Portrait.pdf</a></li><br>

        </ul>
    </div>
    
    <div class="flex-1 ms-3">
        <h4>Faq</h4><br>
        <ul>
            <li><a href="https://www.kuruvaislandresort.com/faq">faq</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/overview">overview</a></li>
        </ul>
    </div>
    
    <div class="flex-1 ms-3">
        <h4>Wayanad</h4><br>
        <ul>
            <li><a href="https://www.kuruvaislandresort.com/wayanad">wayanad</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/thingstodo">Things to do</a></li>
        </ul>
    </div>
    
    <div class="flex-1 ms-3">
        <h4>Amenities</h4><br>
        <ul>
            
            <li><a href="https://www.kuruvaislandresort.com/amenities">Amenities</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/placetovisit">Placetovisit</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/dining">Dining</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/experiences">Experiences</a></li><br>
        </ul>
    </div>
    
     <div class="flex-1 ms-3">
        <h4>Spot</h4><br>
        <ul>
            
            <li><a href="https://www.kuruvaislandresort.com/stay">stay</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/swimming_pool">Swimming_pool</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/caves">caves</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/muthanga">muthanga</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/thamarasseri_churam">thamarasseri_churam</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/kuruva_dweep">kuruva_dweep</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/pantom_rock">pantom_rock</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/pookode_lake">pookode_lake</a></li><br>
            
            <li><a href="https://www.kuruvaislandresort.com/pakshi_pathalam">pakshi_pathalam</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/chembra_peak">chembra_peak</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/indoor_play_area">indoor_play_area</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/kids_play_area">kids_play_area</a></li><br>
            
            <li><a href="https://www.kuruvaislandresort.com/river_side_trekking">river_side_trekking</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/campfire">campfire</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/dinner">dinner</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/trekking">trekking</a></li><br>
            <li><a href="https://www.kuruvaislandresort.com/barbecue">barbecue</a></li><br>
    
        </ul>
    </div>


</div>
</section>