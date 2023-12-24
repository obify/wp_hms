<?php
/*
* Template Name: Promotion Template
*/
?>

<?php get_header(); ?>
<section>
<div id="carouselPromotionCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselPromotionCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselPromotionCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselPromotionCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <?php 
        $image1 = get_field('slider_one_img'); 
        $image2 = get_field('slider_two_img');
        $image3 = get_field('slider_three_img');
        ?>
        <?php if( !empty( $image1 ) ): endif; ?>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo esc_url($image1['url']); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5><?php echo the_field('slider_one_title'); ?></h5>
            <p><?php echo the_field('slider_one_subtitle'); ?></p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?php echo esc_url($image2['url']); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5><?php echo the_field('slider_two_title'); ?></h5>
            <p><?php echo the_field('slider_two_subtitle'); ?></p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?php echo esc_url($image3['url']); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5><?php echo the_field('slider_three_title'); ?></h5>
            <p><?php echo the_field('slider_three_subtitle'); ?></p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromotionCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselPromotionCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>
<section>
    <!-- Start Latest Coupons -->
    <div class="section-title mx-auto my-4 text-center text-uppercase">
        <h3>Latest Offers</h3>
    </div>
    <div class="container">
        <div class="row">
        <?php 
                // set the "paged" parameter (use 'page' if the query is on a static front page)
                $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : '1';
                
                $coupon_arguments = array(
                    'nopaging'               => false,
                    'paged'                  => $paged,
                    'post_type' => 'offer',
                    'posts_per_page' => 16
                );
                $coupons = new WP_Query($coupon_arguments);
                // The Loop
            if ( $coupons->have_posts() ) {
                
                while($coupons -> have_posts()){
                    $coupons->the_post();
                
            ?>
            
            <div class="col-md-3 col-lg-3 col-sm-12 mb-2">
                <div class="card">
                    <img src="<?php the_field('course_image_url'); ?>" class="card-img-top" alt="...">
                    <div class="card-top-right badge rounded-pill bg-danger fs-5">
                        <?php the_field('percent_discount'); ?>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_title(); ?></h6>
                        <h5 class="card-subtitle my-2">
                            On checkout page apply coupon
                            <span class="text-danger"><?php the_field('coupon_code'); ?></span>
                        </h5>
                        <div class="d-grid">
                            <a target="_blank" href="<?php the_field('course_url');?>" class="fw-bold text-uppercase btn btn-primary">Get Coupon</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        
        <div class="d-flex justify-content-between">
            <div class="fs-3"><?php previous_posts_link( '« Previous' ); ?></div>
            <div class="fs-3"><?php next_posts_link( 'Next »', $coupons->max_num_pages );?></div>
        </div>
        <?php } else {
            // no posts found
            echo '<h3>No Coupons Found</h3>';
        }
        ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>