<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Places to host Events in Wayanad resorts. We are the top resorts for parties in Wayanad Kuruva island resort and spa" />
    <meta name="keywords" content="Destination wedding in Wayanad, events in Wayanad, best events in Wayanad, Top Resorts for Parties in Wayanad, BEST VENUE IN WAYANAD" />
    <title>Top Event Venues in Wayanad for Memorable Occasions</title>
    <link rel="shortcut icon" href="img/favicon.webp" />
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="canonical" href="https://www.kuruvaislandresort.com/events-in-wayanad" />
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
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"><span></span></div>
        </div>
    </div>
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /></svg>
    </div>
    <?php include 'header.php';?>
    <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/packages/special-packges-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption mt-60">
                    <h5>Kuruva Island Resort & Spa</h5>
                    <h1>Events</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="about section-padding">
        <div class="container">
            <div class="chef-recommends">
                <div class="row">
                    <?php
                        // Database connection settings
                        $host = 'localhost';
                        $username = 'kuruvaislandreso_kuruva';
                        $password = 'snaper@469#@';
                        $database = 'kuruvaislandreso_new_db';
                        
                        // Create a database connection
                        $mysqli = new mysqli($host, $username, $password, $database);
                        
                        // Check for connection errors
                        if ($mysqli->connect_error) {
                            die('Connection failed: ' . $mysqli->connect_error);
                        }
                        
                        // SQL query to fetch data
                        $sql = 'SELECT * FROM events ORDER BY id DESC';
                        $result = $mysqli->query($sql);
                        
                        if ($result) {
                            // Fetch data from the result set
                            while ($row = $result->fetch_assoc()) {
                                $title       = $row['title'];
                                $description = $row['description'];
                                $image       = 'admin/' . $row['image']; // Adjust the path to your images directory
                                $id          = $row['id'];
                                      
                                       echo   ' <div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">
                                                <div class="item">
                                                    <div class="position-re o-hidden"><img src="' . $image . '" alt="" /></div>
                                                        <div class="con">
                                                            <h5><a href="event_details.php?id=' . $id . '">' . $title . '</a></h5>
                                                            <div class="line"></div>
                                                            <div class="row">
                                                                <div class="col-md-12 text-center">
                                                                    <div class="permalink">
                                                                        <a href="event_details.php?id=' . $id . '" class="button-4 mt-15">Read More<span></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/corporate.webp" alt="Baby shower" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="corporate-parties-wayanad.php">Corporate Parties</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="corporate-parties-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/wedding.webp" alt="Baby shower" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="wedding-venues-in-wayanad.php">Wedding Parties</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="wedding-venues-in-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.5s" class="col-md-4 wow fadeInLeft">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/birthday.webp" alt="Birthday Party" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="birthday-party-in-Wayanad.php">Birthday Parties</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="birthday-party-in-Wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.7s" class="col-md-4 wow fadeInDown">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/bachelorette-party.webp" alt="Bachelorette Party" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="bachelorette-Party-in-Wayanad.php">Bachelorette Parties</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="bachelorette-Party-in-Wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/bachelor-party.webp" alt="Bachelor Party " /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="bachelor-party-in-wayanad.php">Bachelor Parties</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="bachelor-party-in-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/baby-shower.webp" alt="Baby shower" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="baby-shower-resort-wayanad.php">Baby Shower</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="baby-shower-resort-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/bridal-shower.webp" alt="Baby shower" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="bridal-shower-wayanad.php">Bridal Shower</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="bridal-shower-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/private.webp" alt="Baby shower" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="private-party-wayanad.php">Private Parties</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="private-party-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/family.webp" alt="Baby shower" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="family-party-venues-in-wayanad.php">Family Parties</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="family-party-venues-in-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/fashion.webp" alt="Baby shower" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="fashion-show-wayanad.php">Fashion Events</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="fashion-show-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div data-wow-delay="0.9s" class="col-md-4 wow fadeInRight">-->
                    <!--    <div class="item">-->
                    <!--        <div class="position-re o-hidden"><img src="img/events/gettogether.webp" alt="Baby shower" /></div>-->
                    <!--        <div class="con">-->
                    <!--            <h5><a href="get-together-wayanad.php">Get Together</a></h5>-->
                    <!--            <div class="line"></div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-12 text-center">-->
                    <!--                    <div class="permalink">-->
                    <!--                        <a href="get-together-wayanad.php" class="button-4 mt-15">Read More<span></span></a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="section-head mb-20">
                        <div class="section-subtitle">Kuruva Island</div>
                        <div class="section-title">Events</div>
                    </div>
                    <p>
                        Kuruva Island Resort and Spa is one of the best places in Wayanad for hosting events such as weddings, corporate meetings, parties, and more. The resort offers a range of event spaces, catering services, and party
                        planning services to ensure that your event is a success. Whether you're planning an intimate gathering or a grand celebration, the resort has a variety of options to suit your needs.
                    </p>
                    <p>
                        One of the most popular event spaces at Kuruva Island Resort and Spa is the banquet hall. The banquet hall is a spacious and elegant venue that can accommodate up to 300 guests. The hall is equipped with all the
                        necessary amenities to make your event a success, including sound and lighting equipment, tables and chairs, and more. The banquet hall is ideal for weddings, corporate events, and other large gatherings.
                    </p>
                    <p>
                        If you're looking for a more intimate setting for your event, the resort also offers outdoor best venue in wayanad such as the garden and swimming pool area. The garden is a beautifully landscaped space that can
                        accommodate up to 100 guests. It's an ideal location for a small wedding or a garden party. The swimming pool area is another great option for hosting events. It can accommodate up to 50 guests and is perfect for a
                        poolside party or a small gathering.
                    </p>
                    <p>
                        For those looking for something more unique, the resort also offers a rooftop event space. The rooftop is a stunning location with breathtaking views of the surrounding area. It's an ideal location for a cocktail
                        party or a small wedding reception. The rooftop can accommodate up to 75 guests.
                    </p>
                    <p>
                        In addition to event spaces, Kuruva Island Resort and Spa also offers catering services for events. The resort has a team of experienced chefs who can create customized menus for your event. Whether you're looking
                        for traditional Indian cuisine or international dishes, the resort can accommodate your needs.
                    </p>
                    <p>
                        The resort also provides event planning services to ensure that your event runs smoothly. The resort has a team of experienced event planners who can help you with everything from choosing the right event space to
                        selecting the perfect decor. The team can also assist with organizing transportation, entertainment, and more.
                    </p>
                    <p>
                        Destination wedding in Wayanad is a dream where it is a picturesque destination and a popular choice for a destination wedding. The tranquil hills and lush greenery make it an ideal setting for an intimate and
                        romantic wedding ceremony. There are many resorts in Wayanad that offer exquisite wedding venues and personalized services to make your special day unforgettable.
                    </p>
                    <p>
                        Many events in Wayanad is not just a popular tourist destination, but it is also a hub for various events and cultural activities. The natural beauty of Wayanad combined with its vibrant culture and traditions
                        provides the perfect setting for hosting events of all kinds, from music festivals to corporate conferences.
                    </p>
                    <p>
                        Best events in Wayanad hosts several events throughout the year that attract tourists and locals alike. Some of the best events in Wayanad include the Wayanad Mahotsavam, a 3-day cultural festival that showcases the
                        rich traditions and culture of the region. The Wayanad Marathon is another popular event that draws fitness enthusiasts from all over the country.
                    </p>
                    <p>
                        Our top resorts for Parties in Wayanad has several top-notch resorts that offer a range of amenities for parties and events. These resorts boast well-equipped banquet halls, outdoor event spaces, and luxurious
                        accommodation options. Whether you're planning a wedding, birthday party, or corporate event, these resorts provide everything you need to make your event a success.
                    </p>
                    <p>
                        Kuruva Island Resort and Spa is one of the Best in venues Wayanad. The resort offers a variety of event spaces, including a swimming pool, garden, outdoor venue, and rooftop. The resort's banquet hall can accommodate
                        up to 250 guests, making it an ideal choice for weddings and large events. Kuruva Island Resort and Spa also provides event planning and catering services to ensure that your event is executed flawlessly.
                    </p>
                    <p>
                        When it comes to decor, Kuruva Island Resort and Spa offers a range of options to suit your preferences. Whether you're looking for something simple and elegant or grand and extravagant, the resort can accommodate
                        your needs. The team can help you select the perfect flowers, lighting, and other decor elements to make your event truly special.
                    </p>
                    <p>
                        In conclusion, Kuruva Island Resort and Spa is an ideal destination for hosting events in Wayanad. With its range of event spaces, catering services, and party planning services, the resort can help you create a
                        truly unforgettable event. Whether you're planning a wedding, corporate meeting, or birthday party, the resort has everything you need to make your event a success.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
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
      <?php include 'footer-tags.php';?>

</body>
</html>