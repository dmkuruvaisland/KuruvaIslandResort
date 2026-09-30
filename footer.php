<?php
// function generateRandomString($length = 6) {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, strlen($characters) - 1)];
//     }
//     return $randomString;
// }

// $captcha = generateRandomString(6);
?>
<?php
// Get the user's IP address
$ip_add = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];

// Get the current URL
$current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

<style>.footer-menu {
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
.captcha {
    width: 50%;
    background: black; /* Change background color to black */
    color: white; /* Change text color to white */
    text-align: center;
    font-size: 24px;
    font-weight: 700;
}
input[name="location"] {
    display: none;
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
                        <img src="img/clients/clients-1.webp" alt="Kuruva Island Resort and Spa" width="100%" />
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                    <a target="_blank"
                        href="https://www.makemytrip.com/hotels/hotel-details/?hotelId=201910301716286717&_uCurrency=INR&city=CTXWA&cmp=SEM%7CD%7CDH%7CG%7CHname%7CDH_HName_CTXWA_10-15K_DT%7C201910301716286717%7CR%7C&country=IN&ef_id=Cj0KCQiAnfmsBhDfARIsAM7MKi1XhvYYH93pAB_APhS53tt1MFoIz1JvxMBy4-S6_1bW9dQD-GIxdmEaAs7aEALw_wcB%3AG%3As&gad_source=1&lat=11.83013&lng=76.08655&locusId=CTXWA&locusType=city&rank=1&reference=hotel&roomStayQualifier=2e0e&searchText=Wayanad&topHtlId=201910301716286717&type=city&viewType=PREMIUM&mtkeys=defaultMtkey">
                        <img src="img/clients/clients-2.png" alt="Kuruva Island Resort and Spa" width="100%" />
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                    <a target="_blank" href="https://www.booking.com/hotel/in/kuruva-island-resort-and-spa.en-gb.html?#availability">
                        <img src="img/clients/clients-3.webp" alt="Kuruva Island Resort and Spa" width="100%" />
                    </a>
                </div>
                 
                
              <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                    <a target="_blank"
                        href="https://www.goibibo.com/hotels/kuruva-island-resort-spa-hotel-in-wayanad-2376222728091724121/">
                        <img src="img/clients/clients-6.png" alt="Kuruva Island Resort and Spa" width="100%" style="filter: brightness(0) invert(1);" class="mt-2" />
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                    <a target="_blank"
                        href="https://www.easemytrip.com/hotels/kuruva-island-resort-and-spa-by-kabini-breez-resort-and-spa-2068360/">
                        <img src="img/clients/clients-5.png" alt="Kuruva Island Resort and Spa" width="100%" />
                    </a>
                </div>

            </div> 
            <div class="col-lg-2 col-md-2 col-sm-4 col-4" style="margin-top:10px;">
                    <a target="_blank"
                        href="https://www.agoda.com/kuruva-island-resort-and-spa/hotel/wayanad-in.html?ds=vCJnuzqfxOdHyPr6">
                        <img src="https://static.tacdn.com/img2/travelers_choice/widgets/tchotel_2024_LL.png" alt="TripAdvisor" class="widCOEImg  w-75 rounded" id="CDSWIDCOELOGO" />
                    </a>
                </div> 
            <hr class="mt-3" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul class="footer-menu">
                        <li> <a href="packages-couples-wayanad.php"> Packages </a> </li>
                            <li> <a href="kuruva-facilities.php"> Facilities</a> </li>                           
                            <li> <a href="place-to-visit.php">Places to Visit</a> </li>                            
                            <li> <a href="wayanad.php"> Wayanad</a> </li>                            
                            <li> <a href="ayurveda-spa-resort-wayanad.php"> Spa</a> </li>
                                                        <li> <a href="dining.php"> Dining</a> </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Other Links</h3>
                        <ul class="footer-menu">
                            <li> <a href="photogallery.php"> Photo Gallery</a> </li>
                            <li> <a href="videogallery.php"> Video Gallery</a> </li>
                            <li> <a href="https://kuruvaislandresort.com/blog/"> Blog</a> </li>
                            <li> <a href="events-in-wayanad.php">Events</a> </li>
                            <li> <a href="careers.php">Careers</a> </li>
                            <li> <a href="privacy-policy.php">Privacy Policy </a> </li>
                            <!--<li> <a href="contact.php">Contact Us </a> </li>   -->
                             <li> <a href="faq.php">Faq </a> </li>                           
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
                            <p class="footer-contact-phone">Reservation :<a href="tel:+919562205599"> +91 9562205599</a> | <a href="tel:+917907854998">+91 7907854998</a> | <a href="tel:+919562185599">+91 9562185599</a></p>
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
                        <p class="footer-bottom-copy-right" style="text-align:center;">© Copyright 2024 Kuruva Island Resort & Spa All Rights
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
            <i> <img style="width: 28px;" src="/img/icon/whatsapp.svg" alt="Activities wayanad"> </i> <br> <span>Whatsapp</span>
        </a>
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="https://www.secure-booking-engine.com/accounts/-EO6GWXX32EODC4ztSg0kw/properties/PKisy1O45LWyb4xtbsdOxA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/" target="_blank">
            <i><img style="width: 28px;" src="/img/icon/booknow.svg" alt="booking"></i> <br> <span>Book Now</span>
        </a> 
    </div>
    <div class="mobile-bottom-nav__item">
        <a href="tel:+91 9562205599">
            <i><img style="width: 28px;" src="/img/icon/call.svg" alt="call"></i>  <br> <span>Call</span>
        </a>
    </div>
    <div class="mobile-bottom-nav__item">
        <button id="showFormBtn">
            <i><img style="width: 28px;filter: brightness(0) invert(1);" src="/img/icon/booking.svg" alt="reserve"></i> <br> <span>Reserve</span>
        </button>
    </div>

<form method="post" id="myForm" action="https://www.kuruvaislandresort.com/admin/reservation_form/form" autocomplete="off" style="margin-top: 120px;">
    <i class="fas fa-times close" onclick="closeForm()"></i>
    <div class="myform_heading">
        <h5>Quick Enquiry</h5>
        <p>Get in touch with us</p>
    </div>
    <div class="myform_details mb-0" >
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required class="mb-2" placeholder="Enter Your Name"><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required placeholder="Enter Phone Number"><br><br>

        <label for="date">Date you are Planning for:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="3" required placeholder="Type your message here!!!"></textarea><br>


        <!-- Hidden fields to capture IP address and current page URL -->
        <input type="hidden" name="ip_address" value="<?php echo $ip_add; ?>">
        <input type="hidden" name="current_url" value="<?php echo $current_url; ?>">
        <input type="text" name="location" id="location" placeholder="Enter Your location">
        <div class="col-md-6 form-group">
            <label for="captcha">Captcha</label>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <div class="g-recaptcha" data-sitekey="6Les00oqAAAAAIni_xtWobm8FrV7EG2z-9PixeWm" data-callback="recaptchaCallback"></div>              
        </div>
        <input type="submit" value="Submit">
    </div>
</form>

</nav>

<!-- Modal -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>





<script>
// $(document).ready(function() {
//     $('#myForm').submit(function(event) {
//         event.preventDefault();

//         var inputCaptcha = $('#captcha_input').val();
//         var generatedCaptcha = $('#captcha').val();
//         if (inputCaptcha !== generatedCaptcha) {
//             alert('Incorrect CAPTCHA. Please try again!');
//             return;
//         }

//         $(this).unbind('submit').submit();
//     });
// });
</script>


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
                links[i].setAttribute('href', "/" + href.slice(0, -4)); // Remove last 4 characters (".php")
            }
        }
    }

    // Call the function after the page has loaded
    window.addEventListener('load', removePhpExtension);
</script>

<script>
    // JavaScript to handle button click event and show form
    document.getElementById('showFormBtn').addEventListener('click', function() {
        document.getElementById('myForm').style.display = 'block';
    });

    function closeForm() {
        document.getElementById('myForm').style.display = 'none';
    }
</script>


