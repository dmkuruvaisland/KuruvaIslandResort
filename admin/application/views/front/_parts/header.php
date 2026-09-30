<!doctype html>
<html lang="en"> 

<head>
<link rel="canonical" href="https://www.kuruvaislandresort.com/" />

    <?php
    if($page_name == "room")
    {
    ?>
    <title><?=strip_tags($rooms_details[0]['meta_title']?? '');?></title>
    <meta name="description" content="<?=strip_tags($rooms_details[0]['meta_description']?? '');?>" />
    <meta name="keywords" content="<?=strip_tags($rooms_details[0]['meta_keyword']?? '');?>" />
    <meta name="copyright" content="<?=strip_tags($rooms_details[0]['meta_copyright']?? '');?>" />
    <?php
    }
    else if($page_name == "package")
    {
    ?>
    <title><?=strip_tags($package_details[0]['meta_title']?? '');?></title>
    <meta name="description" content="<?=strip_tags($package_details[0]['meta_description']?? '');?>" />
    <meta name="keywords" content="<?=strip_tags($package_details[0]['meta_keyword']?? '');?>" />
    <meta name="copyright" content="<?=strip_tags($package_details[0]['meta_copyright']?? '');?>" />
    <?php
    }
    else if($page_name == "blog_details")
    {
        // echo json_encode($blog_details)."--";
    ?>
    <title><?=strip_tags($blog_details[0]['perma']?? '');?></title>
    <meta name="description" content="<?=strip_tags($blog_details[0]['description']?? '');?>" />
    <meta name="keywords" content="<?=strip_tags($blog_details[0]['meta_keyword']?? '');?>" />
    <meta name="copyright" content="<?=strip_tags($blog_details[0]['meta_copyright']?? '');?>" />
    <?php
    }
    else
    {
    ?>
    <title><?=strip_tags($dyn_meta[0]['title']?? '');?></title>
    <meta name="description" content="<?=strip_tags($dyn_meta[0]['description']?? '');?>" />
    <meta name="keywords" content="<?=strip_tags($dyn_meta[0]['keywords']?? '');?>" />
    <meta name="copyright" content="<?=strip_tags($dyn_meta[0]['copyright']?? '');?>" />
    <?php
    }
    ?>
      
    <meta name="robots" content="<?=$metadata[0]['robots']?? ''?>" />
    <meta property="og:locale" content="<?=$metadata[0]['og_locale']?? ''?>" />
    <meta property="og:type" content="<?=$metadata[0]['og_type']?? ''?>" />
    <meta property="og:title" content="<?=$metadata[0]['og_title']?? ''?>" />
    <meta property="og:description" content="<?=$metadata[0]['og_description']?? ''?>" />
    <meta property="og:url" content="<?=$metadata[0]['og_url']?? ''?>" />
    <meta property="og:site_name" content="<?=$metadata[0]['og_site_name']?? ''?>" />
    <meta property="og:image" content="<?=$metadata[0]['og_image']?? ''?>" />
    <meta property="article:publisher" content="<?=$metadata[0]['article_publisher']?? ''?>" />
    <meta property="article:author" content="<?=$metadata[0]['article_author']?? ''?>" />
    <meta property="article:modified_time" content="<?=$metadata[0]['article_modified_time']?? ''?>" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Kuruva Island Resort & Spa",
  "url": "https://www.kuruvaislandresort.com/",
  "logo": "https://www.kuruvaislandresort.com/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 9562205599",
    "contactType": "reservations",
    "areaServed": "IN",
    "availableLanguage": ["en","Malayalam","Kannada","Tamil","Hindi"]
  },
  "sameAs": [
    "https://www.facebook.com/kuruvaislandresort",
    "https://twitter.com/KuruvaResorts",
    "https://www.instagram.com/kuruvaislandresort/",
    "https://www.youtube.com/channel/UCeseGY7Vx6LCpFXew_lxhqg",
    "https://www.linkedin.com/company/kuruvaislandresortwayanad"
  ]
}
</script>
  

  <link rel="icon" type="image/x-icon" href="<?=base_url();?>images/favicon.png">
  


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJD9MMQ');</script>
<!-- End Google Tag Manager -->


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJD9MMQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

  <!-- boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php rootURL('assets/'); ?>plugins/toastr/toastr.min.css">

  <!-- animation css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!--animation-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- css -->
  <link rel="stylesheet" href="<?=base_url();?>css/style.css?id=<?=rand()?>">
  <link rel="stylesheet" href="<?=base_url();?>css/package-single.css?id=<?=rand()?>">

    <style>
         .open-button{
            background-color: #40BF50;
            color: #fff;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            opacity: 1;
            border-radius: 50%;
            font-size: 30px;
            position: fixed;
            bottom:20px;
            right: 28px;
            z-index:9999;
          }
          @media (max-width:991px){
              .open-button{
                  bottom:70px;
                  right: 18px;
              }
              
              .mobile-btn{
                background-color: var(--primary-color);
                padding: 10px 15px;
                color: #fff !important;
                font-size: 14px;
              }
              
              
          }
          
          
          .open-button2{
            background-color: #EE0FA3;
            color: #fff;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            opacity: 1;
            border-radius: 50%;
            font-size: 30px;
            position: fixed;
            bottom:20px;
            right: 90px;
            z-index:9999;
          }
          @media (max-width:991px){
              .open-button2{
                  bottom:70px;
                  right: 70px;
              }
              
              .mobile-btn{
                background-color: var(--primary-color);
                padding: 10px 15px;
                color: #fff !important;
                font-size: 14px;
              }
              
              
          }
          
          
          
         
         @media (min-width:360px) and (max-width:767px){
            .border-btn{
                padding:10px 20px !important;
            }
            .buttons{
              margin-left:10px !important;  
            }
        
        }
        
/*        .main-btn{*/
/*    background-color: var(--primary-color);*/
/*    padding: 8px 20px !important;*/
/*    color: #fff !important;*/
/*    font-size: 18px;*/
/*}*/

/*.border-btn {*/
/*    border: 2px solid #fff;*/
/*    padding: 10px 20px !important;*/
/*    color: #fff !important;*/
/*    font-size: 18px;*/
/*}*/
    </style>
    
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SGM54LSSYG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SGM54LSSYG');

  gtag('config', 'AW-342190714/xtw0CJnkteQcEPrulAMB', {
    'phone_conversion_number': '+91 9562205599'
  });
</script>


</head>

<body>
    
    
  <!-- main header -->
  <header class="header-wrapper">
    <div class="top-head">
      <div class="container">
        <div class="contact">
          <div class="email d-flex">

            <a href="mailto:info@kuruvaislandresort.com"><i class='fas fa-envelope'></i>
              <span>info@kuruvaislandresort.com | </span></a>

            <a href="tel:+919562205599"><i class='fas fa-phone-alt'></i>
              <span>+91 9562205599</span></a>

          </div>

          <div class="social-links justify-content-end">
            <a href="https://www.facebook.com/kuruvaislandresort"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/kuruvaislandresort/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCeseGY7Vx6LCpFXew_lxhqg"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/company/kuruvaislandresortwayanad"><i class="fab fa-linkedin"></i></a>
            <a href="https://twitter.com/KuruvaResorts"><i class="fab fa-twitter"></i></a>
          </div>
        </div>

      </div>
    </div>
    <nav class="navbar navbar-expand-lg  bg-white">
      <div class="container">
        <a class="navbar-brand" href="<?=base_url();?>">
          <img src="<?=base_url();?>images/logo.png" alt="" class="logo img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?=base_url();?>">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Rooms
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php
                  foreach($rooms as $r)
                  {
                ?>
                    <li><a class="dropdown-item" style="width:100%;" href="<?=base_url();?>rooms/<?=$r['perma'];?>"><?=$r['title'];?></a></li>
                    <?php
                  }
                  ?>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Packages
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <?php
                  foreach($packages as $p)
                  {
                      if($p['status'] == "1")
                      {
                ?>
                    <li><a class="dropdown-item" style="width:100%;" href="<?=base_url();?>packages/<?=$p['perma'];?>"><?=$p['title'];?></a></li>
                    <?php
                      }
                  }
                  ?>
                  <li><a class="dropdown-item" href="<?=base_url();?>treatment">7 Day Ayurvedic Holistic <br> Treatment Package</a></li>
             </ul>
            </li>
            
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Gallery
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                  <li><a class="dropdown-item" href="<?=base_url();?>photogallery">Photo Gallery</a></li>
                  <li><a class="dropdown-item" href="<?=base_url();?>videogallery">Video Gallery</a></li>
                  <li><a class="dropdown-item" href="<?=base_url();?>blog">Blog</a></li>
             </ul>
            </li>
            
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Activities
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                  <li><a class="dropdown-item" href="<?=base_url();?>placetovisit">Place to Visit</a></li>
                  <li><a class="dropdown-item" href="<?=base_url();?>spa">Spa</a></li>
                   <li><a class="dropdown-item" href="<?=base_url();?>nearbydestination">Near By Destinations</a></li>
                    <li><a class="dropdown-item" href="<?=base_url();?>facilities">Facilities</a></li>
             </ul>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="<?=base_url();?>contact">contact us</a>
            </li>
            <li class="nav-item mt-2 mb-4">
              <!--<a class="main-btn"-->
              <!--  href="https://www.asiatech.in/booking_engine/index3.php?token=NDkzNA==">Book Now</a>-->
              <a class="main-btn"
                href="<?=get_settings('booking_url')?>">Book Now</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>




  <nav class="mobile-bottom-nav">
    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i style="margin-top: 5px;font-size: 20px;margin-bottom: 0px !important;" class="fas fa-stream navbar-toggler-icon">
          </i>
          
        </button> -->
      <!-- <br><span style="font-size: 10px;margin-top: 0px !important;">Menu</span> -->
      <a href="#" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <i style="font-size: 20px;margin-top: 5px !important;margin-bottom: -10px !important;"
          class="fas fa-bars navbar-toggler-icon"></i> <br> <span>Menu</span></a>
    </div>
    <div class="mobile-bottom-nav__item">

      <!--<a-->
      <!--  href="https://www.asiatech.in/booking_engine/index3.php?token=NDkzNA=="><i-->
      <!--    style="font-size: 20px;" class="fas fa-calendar-days"></i> <br> <span>Book Now</span></a>-->
          
      <a
        href="<?=get_settings('booking_url')?>"><i
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