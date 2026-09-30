<!DOCTYPE html>
<html lang="zxx">
        
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="description" content="Discover the perfect getaway at Kuruva Island Resort & Spa, a pet-friendly resort in Wayanad. Explore paradise with your furry friend. Check it Out."/>
        <meta name="keywords" content="Wayanad best resorts to stay, best view resorts in Wayanad" />
        
        <title><?= strip_tags($page_title) ?></title>
        <link rel="shortcut icon" href="<?= base_url('assets/')?>img/favicon.webp" />
        <link rel="stylesheet" href="<?= base_url('assets/')?>css/plugins.css" />
        <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css" />
        <?php
            // Set the base URL for the canonical (always in https)
            $baseUrl = "https://kuruvaislandresort.com/blog/";
    
            // Get the part of the URL after /blog/
            $relativeUrl = str_replace('/blog/', '', $_SERVER['REQUEST_URI']);
    
            // Combine the base URL with the relative part to create the canonical URL
            $canonicalUrl = $baseUrl . ltrim($relativeUrl, '/'); // Ensure there's no leading slash
        ?>
    
        <!-- Dynamically generated canonical URL -->
        <link rel="canonical" href="<?php echo $canonicalUrl; ?>" />
        <!--<link rel="canonical" href="https://www.kuruvaislandresort.com/best-place-to-visit-in-wayanad-exploring-kuruva-island.php" />-->
        
        <style>
            .news2 .post-cont i {
                color: #123d35;
                margin: 0 10px;
                font-size: 16px;
            }
        </style>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <div class="container">
                 <!--Logo -->
                <div class="logo-wrapper">
                    <a class="" href="/"> <img src="https://kuruvaislandresort.com/blog/assets/img/whitelogo.webp" class="logo-img" alt="Kuruva Island"> </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                        class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
                 <!--Navbar links -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="https://kuruvaislandresort.com/">Home</a></li>                   
                        <li class="nav-item dropdown"> 
                        <span class="nav-link" data-bs-toggle="dropdown" aria-expanded="false"> Rooms <i class="ti-angle-down"></i></span>
                            <ul class="dropdown-menu last">
                                
                        <li class="dropdown-item"><a href="https://kuruvaislandresort.com/premium-suite-with-jacuzzi">Premium Suite with Jacuzzi</a></li>
            
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/honeymoon-resorts-wayanad-with-private-pool"> Honeymoon Cottage with Private Pool</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/family-resorts-wayanad"> Premium Family Room With Balcony</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/honeymoon-resorts-wayanad"> Honeymoon Cottage With Plunge Pool</a></li>                           
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/resorts-wayanad-with-jacuzzi"> Honeymoon Cottage With Jacuzzi</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/private-pool-villa-wayanad"> Private Pool Room</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/twin-bedroom-suite-resort-wayanad"> Twin-bedroom Suite With Tub</a></li>
                                 <li class="dropdown-item"><a href="#"> Honeymoon Cottage</a></li> 
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/suite-room-with-tub-wayanad"> Suite Room With Tub</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/studio-room-with-tub-wayanad"> Studio Room With Tub</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown"> <span class="nav-link" data-bs-toggle="dropdown"
                                aria-expanded="false"> Packages <i class="ti-angle-down"></i></span>
                            <ul class="dropdown-menu last">                            
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/jungle-safari-kabini-nagarhole">Jungle Safari in Kabini and Nagarhole</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/honeymoon-packages-kerala">Special Honeymoon Package </a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/ayurvedic-treatment-kerala">7 Day Ayurvedic Holistic Treatment Package </a></li>
                                 
                                 <li class="dropdown-item"><a href="https://kuruvaislandresort.com/resort-in-kabini">Resort in Kabini </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"> <span class="nav-link" data-bs-toggle="dropdown"
                                aria-expanded="false"> Gallery <i class="ti-angle-down"></i></span>
                            <ul class="dropdown-menu last">
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/photogallery">Photo Gallery</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/videogallery">Video Gallery</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/blog/">Blog</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"> <span class="nav-link" data-bs-toggle="dropdown"
                                aria-expanded="false"> Activities <i class="ti-angle-down"></i></span>
                            <ul class="dropdown-menu last">
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/place-to-visit">Place to Visit</a></li>
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/ayurveda-spa-resort-wayanad">Spa</a></li>
                                 <!--<li class="dropdown-item"><a href="#">Near By Destinations</a></li> -->
                                <li class="dropdown-item"><a href="https://kuruvaislandresort.com/kuruva-facilities">Facilities</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://kuruvaislandresort.com/events-wayanad">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://kuruvaislandresort.com/contact">Contact</a></li>
                    </ul>
                     <!--Cart -->
                    <div class="cart">
                        <div class="permalink">
                            <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/" target="_blank" class="button-book">BOOK NOW<span></span></a>
                            <!--<a href="tel:+91 9562205599" class="button-book">BOOK NOW<span></span></a>-->
                        </div>
            
            
            
                    </div>
                </div>
            </div>
        </nav>
         
        <div class="preloader-bg"></div>
        <div id="preloader">
        <div id="preloader-status">
        <div class="preloader-position loader"><span></span></div>
        </div>
        </div>
        <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /></svg>
        </div>
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="7" data-background="<?= base_url('assets/')?>img/blogs/bloge-banner.webp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center caption mt-60">
                        <h5>Kuruva Island Resort & Spa</h5>
                        <h2 style="font-size: 50px;">Blogs</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="news2 section-padding">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="post-img"><img src="/admin/<?= $blog['image'] ?>" alt="kuruva island" /></div>
                                    <div class="post-cont">
                                        <strong><i class="fa fa-calendar-days"></i><?= date('d-m-Y', strtotime($blog['date'])) ?></strong>
                                        <h1><?=strip_tags($blog['title'])?></h1>
                                        <?=$blog['content']?>
                                    </div>
                                </div>
                            </div>
                            <a class="share-btn share-btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.kuruvaislandresort.com/wayanad-trip-with-family.php" rel="nofollow" target="_blank">
                                <i class="ti-facebook"></i>Share
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <script src="<?= base_url('assets/')?>js/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url('assets/')?>js/jquery-migrate-3.0.0.min.js"></script>
        <script src="<?= base_url('assets/')?>js/modernizr-2.6.2.min.js"></script>
        <script src="<?= base_url('assets/')?>js/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url('assets/')?>js/jquery.isotope.v3.0.2.js"></script>
        <script src="<?= base_url('assets/')?>js/pace.js"></script>
        <script src="<?= base_url('assets/')?>js/popper.min.js"></script>
        <script src="<?= base_url('assets/')?>js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/')?>js/scrollIt.min.js"></script>
        <script src="<?= base_url('assets/')?>js/jquery.waypoints.min.js"></script>
        <script src="<?= base_url('assets/')?>js/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/')?>js/jquery.stellar.min.js"></script>
        <script src="<?= base_url('assets/')?>js/jquery.magnific-popup.js"></script>
        <script src="<?= base_url('assets/')?>js/YouTubePopUp.js"></script>
        <script src="<?= base_url('assets/')?>js/select2.js"></script>
        <script src="<?= base_url('assets/')?>js/datepicker.js"></script>
        <script src="<?= base_url('assets/')?>js/smooth-scroll.min.js"></script>
        <script src="<?= base_url('assets/')?>js/custom.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">



<style>
    .footer-menu {
      margin-left: 0;
      padding-left: 0;
      text-align: left !important;
    }
    
    .footer-title {
      font-size: 30px;
      color: #f0b465;
      margin-bottom: 20px;
      text-align: left !important;
    }
    .footer-top .footer-column {
      margin-bottom: 30px;
      text-align: left !important;
    }
        #myForm {
            display: none;
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -106%);
            background-color: #f9f9f9;
            padding:0px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width:350px;
          
        }
        .myform_heading{
            background-color:#195425;
            padding:0px!important;
        }
    .myform_details{
        padding:20px;
       
    }
    .myform_heading h5{
        font-family:'Poppins', sans-serif;
        color:white;
        padding:20px;
        font-size:24px;
        padding-bottom:0px!important;
    }
    .myform_heading p{
        font-family:'Poppins', sans-serif;
        color:white;
        margin:-15px 20px;
        padding-bottom:10px;
        font-weight:300!important;
       font-size:14px;
        
    }
    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        color: #fff;
    }
    
     
    input[type="tel"],
    input[type="date"],
    input[type="text"],
    textarea
   {
        width: 100%;
        padding: 10px;
        margin-bottom:0px!important;
        margin-top:0px;
        border: 1px solid #ccc;
        border-radius: 5px;
       
    }
    /*input[type="text"]{*/
    /*     width: 100%;*/
    /*    padding: 10px;*/
    /*    margin-bottom:0px;*/
    /*    border: 1px solid #ccc;*/
    /*    border-radius: 5px;*/
    /*}*/
     input[type="submit"] {
        background-color:#195425;
        color: white;
        border: none;
        cursor: pointer;
    }
  
    </style>
    <footer class="footer">
        <div class="footer-top">
              <div class="container">
                <div class="row clints">
                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <a target="_blank"
                            href="https://www.tripadvisor.in/Hotel_Review-g5978850-d19820784-Reviews-Kuruva_Island_Resort_And_Spa-Kattikkulam_Wayanad_District_Kerala.html">
                            <img src="<?= base_url('assets/')?>img/clients/clients-1.webp" alt="Kuruva Island Resort and Spa" width="100%" />
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <a target="_blank"
                            href="https://www.makemytrip.com/hotels/hotel-details/?hotelId=201910301716286717&_uCurrency=INR&city=CTXWA&cmp=SEM%7CD%7CDH%7CG%7CHname%7CDH_HName_CTXWA_10-15K_DT%7C201910301716286717%7CR%7C&country=IN&ef_id=Cj0KCQiAnfmsBhDfARIsAM7MKi1XhvYYH93pAB_APhS53tt1MFoIz1JvxMBy4-S6_1bW9dQD-GIxdmEaAs7aEALw_wcB%3AG%3As&gad_source=1&lat=11.83013&lng=76.08655&locusId=CTXWA&locusType=city&rank=1&reference=hotel&roomStayQualifier=2e0e&searchText=Wayanad&topHtlId=201910301716286717&type=city&viewType=PREMIUM&mtkeys=defaultMtkey">
                            <img src="<?= base_url('assets/')?>img/clients/clients-2.png" alt="Kuruva Island Resort and Spa" width="100%" />
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <a target="_blank" href="https://www.booking.com/hotel/in/kuruva-island-resort-and-spa.en-gb.html?#availability">
                            <img src="<?= base_url('assets/')?>img/clients/clients-3.webp" alt="Kuruva Island Resort and Spa" width="100%" />
                        </a>
                    </div>
                     
                    
                  <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <a target="_blank"
                            href="https://www.goibibo.com/hotels/kuruva-island-resort-spa-hotel-in-wayanad-2376222728091724121/">
                            <img src="<?= base_url('assets/')?>img/clients/clients-6.png" alt="Kuruva Island Resort and Spa" width="100%" style="filter: brightness(0) invert(1);" class="mt-2" />
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <a target="_blank"
                            href="https://www.easemytrip.com/hotels/kuruva-island-resort-and-spa-by-kabini-breez-resort-and-spa-2068360/">
                            <img src="<?= base_url('assets/')?>img/clients/clients-5.png" alt="Kuruva Island Resort and Spa" width="100%" />
                        </a>
                    </div>
                    <!--<div class="col-lg-2 col-md-2 col-sm-4 col-4">-->
                    <!--    <a target="_blank"-->
                    <!--        href="https://www.agoda.com/kuruva-island-resort-and-spa/hotel/wayanad-in.html?ds=vCJnuzqfxOdHyPr6">-->
                    <!--        <img src="<?= base_url('assets/')?>img/clients/clients-4.webp" alt="Kuruva Island Resort and Spa" width="100%" />-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>  
                <hr class="mt-3" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Quick Links</h3>
                            <ul class="footer-menu">
                            <li> <a href="https://kuruvaislandresort.com/packages-couples-wayanad"> Packages </a> </li>
                                <li> <a href="https://kuruvaislandresort.com/kuruva-facilities"> Facilities</a> </li>                           
                                <li> <a href="https://kuruvaislandresort.com/place-to-visit">Places to Visit</a> </li>                            
                                <li> <a href="https://kuruvaislandresort.com/wayanad"> Wayanad</a> </li>                            
                                <li> <a href="https://kuruvaislandresort.com/ayurveda-spa-resort-wayanad"> Spa</a> </li>
                                                            <li> <a href="https://kuruvaislandresort.com/dining"> Dining</a> </li>
    
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Other Links</h3>
                            <ul class="footer-menu">
                                <li> <a href="https://kuruvaislandresort.com/photogallery"> Photo Gallery</a> </li>
                                <li> <a href="https://kuruvaislandresort.com/videogallery"> Video Gallery</a> </li>
                                <li> <a href="https://kuruvaislandresort.com/blog/"> Blog</a> </li>
                                <li> <a href="https://kuruvaislandresort.com/events-wayanad">Events</a> </li>
                                <li> <a href="https://kuruvaislandresort.com/careers">Careers</a> </li>
                                <li> <a href="https://kuruvaislandresort.com/privacy-policy">Privacy Policy </a> </li>
                                <!--<li> <a href="contact.php">Contact Us </a> </li>   -->
                                 <li> <a href="https://kuruvaislandresort.com/faq">Faq </a> </li>                           
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Rooms</h3>
                            <ul class="footer-menu">
                                <li> <a href="honeymoon-resorts-wayanad-with-private-pool.php"> Honeymoon Cottage with Private Pool</a></li>
                                <li> <a href="family-resorts-wayanad.php"> Premium Family Room With Balcony</a> </li>
                                <li> <a href="honeymoon-resorts-wayanad.php"> Honeymoon Cottage With Plunge Pool</a> </li>                            
                                <li> <a href="resorts-wayanad-with-jacuzzi.php"> Honeymoon Cottage With Jacuzzi</a> </li>
                                <li> <a href="private-pool-villa-wayanad.php"> Private Pool Room</a> </li>
                                <li> <a href="twin-bedroom-suite-resort-wayanad.php"> Twin-bedroom Suite With Tub</a> </li>
                                <li> <a href="suite-room-with-tub-wayanad.php"> Suite Room With Tub</a> </li>
                                <li> <a href="studio-room-with-tub-wayanad.php"> Studio Room With Tub</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact Info</h3>
                            <p class="footer-contact-text">Kuruva Island Resort & Spa </p>
                            <p> Palvelicham, Bavali Post, Mananthavady , Wayanad, Kerala</p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone">Reservation :<a href="tel:+91 9562205599"> +91 9562205599 </a></p>
                               
                                <p class="footer-contact-phone">Reception : <a href="tel:+91 85938 00400"> +91 85938 00400
                                    </a> </p>
                                <p class="footer-contact-mail"> <a href="mailto:info@kuruvaislandresort.com">
                                        info@kuruvaislandresort.com </a></p>
                            </div>
                            <div class="footer-about-social-list">
                                <a target="_blank" href="https://www.facebook.com/kuruvaislandresort"><i class="ti-facebook"></i></a>
                                <a target="_blank" href="https://www.instagram.com/kuruvaislandresort/"><i class="ti-instagram"></i></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCeseGY7Vx6LCpFXew_lxhqg"><i class="ti-youtube"></i></a>
                                <a target="_blank" href="https://twitter.com/kuruvaresort"><i class="fa-brands fa-x-twitter"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/company/kuruvaislandresortwayanad"><i class="ti-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right" style="text-align:center;">© Copyright 2023 Kuruva Island Resort & Spa All Rights
                                Reserved. Powered by <a target="_blank" href="https://elmenop.com/">Elmenop Digital</a></p>
                        </div>
                    </div>
                    <!--<div class="col-md-5 text-right">-->
                    <!--    <div class="footer-bottom-inner text-right">-->
                    <!--        <p class="footer-bottom-copy-right "> Powered by <a target="_blank" href="https://elmenop.com/">Elmenop Digital</a></p>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </footer>
    
    <nav class="mobile-bottom-nav dis-none-mob">
        <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
    
    
            <a href="https://wa.me/+919562205599">
                <i> <img style="width: 28px;" src="/img/icon/whatsapp.svg" alt="Activities wayanad"> </i> <br> <span>Whatsapp</span></a>
        </div>
        <div class="mobile-bottom-nav__item">
    
    
    
            <!--<a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/" target="_blank"><i><img style="width: 28px;" src="/img/icon/booknow.svg" alt="booking"></i> <br> <span>Book Now</span></a>-->
            <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/" target="_blank"><i><img style="width: 28px;" src="/img/icon/booknow.svg" alt="booking"></i> <br> <span>Book Now</span></a> 
             <!--<a href="tel:+91 9562205599" class="button-1 mt-30">Call Now<span></span></a>-->
        </div>
        <div class="mobile-bottom-nav__item">
            <a href="tel:+91 9562205599"><i><img style="width: 28px;" src="/img/icon/call.svg" alt="call"></i>  <br> <span>Call</span></a>
        </div>
       <div class="mobile-bottom-nav__item">
            <a href="https://kuruvaislandresort.com/contact"><i><img style="width: 28px;filter: brightness(0) invert(1);" src="/img/icon/booking.svg" alt="reserve"></i> <br> <span>Reserve</span></a>
        </div>
    <!--    <form id="myForm">-->
    <!--        <i class="fas fa-times close" onclick="closeForm()"></i>-->
    <!--        <div class="myform_heading">-->
    <!--            <h5>Quick Enquiry</h5>-->
    <!--            <p>Get in touch with us</p>-->
    <!--        </div>-->
    <!--        <div class="myform_details mb-0" >-->
               
    <!--    <label for="name">Name:</label>-->
    <!--    <input type="text" id="name" name="name" required class="mb-2"><br><br>-->
        
        
    <!--    <label for="phone">Phone Number:</label>-->
    <!--    <input type="tel" id="phone" name="phone" required><br><br>-->
      
        
    <!--    <label for="date">Date you are Planning for:</label>-->
    <!--    <input type="date" id="date" name="date" required><br><br>-->
       
         
    <!--    <label for="message">Message:</label>-->
    <!--    <textarea id="message" name="message" rows="3" required></textarea><br><br>-->
        
        
    <!--    <input type="submit" value="Submit">-->
    <!--    </div>-->
    <!--</form>-->
    </nav>
    
    <script>
    
    
        // Add a click event listener to the document
        $(document).click(function(event) {
            // Check if the clicked element is outside of any collapse element
            if (!$(event.target).closest('.collapse').length) {
                // If it is, close all collapse elements
                $('.collapse').collapse('hide');
            }
        });
    </script>
    
    <script>
        // Function to remove ".php" from href attributes
        function removePhpExtension() {
          var links = document.querySelectorAll('a');
          for (var i = 0; i < links.length; i++) {
            var href = links[i].getAttribute('href');
            if (href && href.endsWith('.php')) {
              links[i].setAttribute('href', "/"+href.slice(0, -4)); // Remove last 4 characters (".php")
            }
          }
        }
    
        // Call the function after the page has loaded
        window.addEventListener('load', removePhpExtension);
      </script>
    
    <script>
        // // JavaScript to handle button click event and show form
        // document.getElementById('showFormBtn').addEventListener('click', function() {
        //     document.getElementById('myForm').style.display = 'block';
        // });
        //  function closeForm() {
        //     document.getElementById('myForm').style.display = 'none';
        // }
    </script>
    </body>
</html>
