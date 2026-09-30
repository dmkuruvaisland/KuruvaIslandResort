<!DOCTYPE html>
<html lang="en">

    <head>
      <title><?=$page_title ?? 'Pinas Express Cargo Marine Services'?></title>
      <link rel="shortcut icon" href="images/favicon.webp">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <meta name="description" content="<?= $page_description ?>">
      
      <meta property="og:url" content=<?= $canonical_url ?>>
      <meta property="canonical:url" content=<?= $canonical_url ?>>
      
      <meta property="og:title" content="<?=$page_title ?? 'Pinas Express Cargo Marine Services'?>" />
      <meta property="og:description" content="<?= $page_description ?>" />
      <meta property="og:image" content ="<?= $og_image ?>" />
      <meta property="og:type" content="<?= $og_type ?>" />
    
      <!-- 
        - favicon
      -->
      <link rel="shortcut icon" href="<?=base_url('assets/')?>/favicon.png" type="image/svg+xml">
    
      <!-- 
        - google font link
      -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    
      <!-- 
        - custom css link
      -->
      <link rel="stylesheet" href="<?=base_url('assets/website/css/style.css');?>">
      <link rel="stylesheet" href="<?=base_url('assets/website/css/responsive.css');?>">
      <link rel="stylesheet" href="<?=base_url('assets/website/css/swiper-bundle.min.css');?>">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
      <!-- 
        - preload images
      -->
      <link rel="preload" as="image" href="<?=base_url('assets/website/images/hero-bg.jpg')?>">
      <link rel="preload" as="image" href="<?=base_url('assets/website/images/hero-slide-1.jpg')?>">
      <link rel="preload" as="image" href="<?=base_url('assets/website/images/hero-slide-2.jpg')?>">
      <link rel="preload" as="image" href="<?=base_url('assets/website/images/hero-slide-3.jpg')?>">
    
    
      <style>
        .booking-btn {
          background: #0038a7;
          border-color: #0038a7;
          color: #fff;
        }
      </style>
    
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PP89TGC8');</script>
      <!-- End Google Tag Manager -->
      
      <!-- Google tag (gtag.js) --> 
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-5KSTZE3Y6P"></script> 
      <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-5KSTZE3Y6P'); </script>
    
      <!-- Google tag (gtag.js) --> 
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-4YLNQN0KSM"></script> 
      <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-4YLNQN0KSM'); </script>
    
    </head>
    
    <body>
    
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PP89TGC8"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
          <!-- 
            - #HEADER
      -->
    
    <header class="header " data-header>
    <div class="container">

      <a href="<?=base_url('')?>" class="logo">
        <img src="<?=base_url('assets/website')?>/images/white-logo-2.png" width="150" height="30" alt="import and export agency in qatar" class="logo-light">

        <img src="<?=base_url('assets/website')?>/images/logo.png" width="120" height="30" alt="international moving companies in qatar" class="logo-dark">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="<?=base_url('')?>" class="logo">
            <img src="<?=base_url('assets/website')?>/images/white-logo.png" width="100" height="30" alt="House shifting services in Qatar">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="<?=base_url('')?>" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="<?=base_url('about')?>" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="<?=base_url('services')?>" class="navbar-link">Our Services</a>
          </li>

          <li>
            <a href="<?=base_url('import-exports')?>" class="navbar-link">Import | Export</a>
          </li>
          <li>
            <a href="<?=base_url('blog')?>" class="navbar-link">Blog</a>
          </li>
          <li>
            <a href="<?=base_url('contact')?>" class="navbar-link">Contact Us</a>
          </li>

        </ul>

        <div class="wrapper">
            <a href="<?=base_url('booking-appointment/')?>" class="btn btn-primary booking-btn responsive-btn">Booking</a>
      <a href="<?=base_url('tracking')?>" class="btn btn-outline responsive-btn">Tracking</a>
          <a href="mailto:info@pinasexpressmarine.com" class="contact-link">info@pinasexpressmarine.com</a>
            <li><a href="tel:+97444176514">(+974) 4417 6514</a></li>  
          <li><a href="tel:+97451167254"> (+974) 51167254</a></li>
          <li><a href="tel:+97451168290"> (+974) 51168290</a></li>
        </div>

        <ul class="social-list">

          <!--<li>-->
          <!--  <a href="https://twitter.com/" target="_blank" class="social-link">-->
          <!--    <ion-icon name="logo-twitter"></ion-icon>-->
          <!--  </a>-->
          <!--</li>-->

          <li>
            <a href="https://www.facebook.com/pinasexpresscargoqatar/" target="_blank" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>



          <li>
            <a href="https://instagram.com/pinascargoqatar?igshid=MzRlODBiNWFlZA==" target="_blank" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <!--<li>-->
          <!--  <a href="https://www.youtube.com/" target="_blank" class="social-link">-->
          <!--    <ion-icon name="logo-youtube"></ion-icon>-->
          <!--  </a>-->
          <!--</li>-->

        </ul>

      </nav>

      <a href="<?=base_url('booking-appointment/')?>" class="btn btn-primary booking-btn">Booking</a>
      <a href="<?=base_url('tracking')?>" class="btn btn-outline">Tracking</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>
    
    
    
      <main>
        <article>
    
          <!-- 
            - #HERO
          -->
    
          <section class="section hero has-bg-image">
    
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide one">
                  <div class="container">
                    <div class="slider_content">
                      <h1 class="h1 hero-title">Qatar's best freight forwarding <br> and shipping services
                      </h1>
    
                      <p class="hero-text">
                        Serving world as the best shipping company in qatar since 2014
                      </p>
    
                      <div class="btn-wrapper">
    
                        <a href="<?=base_url('services')?>" class="btn btn-primary">Explore Now</a>
    
                        <a href="<?=base_url('contact')?>" class="btn btn-outline">Contact Us</a>
    
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide two">
                  <div class="container">
                    <div class="slider_content">
                      <h1 class="h1 hero-title">Worldwide air freight services <br> provided by a single source
                      </h1>
    
                      <p class="hero-text">
                        Curated Solutions for your Cargo's journey through global skies.
                      </p>
    
                      <div class="btn-wrapper">
    
                        <a href="<?=base_url('services')?>" class="btn btn-primary">Explore Now</a>
    
                        <a href="<?=base_url('contact')?>" class="btn btn-outline">Contact Us</a>
    
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide three">
                  <div class="container">
                    <div class="slider_content">
                      <h1 class="h1 hero-title">When it comes to cargo on wheels,<br> it's all about efficiency 
                      </h1>
    
                      <p class="hero-text">
                        Commitment to navigate on road cargo.
                      </p>
    
                      <div class="btn-wrapper">
    
                        <a href="<?=base_url('services')?>" class="btn btn-primary">Explore Now</a>
    
                        <a href="<?=base_url('contact')?>" class="btn btn-outline">Contact Us</a>
    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
    
            <div class="container">
              <div class="banner_bottom_content">
                <div class="item">
                  <div class="icon">
                    <!--<i class="ri-bank-card-line"></i>-->
                    <i class="ri-money-dollar-circle-line"></i>
                    <!--<i class="fa-solid fa-hand-holding-dollar"></i>-->
                    <!--<i class="fas fa-hand-holding-usd"></i>-->
                  </div>
                  <div class="content">
                    <h6>Transparent <br> Rates</h6>
                  </div>
                </div>
                <div class="item">
                  <div class="icon">
                    <i class="ri-truck-line"></i>
                  </div>
                  <div class="content">
                    <h6>Quick <br> Delivery</h6>
                  </div>
                </div>
                <div class="item">
                  <div class="icon">
                    <i class="ri-home-5-line"></i>
                  </div>
                  <div class="content">
                    <h6>Warehouse <br> Solutions</h6>
                  </div>
                </div>
                <div class="item">
                  <div class="icon">
                    <i class="ri-time-line"></i>
                  </div>
                  <div class="content">
                    <h6>Cargo <br> Tracking</h6>
                  </div>
                </div>
              </div>
            </div>
            
          </section>
    
    
    
          <!-- 
            - #SERVICE
          -->
    
          <section class="section service" aria-labelledby="service-label" style="margin-top: 100px;background:#f7f7f7;">
            <div class="container">
    
              <p class="section-subtitle" id="service-label">What We Do?</p>
    
              <h2 class="h2 section-title">
                Our Line of Work?
              </h2>
    
              <ul class="grid-list">
    
                <li>
                  <div class="service-card">
    
                    <div class="card-icon">
                      <img src="<?=base_url('assets/website')?>/images/services/fast-forward.png" alt="International relocation services">
                    </div>
    
                    <h3 class="h4 card-title">Freight Forwarding</h3>
    
                    <p class="card-text">
                      Due to our excellent and highly committed team, Pinas Express Services is highly recommended by repeat customers.
                    </p>
    
                  </div>
                </li>
    
                <li>
                  <div class="service-card">
    
                    <div class="card-icon">
                      <img src="<?=base_url('assets/website')?>/images/services/cargo-ship.png" alt="warehouse in qatar">
                    </div>
    
                    <h3 class="h4 card-title">Shipping</h3>
    
                    <p class="card-text">
                      To ensure consistent and reliable shipping services, Pinas Express works with quality shipping lines and international freight forwarders.
                    </p>
    
                  </div>
                </li>
    
                <li>
                  <div class="service-card">
    
                    <div class="card-icon">
                      <img src="<?=base_url('assets/website')?>/images/services/shipped.png" alt="Best Air and Sea cargo services in Qatar">
                    </div>
    
                    <h3 class="h4 card-title">Transportation</h3>
    
                    <p class="card-text">
                      Our company offers domestic and international cargo distribution services. Delivering goods on time results in customer satisfaction as we provide safe and reliable road transport
                    </p>
    
                  </div>
                </li>
    
                <li>
                  <div class="service-card">
    
                    <div class="card-icon">
                      <img src="<?=base_url('assets/website')?>/images/services/weight.png" alt="International relocation services">
                    </div>
    
                    <h3 class="h4 card-title">Packing & Moving</h3>
    
                    <p class="card-text">
                      In addition to providing high-quality Packing & Moving services, our team has a very strong and committed work ethic.
                    </p>
    
                  </div>
                </li>
    
              </ul>
    
            </div>
          </section>
    
    
            <section class="our_services">
                <div class="container">
                    <p class="section-subtitle" id="service-label">Services</p>
    
              <h2 class="h2 section-title">
                Our Services
              </h2>
        
                    <div class="swiper serviceSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="event_image">
                                    <img src="<?=base_url('assets/website')?>/images/services/service-1.jpeg" class="img-fluid" alt="Cheapest & Fastest Courier Delivery - Doha">
                                </div>
                                <div class="event_details">
                                    <h6 class="event_name">Quick, Safe, Affordable and Transparent Courier Service</h6>
                                    <p class="event_desc">Looking for premier air and sea cargo solutions in Qatar? You have come to the right place</p>
        
                                    <a href="<?=base_url('cheapest-fastest-courier-delivery-doha')?>" class="btn btn-primary">Know More <i class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
        
                            <div class="swiper-slide">
                                <div class="event_image">
                                    <img src="<?=base_url('assets/website')?>/images/services/seamless-door-to-door-solution.jpg" class="img-fluid" alt="best shipping company in qatar">
                                </div>
                                <div class="event_details">
                                    <h6 class="event_name">Seamless Door-to-Door Solutions</h6>
                                    <p class="event_desc">With our unparalleled door-to-door cargo in Qatar, your relocation experience transforms into a journey of convenience and assurance.</p>
                                    <a href="<?=base_url('door-to-door-cargo-service')?>" class="btn btn-primary">Know More <i
                                            class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
        
        
        
                            <div class="swiper-slide">
                                <div class="event_image">
                                    <img src="<?=base_url('assets/website')?>/images/services/increasing-the-market-value-of-e-commerce-brand-throgh-our-service.jpg" class="img-fluid" alt="Best door to door world wide services in Qatar">
                                </div>
                                <div class="event_details">
                                    <h6 class="event_name">Increasing the Market Value of E-commerce Brands Through Our Services</h6>
                                    <p class="event_desc">Pinas Express Cargo has built a solid foothold in Qatar as a vital service provider for various e-commerce firms.</p>
                                    <a href="<?=base_url('increasing-the-market-value-of-ecommerce-brands-through-our-services')?>" class="btn btn-primary">Know More <i
                                            class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
        
                            <div class="swiper-slide">
                                <div class="event_image">
                                    <img src="<?=base_url('assets/website')?>/images/services/import-export.jpg" class="img-fluid" alt="door to door cargo qata">
                                </div>
                                <div class="event_details">
                                    <h6 class="event_name">Import | Export</h6>
                                    <p class="event_desc">The difficulties of international trade can be easily navigated with our best import and export in Qatar.</p>
        
                                    <a href="<?=base_url('import-export')?>" class="btn btn-primary">Know More <i class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
        
                            <div class="swiper-slide">
                                <div class="event_image">
                                    <img src="<?=base_url('assets/website')?>/images/services/relocation-without-the-stress.jpg" class="img-fluid" alt="import and export in qatar">
                                </div>
                                <div class="event_details">
                                    <h6 class="event_name">Relocation Without the Stress</h6>
                                    <p class="event_desc">Pinas Express provides smooth moving services. Our skilled staff assures a flawless procedure from start to finish, whether local or international.</p>
                                    <a href="<?=base_url('relocation-with-pinas-make-your-shift-seamless-and-stress-free')?>" class="btn btn-primary">Know More <i
                                            class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="event_image">
                                    <img src="<?=base_url('assets/website')?>/images/services/sea-cargo-service.jpeg" class="img-fluid" alt="door to door cargo services in qatar">
                                </div>
                                <div class="event_details">
                                    <h6 class="event_name">Sea Cargo Service in Qatar</h6>
                                    <p class="event_desc">For delivering products across oceans, we offer simple and dependable Sea Cargo Services.</p>
                                    <a href="<?=base_url('sea-cargo-service--in-qatar')?>" class="btn btn-primary">Know More <i
                                            class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                            
                            
                            <div class="swiper-slide">
                                <div class="event_image">
                                    <img src="<?=base_url('assets/website')?>/images/services/air-cargo-service.jpeg" class="img-fluid" alt="Best import and export agency in qatar">
                                </div>
                                <div class="event_details">
                                    <h6 class="event_name">Air Cargo Service in Qatar</h6>
                                    <p class="event_desc">Our Air Cargo Services are punctual at all times. Due to the importance of air shipments, we offer quick and effective solutions.</p>
                                    <a href="<?=base_url('air-cargo-service--in-qatar')?>" class="btn btn-primary">Know More <i
                                            class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
        
        
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
        
                </div>
            </section>
    
    
    
    
    
          <!-- 
            - #FEATURE
          -->
    
          <section class="section feature" aria-labelledby="feature-label" style="padding: 100px 0 !important;background:#f7f7f7;">
            <div class="container">
    
              <figure class="feature-banner">
                <img src="<?=base_url('assets/website')?>/images/about-image-pinas.jpg"
                  style="width: 100%;height: 400px;object-fit: cover;" loading="lazy" alt="import and export agency in qatar" class="w-100">
              </figure>
    
              <div class="feature-content">
    
                <p class="section-subtitle" id="feautre-label">Know more about us</p>
    
                <h1 class="h2 section-title">
                  Pinas Express Cargo Marine Services
                </h1>
    
                <p class="section-text">
                 Pinas Express Cargo caters to the diverse shipping needs of the Filipino community and beyond. In addition to offering efficient and cost-effective freight solutions, Pinas Express Cargo ensures the timely and safe delivery of packages, documents, and goods throughout the Philippines and abroad.
                </p>
    
                <p class="section-text">
                  With years of experience in international shipping regulations, Our dedicated team offers personalized assistance with packaging, documentation, and customs clearance throughout the entire shipping process.
                </p>
    
                <a href="<?=base_url('about')?>" class="btn btn-primary">Know More</a>
    
    
    
              </div>
    
            </div>
          </section>
    
    
          <section class="about" aria-labelledby="about-label" style="padding: 100px 0 !important;">
            <div class="container">
    
              <figure class="about-banner">
                <img src="<?=base_url('assets/website')?>/images/home-about.jpg" width="800" height="580" loading="lazy"
                  alt="best cargo company in qatar" class="w-100">
              </figure>
    
              <div class="about-content">
    
                <p class="section-subtitle" id="about-label">Why Choose Us?</p>
    
                <h2 class="h2 section-title">
                  For our clients, we provide solutions that make life easier.
                </h2>
    
                <ul>
    
                  <li class="about-item">
                    <div class="accordion-card expanded" data-accordion>
    
                      <h3 class="card-title">
                        <button class="accordion-btn" data-accordion-btn>
                          <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>
    
                          <spna class="span h5">On-Time Delivery</spna>
                        </button>
                      </h3>
    
                      <p class="accordion-content">
                        Our promise to time has been proven by our happy clientele. We value every moment of your valuable time.
                      </p>
    
                    </div>
                  </li>
    
                  <li class="about-item">
                    <div class="accordion-card" data-accordion>
    
                      <h3 class="card-title">
                        <button class="accordion-btn" data-accordion-btn>
                          <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>
    
                          <spna class="span h5">Claims free shipping </spna>
                          </spna>
                        </button>
                      </h3>
    
                      <p class="accordion-content">
                        Our claim-free shipping services make shipping to destinations hassle-free
                      </p>
    
                    </div>
                  </li>
    
                  <li class="about-item">
                    <div class="accordion-card" data-accordion>
    
                      <h3 class="card-title">
                        <button class="accordion-btn" data-accordion-btn>
                          <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>
    
                          <spna class="span h5">On-Time Pickup</spna>
                        </button>
                      </h3>
    
                      <p class="accordion-content">
                        To vouch for our on time delivery our on time pickup is mandatory.
                      </p>
    
                    </div>
                  </li>
    
                </ul>
    
              </div>
    
            </div>
          </section>
    
    
          <section class="stats" aria-label="our stats">
            <div class="container">
    
              <ul class="stats-card has-bg-image"
                style="background-image: url('<?=base_url('assets/website')?>/images/stats-bg.jpg')">
    
                <li>
                  <p class="card-text">
                    <span class="h1">110K+</span>
    
                    <spna class="span">Satisfied Customers</spna>
                  </p>
                </li>
    
                <li>
                  <p class="card-text">
                    <span class="h1">6500+</span>
    
                    <spna class="span">Containers Shipped</spna>
                  </p>
                </li>
    
                <li>
                  <p class="card-text">
                    <span class="h1">9</span>
    
                    <spna class="span">Years in Business</spna>
                  </p>
                </li>
    
                <li>
                  <p class="card-text">
                    <span class="h1">20</span>
    
                    <spna class="span">Average cargo per hour</spna>
                  </p>
                </li>
    
              </ul>
    
            </div>
          </section>
    
          <section class="features_wrapper">
            <div class="container">
              <div class="row">
                <div class="text-center">
                  <h3 class="main_heading" style="font-size: 32px;">Why Pinas Express Cargo Marine Service</h3>
    
    
                </div>
              </div>
    
    
              <div class="grid_row">
                <div class="item">
                  <div class="feature_icon">
                    <img src="<?=base_url('assets/website')?>/images/features/img1.jpg" alt="Best Air and Sea cargo services in Qatar">
                  </div>
                  <div class="feature_details">
                    <h3 class="feature_name">Competitive Pricing</h3>
                    <p class="feature_desc">Providing efficient cargo services at budget-friendly rates.</p>
                  </div>
                </div>
    
                <div class="item">
                  <div class="feature_icon">
                    <img src="<?=base_url('assets/website')?>/images/features/Professional-service-image.jpg" alt="International relocation services">
                  </div>
                  <div class="feature_details">
                    <h3 class="feature_name">Professional Service</h3>
                    <p class="feature_desc">Expertise and professionalism in the delivery of cargo solutions.</p>
                  </div>
                </div>
    
                <div class="item">
                  <div class="feature_icon">
                    <img src="<?=base_url('assets/website')?>/images/features/img3.jpg" alt="Cheapest & Fastest Courier Delivery - Doha">
                  </div>
                  <div class="feature_details">
                    <h3 class="feature_name">Safety with care</h3>
                    <p class="feature_desc">Ensure the safety and care of your goods during handling and transport.</p>
                  </div>
                </div>
    
                <div class="item">
                  <div class="feature_icon">
                    <img src="<?=base_url('assets/website')?>/images/features/img4.jpg" alt="best cargo service in qatar">
                  </div>
                  <div class="feature_details">
                    <h3 class="feature_name">Real-Time Tracking</h3>
                    <p class="feature_desc">Stay informed about your cargo's journey at every step with real-time tracking.</p>
                  </div>
                </div>
    
    
              </div>
            </div>
          </section>
        
        
        <div class="our_partners">
          <div class="container">
            <h2 class="main_heading">Our Partners</h2>


            <div class="client_logo">
              <div class="logo">
                <img src="<?=base_url('assets/website')?>/images/partners/qatar-airways.png" alt="best cargo service in qatar">
              </div>
              <div class="logo">
                <img src="<?=base_url('assets/website')?>/images/partners/emirates.png" alt="Best door to door world wide services in Qatar ">
              </div>
              <div class="logo">
                <img src="<?=base_url('assets/website')?>/images/partners/milaha.png" alt="door to door cargo qatar">
              </div>
              <div class="logo">
                <img src="<?=base_url('assets/website')?>/images/partners/philippine-airlines.png" alt="import and export in qatar">
              </div>
              <div class="logo">
                <img src="<?=base_url('assets/website')?>/images/partners/cargo-connections.png" alt="door to door cargo services in qatar">
              </div>
            </div>
          </div>
        </div>
    

          <!-- 
            - #CTA
          -->
    
          <section class="section-bottom d-none" style="display:none">
            <div class="container">
    
              <h2 class="h2 section-title">
                Shipment Pickup Service
              </h2>
        
                <div style="display:flex;gap:10px;">
                    <input type="text" placeholder="Enter Your Email" style="border:1px solid #fff;width:300px;height:45px;color:#fff;padding:3px 15px;" id="name" name="name">
                    <button style="width:fit-content;color:#fff;background:transparent;border:1px solid #fff;padding:7px 20px;height:45px">Submit</button>
                </div>
              <!--<a href="#" class="btn btn-primary" style="background-color: #fff; color: #0038a7;">Pickup Request</a>-->
    
            </div>
          </section>
    
        </article>
      </main>
    
    
  <footer>
    <div class="footer_link_details">
      <div class="container">

        <div class="footer_col">
          <div class="footer_logo">
            <img src="<?=base_url('assets/website')?>/images/logo.png" style="width: 150px;margin-bottom: 30px;" class="img-fluid" alt="">
          </div>
          <p class="footer_desc text-white mt-3" style="font-size: 14px;">
            Serving world as the best shipping company in Qatar since 2014
          </p>
        </div>







        <div class="footer_col">
          <h6 class="footer_title">Quick Links</h6>

          <ul class="footer_links">
            <!--<li class="footer_link">-->
            <!--  <a href="<?=base_url('')?>">Home</a>-->
            <!--</li>-->
            <li class="footer_link">
              <a href="<?=base_url('about')?>">About Us</a>
            </li>
             <li class="footer_link">
                <a href="<?=base_url('blog')?>">Blog</a>
            </li>

            <li class="footer_link">
              <a href="<?=base_url('services')?>">Our Services</a>
            </li>
            
            <!--<li class="footer_link">-->
            <!--  <a href="#">Sitemap</a>-->
            <!--</li>-->
            
            <li class="footer_link">
                <a href="<?=base_url('blog')?>">Blog</a>
            </li>
            
            <li class="footer_link">
              <a href="<?=base_url('import-exports')?>">Import/Export</a>
            </li>
            
            <li class="footer_link">
              <a href="<?=base_url('contact')?>">Contact</a>
            </li>
            
          </ul>
        </div>

        <div class="footer_col">
          <h6 class="footer_title">Location</h6>

          <ul>
            <li><a href="#"><i class="fa-solid fa-location-dot"></i> Pinas Express Cargo for Marine Services , Zone 90
                Street 311 Building No 423 Flat, Doha Qatar</a>
            </li>
          </ul>
        </div>





        <div class="footer_col address_col">
          <h6 class="footer_title">Contact Us</h6>

          <ul>
            
            <li><a href="tel:+97444176514"><i class="fa-solid fa-phone"></i> (+974) 4417 6514</a></li>
                <li><a href="tel:+97451167254"><i class="fa-solid fa-phone"></i> (+974) 51167254</a></li>
                <li><a href="tel:+97451168290"><i class="fa-solid fa-phone"></i> (+974) 51168290</a></li>
                <li><a href="mailto:info@pinasexpressmarine.com"><i class="fa-solid fa-envelope"></i>
                    info@pinasexpressmarine.com</a></li>
          </ul>

          <ul class="social_icons">
            <li><a href="https://www.facebook.com/pinasexpresscargoqatar/" target="_blank"><i class="ri-facebook-line"></i></a></li>
            <li><a href="https://instagram.com/pinascargoqatar?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="ri-instagram-line"></i></a></li>
          </ul>

        </div>

      </div>
    </div>


    <!-- <div class="copy_right">
        <p>© Copyright IAME 2023 All Rights Reserved. Powered by <a style="color: #37B369;font-weight: 500;"
                href="https://trogonmedia.com/">Trogon Media Pvt Ltd</a></p>
    </div> -->

  </footer>
  
  
  <div class="sticky_mobile_footer">
      <div class="container">
            <div class="items">
                <div class="item">
                    <a href="//api.whatsapp.com/send?phone=+97451167254&amp;text=Hi ! I would like to get some information. Please help me">
                            <i class="ri-whatsapp-line"></i>
                            <span>WhatsApp</span>
                        </a>
                </div>
                <div class="item">
                    <a href="tel:+97444176514">
                        <i class="ri-phone-line"></i>
                        <span>Call</span>
                    </a>
                </div>
                <div class="item">
                    <a href="https://instagram.com/pinascargoqatar?igshid=MzRlODBiNWFlZA==">
                        <i class="ri-instagram-line"></i>
                        <span>Instagram</span>
                    </a>
                </div>
                <div class="item">
                    <a href="http://m.me/pinasexpresscargoqatar">
                        <i class="ri-messenger-line"></i>
                        <span>Messenger</span>
                    </a>
                </div>
            </div>
      </div>
  </div>
  
  <script>
  // Get all items
  const items = document.querySelectorAll('.item');

  // Add click event listener to each item
  items.forEach(item => {
    item.addEventListener('click', () => {
      // Remove 'active' class from all items
      items.forEach(item => {
        item.classList.remove('active');
      });

      // Add 'active' class to the clicked item
      item.classList.add('active');
    });
  });
</script>
  
  <style>
      .sticky_mobile_footer{
          position:fixed;
          bottom:0;
          left:0;
          background:#0038A7;
          width:100%;
          height:auto;
          padding:5px 0;
          z-index:9999;
      }
      .sticky_mobile_footer .items{
          display:flex;
          align-items:center;
          justify-content:space-between;
      }
      .sticky_mobile_footer .items .item{
          text-align:center;
          
      }
      .sticky_mobile_footer .items .item a{
          display:flex;
          flex-direction:column;
      }
      .sticky_mobile_footer .items .item a span{
          font-size:14px;
          color:#fff;
      }
      .sticky_mobile_footer .items .item a i{
          font-size:25px;
          color:#fff;
          margin-bottom:0px;
      }
      
  </style>
  

     <a href="http://m.me/pinasexpresscargoqatar" target=""
            class="open-button"><i class="ri-messenger-line"></i></a>
    
    
      <style>
        .open-button {
          background-image: linear-gradient(60deg, #F85088, #4683FF);
          box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
          color: white;
          /*padding: 3;*/
          border: none;
          cursor: pointer;
          opacity: 1;
          position: fixed;
          bottom: 23px;
          right: 28px;
          width: 50px;
          height: 50px;
          display: flex;
          align-items: center;
          justify-content: center;
          z-index: 999;
          border-radius: 50px;
        }
    
        .open-button i {
          font-size: 30px;
        }
    
        .open-button:hover i {
          opacity:0.7!important;
        }
      </style>

  <!-- 
    - custom js link
  -->
  <script src="<?=base_url('assets/website')?>/js/script.js"></script>
  <script src="<?=base_url('assets/website')?>/js/swiper-bundle.min.js"></script>
  <!-- <script src="./assets//js/bootstrap.min.js"></script> -->

  <script>
    var swiper = new Swiper(".mySwiper", {
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
    
    
    var swiper = new Swiper(".serviceSwiper", {
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
  </script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  


</body>

</html>