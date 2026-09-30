
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
    padding: 60px 0;
}
.package{
    padding: 50px 0;
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
        
        background-image: url(/images/mobile-bg.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: auto !important;
        width: 100%;
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
    font-size: 20px;
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
    background-image: url(/images/Leaf.png);
    background-size: cover;
    background-position: center;
    
}
.package-details{
    padding:150px 0;
}
.package-details h6{
    font-size: 25px;
    font-weight: 600;
    margin:15px 0px !important;
}
.package-details ul li{
    line-height: 2;
    /* list-style: none; */
    padding: 0px !important;
    margin-top:5px !important;
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
            font-size: 40px;
            position: fixed;
            bottom:40px;
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
    </style>
    
    <section class="package-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="heading mb-3">7 DAY AYURVEDIC HOLISTIC TREATMENT PACKAGE</h3>
            <!--<p>Take a 7-day ayurvedic holistic treatment at our Sanskriti Spa which offers ayurvedic treatments in an authentic holistic environment to give a fresh impetus to your health. Thus, choose one of the best Ayurvedic packages in Kerala for your health. Because it's a matter of your health!</p>-->

            <p>Give a fresh impetus to your wellness journey with the 7-day ayurvedic holistic treatment at our Sanskriti Spa. This ayurvedic package is aimed at helping you improve your physical, mental, emotional, and social well-being. We take it up as our mission to help our guests to find peace and happiness through the goodness of Ayurveda.
                </p>
              
            <img src="images/ayurveda-spa/ayurveda-spa.jpg" class="img-fluid mb-4" alt="">
            
              <p>Have a look at the treatment plan,</p>
              
            <h6>Day 1</h6>
            <ul>
                <li> Rest in the cottage to shed out travel fatigue</li>
                <li> Start your day with yoga and guided meditation for confidence</li>
                <li> A holistic assessment of your health by our resident doctor.</li>
                <li> Remove the stress with full body massage</li>
                <!--<li> Time for some tea and traditional snacks</li>-->
                <li> Enjoy ayurvedic cuisine that follows 8 guidelines.</li>
                <li> Resort activities, explore, relax and enjoy the company of your loved ones.</li>
            </ul>

            <h6>Day 2</h6>
            <ul>
                <li> Start your day with yoga and guided meditation for confidence..</li>
                <li> Remove the stress with full body massage</li>
                <li> Time for tea and refreshments</li>
                <li> Enjoy ayurvedic cuisine that follows 8 guidelines.</li>
                <li> Resort activities, explore, relax and enjoy the company of your loved ones.</li>
            </ul>

            <h6>Day 3</h6>
            <ul>
                <li> Start your day with yoga and guided meditation for confidence.</li>
                <li> Remove the stress with full body massage</li>
                <li> Time for tea and refreshments</li>
                <li> Enjoy ayurvedic cuisine that follows 8 guidelines.</li>
                <li> Resort activities, explore, relax and enjoy the company of your loved ones.</li>
            </ul>

            <h6>Day 4</h6>
            <ul>
                <li> Start your day with yoga and guided meditation for confidence.</li>
                <!--<li> Enjoy tea with local snacks from Kerala.</li>-->
                <li> Ayurvedic Shirodhara and Kizhi for deep healing.</li>
                <li> Enjoy ayurvedic cuisine that follows 8 guidelines.</li>
            </ul>

            <h6>Day 5</h6>
            <ul>
                <li> Start your day with yoga and guided meditation for confidence.</li>
                <!--<li> Enjoy tea with local snacks from Kerala.</li>-->
                <li> Ayurvedic Shirodhara and Kizhi for deep healing.</li>
                <li> Enjoy ayurvedic cuisine that follows 8 guidelines.</li>
            </ul>

            <h6>Day 6</h6>
            <ul>
                <li> Start your day with yoga and guided meditation for confidence.</li>
                <!--<li> Enjoy tea with local snacks from Kerala.</li>-->
                <li> Ayurvedic Shirodhara and Kizhi for deep healing.</li>
                <li> Enjoy ayurvedic cuisine that follows 8 guidelines.</li>
            </ul>

            <h6>Day 7</h6>
            <ul>
                <li> Start your day with yoga and guided meditation for confidence.</li>
                <!--<li> Enjoy tea with local snacks from Kerala.</li>-->
                <li> Ayurvedic Shirodhara and Kizhi for deep healing.</li>
                <li> Enjoy ayurvedic cuisine that follows 8 guidelines.</li>
            </ul>

                </div>
            </div>

        </div>
    </section>

