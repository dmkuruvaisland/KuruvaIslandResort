<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="description" content="Browse through the bits of memories Kuruva Island Resort made with guests. Our luxury resort in Wayanad is the place where travelers make sweet memories." />
        <meta name="keywords" content="Premium Resorts in Wayanad, stay in wayanad resorts " />
        <title>Photo Gallery | Travel Memories | Kuruva Island Resort</title>
        <link rel="shortcut icon" href="img/favicon.webp" />
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="canonical" href="https://www.kuruvaislandresort.com/photogallery" />
        <?php include 'head-script.php';?>
         <?php include 'head-tags.php';?>
    </head>
    <body>
        <div class="preloader-bg"></div>
        <?php include 'header.php';?>
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="7" data-background="img/places/places-wayanad.webp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center caption mt-60">
                        <h5>Kuruva Island Resort & Spa</h5>
                        <h1>Photo Gallery</h1>
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
                            error_log('Gallery DB connection failed: ' . $mysqli->connect_error);
                            $mysqli = null;
                        }
                        
                        // SQL query to fetch data
                        $sql = 'SELECT * FROM photo_gallery ORDER BY id DESC';
                        $result = $mysqli->query($sql);
                        
                        if ($result) {
                            // Fetch data from the result set
                            while ($row = $result->fetch_assoc()) {
                            //   $video = 'https://www.youtube.com/embed/' . $row['video']; // Adjust the path to your images directory
                               $image = 'admin/' . $row['image']; 
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
                                       
                                            <div class="col-md-4 gallery-item">
                                                <a href="' . $image . '" title="" class="img-zoom">
                                                    <div class="gallery-box">
                                                        <div class="gallery-img"><img src="' . $image . '" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                                                    </div>
                                                </a>
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
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-1.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-1.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-2.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-2.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-3.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-3.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-4.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-4.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-5.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-5.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-6.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-6.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-7.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-7.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-8.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-8.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-9.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-9.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-10.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-10.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-11.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-11.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-12.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-12.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-13.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-13.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-14.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-14.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-15.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-15.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-16.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-16.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-17.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-17.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-18.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-18.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-19.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-19.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-20.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-20.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-21.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-21.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-22.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-22.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/gal-23.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/gal-23.jpg" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-01.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-01.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-02.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-02.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-03.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-03.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-04.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-04.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-05.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-05.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-06.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-06.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-07.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-07.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-08.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-08.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-09.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-09.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-10.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-10.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-11.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-11.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-12.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-12.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-13.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-13.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-14.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-14.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-15.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-15.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-16.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-16.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-17.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-17.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-18.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-18.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-19.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-19.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-20.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-20.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-21.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-21.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-22.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-22.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-23.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-23.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-24.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-24.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-25.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-25.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-26.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-26.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-27.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-27.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-28.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-28.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-29.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-29.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-30.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-30.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-31.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-31.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-32.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-32.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-33.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-33.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <!--<div class="col-md-4 gallery-item">-->
                    <!--    <a href="img/gallery/kuruva-gallery-34.webp" title="" class="img-zoom">-->
                    <!--        <div class="gallery-box">-->
                    <!--            <div class="gallery-img"><img src="img/gallery/kuruva-gallery-34.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-35.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-35.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-36.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-36.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-37.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-37.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-38.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-38.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-39.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-39.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-40.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-40.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-41.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-41.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-42.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-42.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-43.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-43.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-44.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-44.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-45.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-45.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-46.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-46.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-47.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-47.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-48.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-48.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-49.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-49.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-50.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-50.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-51.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-51.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-52.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-52.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-53.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-53.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-54.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-54.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-55.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-55.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-56.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-56.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-57.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-57.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-58.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-58.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-59.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-59.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-60.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-60.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-61.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-61.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-62.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-62.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-63.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-63.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-64.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-64.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-65.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-65.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-66.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-66.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-67.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-67.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-68.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-68.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-69.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-69.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-70.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-70.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-71.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-71.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-72.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-72.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-73.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-73.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-74.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-74.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-75.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-75.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-76.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-76.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-77.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-77.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-78.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-78.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-79.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-79.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-80.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-80.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-81.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-81.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-82.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-82.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-83.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-83.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-84.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-84.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-2-02-11-24.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-2-02-11-24.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 gallery-item">
                        <a href="img/gallery/kuruva-gallery-02-11-24.webp" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/gallery/kuruva-gallery-02-11-24.webp" class="img-fluid mx-auto d-block" alt="work-img" /></div>
                            </div>
                        </a>
                    </div>  
                    
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
