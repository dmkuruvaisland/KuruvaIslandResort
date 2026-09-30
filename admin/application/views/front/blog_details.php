    <style>
        .blog-title h3 p{
            font-size:25px;
            line-height:1.2;
        }
    </style>


  <section class="section3 blog-single-wrapper">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9">
          <div class="blog-title mb-3">
            <h3>
                <div style="font-size:54px !important;">
                <?=$blog_details[0]['title'];?>
            </div>
            </h3>
          </div>
          <!-- <hr> -->
          <!-- <div class="blog-details">
            <div class="author">
              <i class="fas fa-user"></i>
              <h6>John</h6>
            </div>
            <div class="date">
              <i class="fas fa-calendar"></i>
              <h6>September 16 2022</h6>
            </div>
            <div class="time">
              <i class="fas fa-clock"></i>
              <h6>5:29 PM</h6>
            </div>
            <div class="comments">
              <i class="fas fa-comment"></i>
              <h6>3 Comments</h6>
            </div>
          </div> -->
          <!-- <hr> -->


          <?=$blog_details[0]['description'];?>
          
          <img src="<?=base_url($blog_details[0]['image']);?>" class="img-fluid mb-3" alt="">
          
           <?=$blog_details[0]['content'];?>
           
          <div class="social-media">
            <a href="#"> <img src="<?=base_url();?>images/facebook.png" class="img-fluid" alt=""></a>
            <a href="#"><img src="<?=base_url();?>images/instagram.png" class="img-fluid" alt=""></a>
          </div>


          <div class="comment-section">
            <div class="title">
              <h6 class="mb-3">Leave A Comment</h6>
            </div>
            <textarea name="comment" id="" class="form-control" cols="100" rows="5"></textarea>

            <input type="text" name="name" placeholder="name" class="form-control" id="">
            <input type="email" name="name" placeholder="email" class="form-control" id="">
            <button class="main-btn border-0" type="submit">Post Comment</button>
          </div>

        </div>
      </div>






    </div>
  </section>
