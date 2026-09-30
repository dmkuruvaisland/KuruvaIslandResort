
    <style>
    
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: #fef0ea;
    font-family: 'Poppins', sans-serif;
}

:root{
    --font-color:#b46537;
}
section{
    padding: 100px 0;
}
.package{
    padding: 20px 0;
}
p{
    font-size: 16px;
    line-height: 2;
}
a{
    text-decoration: none;
}
h3{
    font-size: 30px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: var(--font-color);
}
@media (min-width:360px) and (max-width:767px){
   h3{
       font-size: 20px;
   }
}
.package-btn{
    display: inline-block;
    /* border: 1px solid var(--bg-white); */
    color: #fff;
    padding: 12px 21.92px;
    font-size: 18px;
    background: #b46537;
    text-transform: capitalize;
    border-radius: 3px;
    transition: all 0.3s ease-in-out;
}
.package-btn:focus{
    outline: none;
    box-shadow: none;
}
.package-btn:hover{
    background: #fff;
    border: 1px solid #b46537;
    color: var(--font-color);
}




.ayurveda-spa{
    /* background-image: url(/images/ayurveda-bg.jpg); */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    width: 100%;
    
}

@media (min-width:360px) and (max-width:767px){
    .ayurveda-spa{
        
        background-image: url(/images/ayurveda-spa/mobile-bg.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
    }
    .categories{
        padding-top:0px !important;
    }
}

.ayurveda-spa .main-text{
    left: 50%;
    top: 50%;
    transform: translate(-50% , -50%);
    position: absolute;
    text-align: center;
    
}
.ayurveda-spa .main-text h1{
    font-size: 80px;
    text-transform: uppercase;
    font-weight: bold;
    color: var(--font-color);
}

.ayurveda-spa .main-text h6{
    font-size: 30px;
    line-height:1;
    text-transform: uppercase;
    color: var(--font-color);
    margin-bottom: 20px;
}

@media (min-width:768px) and (max-width:1023px){
    .ayurveda-spa .main-text{
        left: 40%;
        top: 50%;
        transform: translate(-30% , -50%);
        position: absolute;
        text-align: center;
    }
    .ayurveda-spa .main-text h1{
        font-size: 50px;
    }
    .ayurveda-spa .main-text h6{
        font-size: 20px !important;
    }
    

}

@media (min-width:360px) and (max-width:767px){
    .ayurveda-spa .main-text{
        left: 30%;
        top: 50%;
        transform: translate(-20% , -50%);
        position: absolute;
        text-align: center;
    }
    .ayurveda-spa .main-text h1{
        font-size: 40px;
    }
    .ayurveda-spa .main-text h6{
        font-size: 20px !important;
    }

}


.category-img img{
    margin-bottom: 20px;
    border-radius: 10px;
}
.category-details{
    background-image: url(/images/ayurveda-spa/Leaf.png);
    background-size: cover;
    background-position: center;
    
}
.package-details h6{
    font-size: 25px;
    font-weight: 600;
}
.package-details ul li{
    line-height: 2;
    /* list-style: none; */
    padding: 0px !important;
    margin-left: -10px !important;
}

.package-details ul li img{
    width: 20px;
    height: 20px;
    margin-right: 10px;
}

    
    
    
    
    
    
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
          
          .package_row h3{
              font-size:20px;
              /*height:40px;*/
              line-height:1.3;
              /*margin-bottom:25px;*/
          }
          .package_row .duration{
              background:#b26437;.
              padding:10px 25px 10px 10px;
              width:fit-content;
              border-bottom-right-radius:30px;
          }
          .package_row .duration h6{
              color:#fff;
          }
          .package_row .price{
              background:#6b462b;
              padding:7px 25px 7px 10px;
              width:fit-content;
              border-bottom-right-radius:30px;
          }
          .package_row .price h6{
              color:#fff;
          }
          .package_row .treatment_image{
              height:300px;
              width:100%;
              margin:15px 0;
              border-radius:20px;
              overflow:hidden;
          }
          .package_row .treatment_image img{
              height:100%;
              width:100%;
              object-fit:cover;
          }
          
          
          .package_price .content{
              display:flex;
              justify-content:space-between;
              align-items:center;
              background:#e6d5cb;
              padding:40px 20px;
              border-radius:10px;
          }
          .package_price .content h2{
              font-size:22px;
          }
          .package_price .content h1{
              font-size:36px;
          }
    </style>


    <section class="ayurveda-spa" >
        <div class="container">
            <div class="main-text">
                <div class="row align-items-center justify-content-center">
                    
                    <div class="col-md-6 mb-3" style="margin-top:120px !important;">
                        <img src="images/ayurveda-spa/relax.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="images/ayurveda-spa/spa-logo.png" class="img-fluid" alt="">
                        <h6>7 day ayurvedic holistic treatment package</h6>
                        <a href="<?=base_url();?>treatment_details" class="btn package-btn mb-3">Package Details</a>
                        <!--<a href="ayurvedic-package-detail.php" class="btn package-btn">Download Brochure</a>-->
                    </div>
                </div>
                <!-- <h1>Relax body soul and mind</h1> -->
                <!-- <h6>7 day ayurvedic holistic treatment package</h6>
                <a href="#" class="main-btn">packages</a> -->
            </div>
            
        </div>
    </section>
    <section class="about-section" style="padding-bottom:0px !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 mb-4 text-center">
                    <div class="about-contents">
                        <h3>7-DAY AYURVEDIC HOLISTIC TREATMENT PACKAGE</h3>
                    <p>
                        Sanskriti Spa offers the signature 7-day ayurvedic holistic treatment. Administered in an authentic ayurvedic environment, this treatment plan is ideal to weed out your health problems and negative energy. The first three days will start with guided yoga meditation and a body massage followed by that. After which you can enjoy the delights Kuruva Island Resort and Spa offers. Fourth day onwards we start Shirodhara and Kizhi. The final day is for you to relax and enjoy, we'll have activities like a wild safari and a temple visit.
                    </p>
                    
                    <button type="button" class="btn package-btn mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Download Brochure &nbsp; <i class="fas fa-download"></i></button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <section class="package_price">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 col-md-4 col-12 mb-5">
                    <div class="content">
                        <h2>5 Days Package</h2>
                        <h1>80,000</h1>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-12 mb-5">
                    <div class="content">
                        <h2>7 Days Package</h2>
                        <h1>1,10,000</h1>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-12 mb-5">
                    <div class="content">
                        <h2>14 Days Package</h2>
                        <h1>2,20,000</h1>
                    </div>
                </div>
            </div>
            
            
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-6 col-12 mb-5">
                    <h3>Navarakizhi</h3>
                    <p>Navarakizhi is an Ayurvedic sweat-inducing treatment that improves and revitalizes the physique. Navara is a variety of rice that is reaped in sixty days and is specifically utilized for Ayurvedic therapies after being prepared with dairy and plant extracts.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-5">
                    <img src="images/spa/spa-8.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-6 col-12 mb-5">
                    <h3>Abhyangam</h3>
                    <p>Time to restore vitality with an alimentative fresh fruit massage lotion on your skin. It is a unique combination of vitamins, fruit extracts, and other herbal elements that promote a nourished, radiant, and smooth complexion.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-5">
                    <img src="images/spa/spa-6.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-6 col-12 mb-5">
                    <h3>Shirodhara</h3>
                    <p>Shirodhara is an ayurvedic technique for mindfulness - based stress relief that entails leaking warm medicinal oil over the forehead and massaging the scalp with oil. It helps in stress reduction and headache relief.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-5">
                    <img src="images/spa/spa-5.jpg" alt="" class="img-fluid">
                </div>
                
                <p>Note: Including all meals & accommodation | Weekdays & weekend price may differ</p>
            </div>
        </div>
    </section>
    

    <section class="categories">
        <div class="container">
            
            
            <div class="row package_row justify-content-center">
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>PADABHYANGAM (FOOT MASSAGE)</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 25 minutes</h6>
                    </div>
                    <div class="price">
                        <h6>₹1500</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>Refresh the systems of your body with a Padabhyan- gam, it is an Ayurvedic foot massage using medicinal plant oils. It works by activating certain spots on your foot, resulting in neurological and bodily calmness.</p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>SHIROABHYANGAM (HEAD, NECK AND SHOULDER)</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 30 minutes</h6>
                    </div>
                    <div class="price">
                        <h6>₹2000</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>Shiroabhyanga is a lovely blend of Shirodhara and Abhyanga therapies. A slow drip of warmed therapeutic oils and a soft yet intense hand massage calms and refreshes your whole body and mind.</p>
                    </div>
                </div>
                
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>NATURAL FRUIT EXTRACT FACIAL MASSAGE</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 30 minutes</h6>
                    </div>
                    <div class="price">
                        <h6>₹3000</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-3.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>Pamper your skin with a nutrient-rich natural fruit extract facial massage. The natural lotion used is a unique combination of vitamins, fruit extracts, and other natural elements that promote a replenished radiance.</p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>RITUALISTIC NATURAL FULL BODY SCRUB</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 45 minutes</h6>
                    </div>
                    <div class="price">
                        <h6>₹3000</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-4.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>Let’s recreate the outermost layers of your skin. In this therapy, the exfoliation of the expired skin cells from the top layer of the skin is accomplished with a natural complete body scrub.</p>
                    </div>
                </div>
                
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>SHIRODHARA (DROPPING OIL ON FOREHEAD)</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 30 minutes</h6>
                    </div>
                    <div class="price">
                        <h6>₹3000</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-5.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>Shirodhara is an ayurvedic technique for mindfulness - based stress relief that entails leaking warm medicinal oil over the forehead and massaging the scalp with oil. It helps in stress reduction and headache relief.</p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>ABHYANGAM (FULL BODY)</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 60 minutes with STEAM</h6>
                    </div>
                    <div class="price">
                        <h6>₹3500</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-6.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>Time to restore vitality with an alimentative fresh fruit massage lotion on your skin. It is a unique combination of vitamins, fruit extracts, and other herbal elements that promote a nourished, radiant, and smooth complexion.</p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>SHIRODHARA WITH FULL BODYMASSAGE</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 1.5 hours</h6>
                    </div>
                    <div class="price">
                        <h6>₹6000</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-7.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>Pamper your skin with a nutrient-rich natural fruit extract facial massage. The natural lotion used is a unique combination of vitamins, fruit extracts, and other natural elements that promote a replenished radiance.</p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>FULL BODY MASSAGE WITH NAVARAKIZHI</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 1.5 hours</h6>
                    </div>
                    <div class="price">
                        <h6>₹6000</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-8.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>Navarakizhi is an Ayurvedic sweat-inducing treatment that improves and revitalizes the physique. Navara is a variety of rice that is reaped in sixty days and is specifi- cally utilized for Ayurvedic therapies after being prepared with dairy and plant extracts.</p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12 mb-5">
                    <h3>KALARI MASSAGE</h3>
                    <div class="duration" style="padding:10px 25px 10px 10px;">
                        <h6>Duration: 1.5 hours with STEAM</h6>
                    </div>
                    <div class="price">
                        <h6>₹6000</h6>
                    </div>
                    <div class="treatment_image">
                        <img src="images/spa/spa-9.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="treatment_desc">
                        <p>It is an authentic “Kalaripayattu” therapy. It evolved in northern Kerala as a scientific treatment technique to physiologically and psychologically reinforce, renew, and mend a warrior in order to meet whatever hard- ships life may throw at him.</p>
                    </div>
                </div>
                
            </div>
            
            
            
            
            
            
                
<!--                <div class="package">-->
<!--                    <div class="row align-items-center">-->
<!--                        <div class="col-md-12 col-lg-6 col-12 d-block d-sm-none">-->
<!--                            <div class="category-img">-->
<!--                                <img src="images/ayurveda-spa/1.jpg" alt="" class="img-fluid">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-12 col-lg-6 col-12">-->
<!--                            <div class="category-details">-->
<!--                                <h3>AYURVEDIC DIAGNOSIS OF YOUR BODY & SOUL</h3>-->
<!--                                <p>We believe that every individual is different, and so are the spiritual and physical problems that worry them. As part of an evaluation, our resident doctor will look into your lifestyle, diet, personal and professional life as well as your medical history and health condition. This process will help us determine the balances of your 'Doshas', the health of your 'Dhatus' (tissues), the strength of your 'Agni' (digestive fire), your 'Ojas' (immunity), and your 'Sattva' (mental harmony).-->
<!--</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-12 col-lg-6 col-12 d-none d-sm-block">-->
<!--                            <div class="category-img">-->
<!--                                <img src="images/ayurveda-spa/1.jpg" alt="" class="img-fluid">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="package">-->
<!--                    <div class="row align-items-center">-->
<!--                        <div class="col-md-12 col-lg-6 col-12">-->
<!--                            <div class="category-img">-->
<!--                                <img src="images/ayurveda-spa/2.jpg" alt="" class="img-fluid">-->
<!--                            </div>-->
<!--                        </div>-->
        
<!--                        <div class="col-md-12 col-lg-6 col-12">-->
<!--                            <div class="category-details">-->
<!--                                <h3>BODY THERAPIES & TREATMENT PLAN</h3>-->
<!--                                <p>In the second phase of your journey to wellness, our doctor prescribes treatments to strengthen your tissues. Here, the doctor with the help of a therapist selects the medications, oils, and substances most suited for your body type. Kuruva Island Resort and Spa menu list the treatments prescribed.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="package">-->
<!--                    <div class="row align-items-center">-->

<!--                        <div class="col-md-12 col-lg-6 col-12 d-block d-sm-none">-->
<!--                            <div class="category-img">-->
<!--                                <img src="images/ayurveda-spa/3.jpg" alt="" class="img-fluid">-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-md-12 col-lg-6 col-12">-->
<!--                            <div class="category-details">-->
<!--                                <h3>AYURVEDIC CUISINE</h3>-->
<!--                                <p>A healthy and balanced diet is considered to be the foundation of health, strength, and happiness for the mind and body. In short, the food you eat has healing powers. We have developed a cuisine prepared according to the principles of Ayurveda, an ancient medical system from India. It is based entirely on the balance of our relationship with the forces of nature. Here, we design your diet based on specific guidelines and the package you choose - origin, timing, quality, combination, quantity, prepara足tion, and your surroundings. Recipes will be taught to you by our chefs so that the Ayurvedic lifestyle can be continued at home as well.-->
<!--</p>-->
<!--                            </div>-->
<!--                        </div>-->
                        
<!--                        <div class="col-md-12 col-lg-6 col-12 d-none d-sm-block">-->
<!--                            <div class="category-img">-->
<!--                                <img src="images/ayurveda-spa/3.jpg" alt="" class="img-fluid">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="package">-->
<!--                    <div class="row align-items-center">-->
<!--                        <div class="col-md-12 col-lg-6 col-12">-->
<!--                            <div class="category-img">-->
<!--                                <img src="images/ayurveda-spa/4.jpg" alt="" class="img-fluid">-->
<!--                            </div>-->
<!--                        </div>-->
        
<!--                        <div class="col-md-12 col-lg-6 col-12">-->
<!--                            <div class="category-details">-->
<!--                                <h3>YOGA & AYURVEDA</h3>-->
<!--                                <p>Ancient Indian texts mention that yoga and Ayurveda are intertwined as fraternal sciences. It says that proper yoga can help improve the physical and mental health of people with all ailments. On the one hand, Ayurveda revives the body while on the other hand, yoga deals with the purification of the mind and consciousness. Thus, they complement and embrace each other. During each asana in yoga, one should try to achieve posture, breathing control, and rest at the same time. The uniqueness of the yoga class足es at the Kuruva Island Resort and Spa is that it goes hand in hand with the principles of Ayurveda to teach you the fundamentals of Pranayama, Asanas, and Savasana.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="package">-->
<!--                    <div class="row align-items-center">-->

<!--                        <div class="col-md-12 col-lg-6 col-sm-6 d-block d-sm-none">-->
<!--                            <div class="category-img">-->
<!--                                <img src="images/ayurveda-spa/5.jpg" alt="" class="img-fluid">-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-md-12 col-lg-6 col-sm-6">-->
<!--                            <div class="category-details">-->
<!--                                <h3>AYURVEDA & THE MIND</h3>-->
<!--                                <p>The prime objective of each ayurvedic package is to bring peace and balance to your mind. According to Ayurvedic and Yogic scriptures, the mind is a subtle energy field and is continuously reacting to the information we receive from our physical senses. The three Gunas - Sattva, Rajas, and Tamas - are the three energies of the mind. Sattva is the energy of harmony and clarity, Rajas is that of move足ment and agitation and Tamas is that of inertia and contradiction. Our goal through Ayurvedic therapies, food, and yoga is to make sattva the predominant guna of your mind. Our friendly staff, organized excursions, open walkways & many hidden nooks around the property makes it the perfect place for you to self-reflect and imbibe positive thinking into a part of your healing journey.-->
<!--                                    </p>-->
<!--                            </div>-->
<!--                        </div>-->
        
<!--                        <div class="col-md-12 col-lg-6 col-sm-6 d-none d-sm-block">-->
<!--                            <div class="category-img">-->
<!--                                <img src="images/ayurveda-spa/5.jpg" alt="" class="img-fluid">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


            
        </div>
    </section>
    
    
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Your Name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="number" class="form-control" placeholder="Mobile Number" id="mobile">
            </div>
          
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn package-btn">Submit</button>
      </div>
    </div>
  </div>
</div>
    
  