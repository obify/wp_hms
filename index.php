<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 mt-3">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>
                        <div class="col-md-12 col-sm-12">
							<section class="shadow-sm p-3 mb-5 bg-body rounded">
								<a href="<?php the_permalink();?>" class="image featured">
									<?php the_post_thumbnail('home-featured');?>
								</a>
								<header>
									<h3><?php the_title(); ?></h3>
									<p>Posted on <?php the_date();?> at <?php the_time();?></p>
								</header>
								<?php the_excerpt();?>
								<footer>
									<a href="<?php the_permalink();?>" class="text-uppercase btn btn-primary">
										Get Coupon
									</a>
								</footer>
							</section>
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