<?php
/*
* Template Name: Appointment Template
*/
?>

<?php get_header(); ?>

<section>
<div class="section-title mx-auto my-4 text-center text-uppercase">
	<h3>Appointment</h3>
    <h6>Book your appointment by filling below form</h6>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?php 
                    echo do_shortcode('[contact-form-7 id="1959273" title="Contact form 1"]');
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>