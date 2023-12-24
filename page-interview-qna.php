<?php
/*
* Template Name: InterviewQnA Template
*/
?>

<?php get_header(); ?>
<section>
    <!-- Start Latest Coupons -->
    <div class="section-title mx-auto my-4 text-center text-uppercase">
        <h4 class="fw-bold">Interview Questions & Answers</h4>
        <h5>
            <span style="font-size: 16px;" class="px-2 m-1 badge rounded-pill bg-warning">Java</span> 
        </h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-12 mb-2">
        <?php 
                // set the "paged" parameter (use 'page' if the query is on a static front page)
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                
                $coupon_arguments = array(
                    'nopaging'               => false,
                    'paged'                  => $paged,
                    'post_type' => 'question',
                    'posts_per_page' => 8,
                    'tax_query' => array(
                        array(
                         'taxonomy' => 'questiontype',
                         'field' => 'slug',
                         'terms' => 'java'
                        )
                    )
                );
                $coupons = new WP_Query($coupon_arguments);
                // The Loop
            if ( $coupons->have_posts() ) {
                
                while($coupons -> have_posts()){
                    $coupons->the_post();
                
            ?>
            
                <div class="accordion" id="accordionQnAInterview">
                    <div class="card">
                        <div class="card-header" id="heading<?php echo the_ID(); ?>">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php echo the_ID(); ?>">
                                <?php echo the_field("question_text"); ?>
                            </button>
                        </h2>
                        </div>

                        <div id="collapse<?php echo the_ID(); ?>" class="collapse show" aria-labelledby="heading<?php echo the_ID(); ?>" data-parent="#accordionQnAInterview">
                        <div class="card-body">
                            <?php echo the_field("answer"); ?>
                        </div>
                        </div>
                    </div>
                </div>
           
            <?php } ?>
            
            <div class="d-flex justify-content-between">
                <div class="fs-3" style="font-size: 20px;"><?php previous_posts_link( '« Previous' ); ?></div>
                <div class="fs-3" style="font-size: 20px;"><?php next_posts_link( 'Next »', $coupons->max_num_pages );?></div>
            </div>
            <?php } else {
                // no posts found
                echo '<h3>No Question Found</h3>';
            }
            ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <div class="col-md-3 col-lg-3 col-sm-12 mb-2">
                <?php
            // Get the taxonomy's terms
            $terms = get_terms(
                array(
                    'taxonomy'   => 'questiontype',
                    'hide_empty' => false,
                )
            );
            //print_r($terms);
            // Check if any term exists
            if ( ! empty( $terms ) && is_array( $terms ) ) {
                // Run a loop and print them all
                foreach ( $terms as $term ) { ?>
                    <span style="font-size: 16px;" class="px-2 m-1 text-white badge rounded-pill bg-warning">
                        <a class="text-dark text-decoration-none"
                        href="<?php echo esc_url( get_term_link( $term ) ) ?>">
                        <?php echo $term->name; ?>
                    </a></span><?php
                }
            }?>
        </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<?php get_footer(); ?>