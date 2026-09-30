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
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="7" data-background="<?= base_url('assets/')?>img/blogs/bloge-banner.webp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center caption mt-60">
                        <h5>Kuruva Island Resort & Spa</h5>
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-padding">
            <div class="container">
                <div class="row"><div class="col-md-12"></div></div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $items_per_page = 10;
                        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $offset = ($current_page - 1) * $items_per_page;
                        $total_pages = ceil(count($blogs) / $items_per_page);
                        $paged_blogs = array_slice($blogs, $offset, $items_per_page);
                        $k = 1;
                        foreach ($paged_blogs as $blog) {
                        $mod = $k % 2;
                        ?>
                        <div class="chef-recommends-2 mb-90  <?=($mod > 0) ? 'left' : '' ?> animate-box" data-animate-effect="fadeInUp">
                            <figure><img src="https://kuruvaislandresort.com/admin/<?= $blog['image'] ?>" alt="blogs of kuruva island" class="img-fluid" /></figure>
                            <div class="caption">
                                <h4>
                                    <a href="<?=site_url().$blog['perma']?>"><?=strip_tags($blog['title'])?></a>
                                </h4>
                                <p><?=$blog['description']?></p>
                                <hr class="border-2" />
                                <div class="info-wrapper">
                                    <div class="more">
                                        <a href="<?=site_url().$blog['perma']?>" class="link-btn blck" tabindex="0">Read More<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $k++;
                        } ?>
                    </div>
                </div>
            </div>
        </section>
        
        <nav aria-label="Page navigation example" style="display: flex; justify-content: center;">
            <ul class="pagination">
                <li class="page-item <?php echo ($current_page == 1) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo ($current_page - 1); ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <li class="page-item <?php echo ($current_page == $i) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php echo ($current_page == $total_pages) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo ($current_page + 1); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        
    </body>
    
    <style>
        .example{
            display: flex;
            justify-content: center;
            padding-bottom: 30px;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #123d35;
            border-color: #123d35;
        }
        .page-link{
            color: #123d35;
        }
    </style>
        <script src="https://kuruvaislandresort.com/blog/assets/js/jquery-3.6.0.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/modernizr-2.6.2.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/jquery.isotope.v3.0.2.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/pace.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/popper.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/bootstrap.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/scrollIt.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/jquery.waypoints.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/owl.carousel.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/jquery.stellar.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/jquery.magnific-popup.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/YouTubePopUp.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/select2.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/datepicker.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/smooth-scroll.min.js"></script>
        <script src="https://kuruvaislandresort.com/blog/assets/js/custom.js"></script>
</html>
