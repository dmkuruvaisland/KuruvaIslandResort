<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="description" content="Go through our video gallery featuring our best moments with guests and some of the tourist attractions near the best luxury resort in Wayanad, Kuruva." />
        <meta name="keywords" content="best accomodation in wayanad" />
        <title>Luxury Resort Videos | Travel Vlogs Wayanad | Video Diary</title>
        <link rel="shortcut icon" href="img/favicon.webp" />
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="canonical" href="https://www.kuruvaislandresort.com/videogallery.php" />
        <?php include 'head-script.php';?>
         <?php include 'head-tags.php';?>
         <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-342190714');
</script>

<script>
  gtag('event', 'conversion', {'send_to': 'AW-342190714/NZ9lCI_rgpIaEPrUlaMB'});
</script>
    </head>
    <body>
        <div class="preloader-bg"></div>
        <?php include 'header.php';?>
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="7" data-background="img/places/places-wayanad.webp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center caption mt-60">
                        <h5>Kuruva Island Resort & Spa</h5>
                        <h1>Video Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    
                    
                    
                    
              
                     
                       <?php
// Load secure database settings
include_once __DIR__ . '/include/db_config.php';
$host     = isset($gallery_host) ? $gallery_host : (getenv('DB_HOST') ?: 'localhost');
$username = isset($gallery_user) ? $gallery_user : (getenv('DB_USER_GALLERY') ?: 'u809139756_kuruva_new_db');
$password = isset($gallery_pass) ? $gallery_pass : (getenv('DB_PASS_GALLERY') ?: '');
$database = isset($gallery_db)   ? $gallery_db   : (getenv('DB_NAME_GALLERY') ?: 'u809139756_kuruva_new_db');

// Create a database connection
$mysqli = @new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($mysqli && $mysqli->connect_error) {
    error_log('Video Gallery DB connection failed: ' . $mysqli->connect_error);
    $mysqli = null;
}

// SQL query to fetch data
$sql = 'SELECT * FROM video_gallery ORDER BY id DESC';
$result = $mysqli->query($sql);

if ($result) {
    // Fetch data from the result set
    while ($row = $result->fetch_assoc()) {
       $video = 'https://www.youtube.com/embed/' . $row['video']; // Adjust the path to your images directory
       $image = 'admin/' . $row['thumbnail']; 
        $id = $row['id'];

        // Your HTML code to display each row goes here
        // echo '<div class="col-md-2">
        //         <div style="position:relative; font-size:30px;">
        //             <img style="width:100%;" src="' . $image . '">
        //             <a href="/admin/photo_gallery/delete/' . $id . '/" onclick="return confirm(\'Are you sure you want to delete\')">
        //                 <i style="position:absolute; right:16px; bottom:8px; color:red;" class="fa fa-minus-circle" aria-hidden="true"></i>
        //             </a>
        //         </div>
        //       </div>';
              
               echo '     
                    <div class="col-md-6">
                       <div class="vid-area mb-30">
                           <div class="vid-icon">
                                    
                                         <img src="' . $image . '" alt="Kuruva Island" />
                                <a class="video-gallery-button vid" href="' . $video . '">
                                    <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                                </a>
                                    
                                        
                                   
                                     </div>
                                </div>
                            </div>';
    }

    // Free the result set
    $result->free();
} else {
    echo 'Error: ' . $mysqli->error;
}

// Close the database connection
$mysqli->close();
?>

                    
                    
                    
               
                    
                    
                    
                    
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-01.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=QqeA6fN2ee0">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-02.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=-P2Xd8yu-j0">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-03.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=UvXb397ju7M">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-04.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=a4jDiamcgY0">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-05.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=Ls0_uVBUPks">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-06.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=gsJYabXr5NM">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-07.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=XXkxkfqlJgw">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-08.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=ri76yvh_v_A">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-09.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=7hv2jr8oqhA">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-10.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=tcTdNNHLNpw">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-11.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=FYWleBsKOUc">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-12.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=-dj-cDzHPwo">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-13.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=nammFv3__88">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-14.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=UJsDwR_SCGg">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/video-15.webp" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="https://www.youtube.com/watch?v=tJ_GiroL7Ag">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
        
        
        
        <!--review-->
        <section class="section">
            <div class="container">
                <div class="section-head mb-20">
<!--<div class="section-subtitle">Kuruva Island</div>-->
<!--<div class="section-title">Reviews </div>-->
</div>
                <div class="row">
                                       <div class="col-md-4">
                        <div class="vid-area mb-30">
                            <div class="vid-icon">
                                <img src="img/gallery/videogallery/review-3.jpg" alt="Kuruva Island" />
                                <a class="video-gallery-button vid" href="img/gallery/videogallery/Review Video New-6.mp4">
                                    <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                                       <div class="col-md-4">
                        <div class="vid-area mb-30">
                            <div class="vid-icon">
                                <img src="img/gallery/videogallery/review-2.jpg" alt="Kuruva Island" />
                                <a class="video-gallery-button vid" href="img/gallery/videogallery/Review Video New.mp4">
                                    <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="vid-area mb-30">
                            <div class="vid-icon">
                                <img src="img/gallery/videogallery/review.jpg" alt="Kuruva Island" />
                                <a class="video-gallery-button vid" href="img/gallery/videogallery/Review Video New-5.mp4">
                                    <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="vid-area mb-30">
                            <div class="vid-icon">
                                <img src="img/gallery/videogallery/review-5.jpg" alt="Kuruva Island" />
                                <a class="video-gallery-button vid" href="img/gallery/videogallery/Kuruva review Video-2.mp4">
                                    <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="vid-area mb-30">
                            <div class="vid-icon">
                                <img src="img/gallery/videogallery/review-6.jpg" alt="Kuruva Island" />
                                <a class="video-gallery-button vid" href="img/gallery/videogallery/Review Video New-4.mp4">
                                    <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="vid-area mb-30">
                            <div class="vid-icon">
                                <img src="img/gallery/videogallery/review-7.jpg" alt="Kuruva Island" />
                                <a class="video-gallery-button vid" href="img/gallery/videogallery/Kuruva-review-9Video-1.mp4">
                                    <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="col-md-4">-->
                    <!--    <div class="vid-area mb-30">-->
                    <!--        <div class="vid-icon">-->
                    <!--            <img src="img/gallery/videogallery/review-7.jpg" alt="Kuruva Island" />-->
                    <!--            <a class="video-gallery-button vid" href="img/gallery/Kuruva-review-9Video-1.mp4">-->
                    <!--                <span class="video-gallery-polygon"><i class="ti-control-play"></i></span>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
   
   <?php include 'features.php';?> <?php include 'footer.php';?> <script src="js/jquery-3.6.0.min.js"></script><script src="js/jquery-migrate-3.0.0.min.js"></script><script src="js/modernizr-2.6.2.min.js"></script><script src="js/imagesloaded.pkgd.min.js"></script><script src="js/jquery.isotope.v3.0.2.js"></script><script src="js/pace.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/scrollIt.min.js"></script><script src="js/jquery.waypoints.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/jquery.stellar.min.js"></script><script src="js/jquery.magnific-popup.js"></script><script src="js/YouTubePopUp.js"></script><script src="js/select2.js"></script><script src="js/datepicker.js"></script><script src="js/smooth-scroll.min.js"></script><script src="js/custom.js"></script>
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
<?php include 'footer-tags.php';?>
</body>
</html>
