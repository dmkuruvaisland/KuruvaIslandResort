<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="description" content="Read and stay up to date with the latest trending stories of Kuruva Island Resort, the best jungle resort with a private pool villa In Wayanad." />
        <meta name="keywords" content="Wayanad best resorts to stay, best view resorts in Wayanad" />
        <title>Travel Blog | Jungle Resort Wayanad | Luxury Lifestyle</title>
        <link rel="shortcut icon" href="img/favicon.webp" />
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="canonical" href="https://www.kuruvaislandresort.com/blogs" />
        <style>
            .chef-recommends-2 .caption h4,
            .chef-recommends-2 .caption h4 a {
                font-size: 30px;
                color: #123d35;
                margin-bottom: 10px;
                letter-spacing: -1px;
            }
        </style>
        <?php include('include/db_config.php')?>
        <?php
// SQL query to fetch data
    $sql = "SELECT * FROM blog ORDER BY id DESC";
    $result = $conn->
        query($sql); $documents = array(); ?>
          
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
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="7" data-background="img/blogs/bloge-banner.webp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center caption mt-60">
                        <h5>Kuruva Island Resort & Spa</h5>
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-padding">
            <div class="container">
                <div class="row"><div class="col-md-12"></div></div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            
                             if ($result->num_rows > 0): $k=1; while ($row = $result->fetch_assoc()): $mod = $k % 2; ?>
                        <div class="chef-recommends-2 mb-90 <?=($mod > 0) ? 'left' : '' ?> animate-box" data-animate-effect="fadeInUp">
                            <figure><img src="admin/<?= $row['image'] ?>" alt="blogs of kuruva island" class="img-fluid" /></figure>
                            <div class="caption">
                                <h4>
                                    <a href="blog-details.php?perma=<?=$row['perma']?>"><?=strip_tags($row['title'])?></a>
                                </h4>
                                <p><?=$row['description']?></p>
                                <hr class="border-2" />
                                <div class="info-wrapper">
                                    <div class="more">
                                        <a href="blog-details?perma=<?=$row['perma']?>" class="link-btn blck" tabindex="0">Read More<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            $k++;
                            endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
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
