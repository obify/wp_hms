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
                            <img class="mb-2" src="<?php the_field('image_url'); ?>" alt="<?php the_title(); ?>" />
                            <?php the_content(); ?>
                        </article>
                        <div class="d-grid">
                            <a href="<?php the_field("coupon_url");?>" class="fw-bold text-uppercase btn btn-warning">Get Coupon</a>
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