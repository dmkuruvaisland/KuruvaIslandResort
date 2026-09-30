<style>
    .title h3 p{
        font-size:25px;
        line-height:1.2;
    }
</style>



  <section class="section3 blog-wrapper">
    <div class="container">
        
        <?php
        foreach($blogs as $bl)
        {
        ?>
      <div class="row mb-5">
        <div class="col-lg-6 mb-3">
          <div class="blog-main-img">
            <img style="border-radius:20px;" src="<?=base_url($bl['image']);?>" class="img-fluid" alt="">
          </div>
        </div>
    
        <div class="col-lg-6">
          <!-- <div class="category-title">
            <h5>CATEGORY</h5>
          </div> -->
          <div class="title">
            <h3 class="mb-3"><?=$bl['title'];?></h3>
          </div>

          <!-- <div class="author-details">
            <div class="img">
              <img src="images/img.jpg" class="img-fluid" alt="">
            </div>
            <div class="details">
              <h6>Name</h6>
              <span>Designation</span>
            </div>
          </div> -->
          <div class="blog-content">
            <?=$bl['description'];?>
            <a href="<?=base_url();?>blog_details/<?=$bl['perma'];?>" class="main-btn">Read More</a>
          </div>
        </div>
      </div>
          <?php
        }
        ?>

      <!-- <div class="latest-blog">
        <div class="row">
          <div class="col-sm-12 section-title">
            <h3>Latest Blog</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card" >
              <img src="images/img.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, natus</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis tenetur dicta
                  deleniti odio assumenda similique, illum illo distinctio rerum repellat!</p>
                <a href="blog-single.php" class="main-btn">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <img src="images/img.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, natus</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis tenetur dicta
                  deleniti odio assumenda similique, illum illo distinctio rerum repellat!</p>
                <a href="blog-single.php" class="main-btn">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <img src="images/img.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, natus</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis tenetur dicta
                  deleniti odio assumenda similique, illum illo distinctio rerum repellat!</p>
                <a href="blog-single.php" class="main-btn">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
