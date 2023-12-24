<?php get_header(); ?>

<section id="main">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 col-sm-12">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>
                        <!-- Content -->
                        <article>
                            <a href="<?php the_permalink();?>" class="image featured">
                                <?php the_post_thumbnail('home-featured');?>
                            </a>
                            <header>
                                <h3><?php the_title(); ?></h3>
								<p>Posted on <?php the_date();?> at <?php the_time();?></p>
                                <div class="d-flex justify-content-evenly mb-2">
                                    <div>Rating <span class="text-white badge rounded-pill bg-warning"><?php the_field("rating"); ?></span></div>
                                    <div>Duration <span class="text-white badge rounded-pill bg-primary"><?php the_field("course_duration"); ?></span></div>
                                </div>
                            </header>
                            <img class="mb-2 img-fluid" src="<?php the_field('image_url'); ?>" alt="<?php the_title(); ?>" />
                            <?php the_content(); ?>
                        </article>
                        <div class="d-grid mb-2">
                            <!--<button id="adbutton" onclick="showCoupon()"
                            class="fw-bold text-uppercase btn btn-warning">Get Coupon</button>-->
                            <div id="countdown" class="text-danger fw-2 fs-3 text-center blink_me"></div>
                            <a id="getcoupon" target="_blank" style="display:none;" href="<?php the_field("coupon_url");?>" class="fw-bold text-uppercase btn btn-warning">Get Coupon</a>
                            <script>
                                showCoupon();
                               function showCoupon(){
                                    /*var link = document.createElement("a")
                                    link.href = "//alpidoveon.com/4/5228887"
                                    link.target = "_blank"
                                    link.click()
                                    document.getElementById("adbutton").style.display = "none";*/
                                    var timeleft = 5;
                                    var downloadTimer = setInterval(function(){
                                    if(timeleft <= 0){
                                        clearInterval(downloadTimer);
                                        document.getElementById("countdown").style.display = "none";
                                        document.getElementById("getcoupon").style.display = "block";
                                    } else {
                                        document.getElementById("countdown").innerHTML = "Loading coupon in "+ timeleft +" seconds";
                                    }
                                    timeleft -= 1;
                                    }, 1000);
                                }
                            </script>
                        </div>
                  <?php }
                }
            ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>