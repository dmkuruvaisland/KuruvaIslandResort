<!DOCTYPE html>
<html lang="zxx">
    <?php 
    
    $base="https://www.kuruvaislandresort.com/";
    
    ?>
    <?php

        
         try{
            
             include(__DIR__.'/include/db_config.php');
             $perma = isset($_GET['perma']) ? $_GET['perma'] : '';
            //   print_r($_GET);
        // // SQL query to fetch data
             $sql = "SELECT * FROM `blog` WHERE `perma` LIKE '%".$perma."%';";
            
             // echo  $sql;
             $result = $conn->
        query($sql);
        if($result->num_rows>0){
            $data = $result->fetch_assoc();
            $metatitle = $data['title'];
        }
        }catch(Exception $e){  echo $e->getMessage();  } $documents = array(); ?>
        
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta
            name="description"
            content="Discover the perfect getaway at Kuruva Island Resort & Spa, a pet-friendly resort in Wayanad. Explore paradise with your furry friend. Check it Out.
 "
        />
        <meta name="keywords" content="Wayanad best resorts to stay, best view resorts in Wayanad" />
        
        <title><?= htmlspecialchars(strip_tags($metatitle)) ?></title>
        <link rel="shortcut icon" href="img/favicon.webp" />
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="canonical" href="https://www.kuruvaislandresort.com/best-place-to-visit-in-wayanad-exploring-kuruva-island.php" />
        
        <style>
            .news2 .post-cont i {
                color: #123d35;
                margin: 0 10px;
                font-size: 16px;
            }
        </style>
        
    </head>
    <body>
         
        <div class="preloader-bg"></div>
        <?php include __DIR__.'/header.php';?>
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="7" data-background="/img/blogs/bloge-banner.webp">
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
                                    <div class="post-img"><img src="/admin/<?= $data['image'] ?>" alt="kuruva island" /></div>
                                    <div class="post-cont">
                                        <strong><i class="fa fa-calendar-days"></i>7 September 2023</strong>
                                        <h1><?=strip_tags($data['title'])?></h1>
                                        <?=$data['content']?>
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
       
        <?php //include 'blogcomments.php';?>
        <?php //include __DIR__.'/footer.php';?>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.isotope.v3.0.2.js"></script>
        <script src="js/pace.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrollIt.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/YouTubePopUp.js"></script>
        <script src="js/select2.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/custom.js"></script>
        <?php include 'footer.php';?>
    </body>
</html>
