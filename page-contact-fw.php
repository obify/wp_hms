<?php
/*
* Template Name: Fullwidth Contact Us
*/
?>

<?php get_header(); ?>

<section>
<div class="section-title mx-auto my-4 text-center text-uppercase">
	<h3>Contact us</h3>
    <h6>You can send your course coupon or any message by filling below form</h6>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?php 
                    echo do_shortcode('[wpforms id="14"]');
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>