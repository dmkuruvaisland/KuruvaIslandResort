<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Discover the top-rated resorts for corporate parties near Manathavady Wayanad. Host the best business events with our expertly designed venues and amenities.">
    <meta name="keywords" content="Corporate Parties Wayanad, Corporate Party Venues near Manathavady Wayanad, corporate events Places In Wayanad, best resort for corporate parties in Wayanad">
    <title>Top Corporate Party Resorts: Best Venues for Business Events</title>
    <link rel="shortcut icon" href="img/favicon.webp">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="https://www.kuruvaislandresort.com/corporate-parties-wayanad">
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
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <?php include 'header.php'; ?>
    <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="7" data-background="img/events/events-banner.webp">
        <div class="container">
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
                
                $event_id = $_GET['id'];
                
                $sql = 'SELECT * FROM events WHERE id =' . $event_id;
                $result = $mysqli->query($sql);

                if ($result) {
                    // Fetch data from the result set
                    while ($row = $result->fetch_assoc()) {
                        $title       =  $row['title'];
                        $description =  $row['description'];
                        $image       = 'admin/' . $row['image']; // Adjust the path to your images directory
                        $id          = $row['id'];

                          echo    ' 
                <div class="col-md-12 text-center caption mt-60">
                    <h5>Kuruva Island Resort & Spa</h5>
                    <h1>' . $title . '</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="clearfix">
                                      <h2>' . $title . '</h2>
                                      <img src="' . $image . '" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
                                      <p>' . $description . '</p>
                                    </div>
                                    ';
                    }

                    // Free the result set
                    $result->free();
                } else {
                    echo 'Error: ' . $mysqli->error;
                }

                // Close the database connection
                $mysqli->close();
                ?>

            </div>
        </div>
    </section> <?php include 'footer.php'; ?> <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
      <?php include 'footer-tags.php';?>

</body>