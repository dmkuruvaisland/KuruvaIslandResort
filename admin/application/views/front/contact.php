

  <!-- Start Contact -->
  <section class="section section3" id="contact" style="padding-bottom: 50px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="section-title text-center mb-4 pb-2">
            <h4 class="title mb-3">Get In Touch !</h4>
            <!-- <p class="text-muted para-desc mb-0 mx-auto">Launch your campaign and benefit from our expertise
                        on designing and managing conversion centered bootstrap v5 html page.</p> -->
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->

      <div class="row align-items-center">
        <div class="col-lg-8 col-md-6 order-md-2 order-1 mt-4 pt-2">
          <div class="p-4 rounded shadow bg-white">
            <form method="post" id="contact-form" action="<?=base_url('contact_message');?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-4">
                    <input name="name" id="name" type="text" class="form-control" placeholder="First Name :">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <input name="lname" id="lname" type="text" class="form-control" placeholder="Last Name :">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-4">
                    <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <input name="mobile" id="mobile" type="number" class="form-control" placeholder="Mobile Number :">
                  </div>
                </div>
                <!--end col-->

                <div class="col-12">
                  <div class="mb-4">
                    <textarea name="message" id="message" rows="4" class="form-control"
                      placeholder="Address :"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 text-end">
                  <button type="submit" id="submit" name="send" class="border-0 main-btn">Submit</button>
                </div>
                <!--end col-->
              </div>
              <!--end row-->
            </form>
          </div>
        </div>
        <!--end col-->

        <div class="col-lg-4 col-md-6 col-12 order-md-1 order-2 mt-4 pt-2">
          <div class="me-lg-4">
            <div class="d-flex">
              <div class="icons text-center mx-auto">
                <i class="fas fa-phone-alt mb-0"></i>
              </div>

              <div class="flex-1 ms-3">
                <h5 class="mb-2">Phone</h5>
                <a href="tel:+919562205599" class="text-muted">Reservation: +91 9562205599</a>
              
                <a href="tel:+919562185599" class="text-muted">Reception: +91 9562185599</a>
              </div>
            </div>

            <div class="d-flex mt-4">
              <div class="icons text-center mx-auto">
                <i class="fas fa-envelope mb-0"></i>
              </div>

              <div class="flex-1 ms-3">
                <h5 class="mb-2">Email</h5>
                <a href="mailto:info@kuruvaislandresort.com" class="text-muted">info@kuruvaislandresort.com</a>
              </div>
            </div>

            <div class="d-flex mt-4">
              <div class="icons text-center mx-auto">
                <i class="fas fa-location-dot mb-0"></i>
              </div>

              <div class="flex-1 ms-3">
                <h5 class="mb-2">Address</h5>
                <p class="text-muted mb-2">Kuruva Island Resort and Spa , Palvelicham , Bavali Post<br>
                  Mananthavadi,<br> Wayanad, Kerala</p>
              </div>
            </div>
          </div>
        </div>
        <!--end col-->
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </section>
  <!--end section-->
  <!-- End Contact -->

  <!-- map -->
  <section style="padding-bottom: 30px;" class="container mt-0 mb-4">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3905.0749548354097!2d76.08560901459956!3d11.830024191611933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba5e76aa3f69d57%3A0x53df36e7091cfc89!2sKuruva%20Island%20Resort!5e0!3m2!1sen!2sin!4v1649911734832!5m2!1sen!2sin"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>


  <section class="subscribe-email">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-2">
            <h3 class="title mb-3">Subscribe Now</h3>
          </div>
        </div>
      </div>

      <div class="row justify-content-center align-items-center">
        <div class="text-center subcribe-form mt-4 pt-2">
          <form method="post" id="contact-form" action="<?=base_url('subscription');?>">
            <input type="email" id="email" name="email" class="border bg-white rounded-lg" style="opacity: 0.85;" required
              placeholder="Enter your email address">
            <button type="submit" class="btn btn-pills main-btn">Subscribe Now</button>
          </form>
          <!--end form-->
        </div>
      </div>
    </div>
  </section>
