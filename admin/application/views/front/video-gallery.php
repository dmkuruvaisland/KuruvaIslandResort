

  <section class="section3 video-gallery">

    <div class="container">
      <div class="row">
          
          <?php
        //   echo json_encode($list_all);
          
          foreach($list_all as $i)
          {
          ?>
        <div class="col-lg-4 col-md-6 col-12 mb-4">
          <iframe width="100%" height="275" src="https://www.youtube.com/embed/<?=$i['video'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
         <?php
          }
        ?>

        
      </div>
    </div>

  </section>

