<?php
/*
* Template Name: Doctor Template
*/
?>
<?php get_header(); ?>

<section id="main">
<div class="section-title mx-auto my-3 text-center text-uppercase text-muted">
	<h4>Doctor Specialities</h4>
</div>
<div class="container text-center">
	<?php
	// Get the taxonomy's terms
	$terms = get_terms(
		array(
			'taxonomy'   => 'doctortype',
			'hide_empty' => false,
		)
	);
	//print_r($terms);
	// Check if any term exists
	if ( ! empty( $terms ) && is_array( $terms ) ) {
		// Run a loop and print them all
		foreach ( $terms as $term ) { ?>
			<span class="fs-6 m-1 badge rounded-pill bg-primary bg-gradient">
				<a class="text-dark text-decoration-none text-white"
				href="<?php echo esc_url( get_term_link( $term ) ) ?>">
				<?php echo $term->name; ?>
			</a></span><?php
		}
	}
	$categories = get_categories( array(
		'orderby' => 'name',
		'order'   => 'ASC'
	) );
	
	foreach( $categories as $category ) {
		$category_link = sprintf( 
			'<a class="text-dark text-decoration-none" href="%1$s" alt="%2$s">%3$s</a>',
			esc_url( get_category_link( $category->term_id ) ),
			esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			esc_html( $category->name )
		);
		
		echo '<span class="text-white badge rounded-pill bg-warning">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</span> ';
	} 
	
	?>
</div>
<?php wp_reset_postdata(); ?>
<div class="container">
	<div class="col-md-12 col-sm-12 my-4">
		<h4 class="text-center text-uppercase text-muted">Showing all doctors</h4>
	</div>
	<div class="row">
	<?php 
			// set the "paged" parameter (use 'page' if the query is on a static front page)
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
			
			$doctor_arguments = array(
				'nopaging'               => false,
				'paged'                  => $paged,
				'post_type' => 'doctor',
				'posts_per_page' => 2
			);
			$doctors = new WP_Query($doctor_arguments);
			// The Loop
		if ( $doctors->have_posts() ) {
			
			while($doctors -> have_posts()){
				$doctors->the_post();
			
		?>
		
		<div class="col-md-3 col-lg-3 col-sm-12 mb-2">
			<div class="card shadow-sm rounded">
            <?php 
                $imagePhoto = get_field('photo'); 
                $photo = $imagePhoto ? $imagePhoto['url'] : '';

                $term_list = get_the_terms($post->ID, 'doctortype');
                $types ='';
                foreach($term_list as $term_single) {
                    $types .= ucfirst($term_single->name).', ';
                }
                $typesz = rtrim($types, ', ');
            ?>
				
				<div class="card-body">
					<h5 class="card-title"><?php the_title(); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $typesz; ?></h6>
					<a href="<?php the_permalink();?>" class="card-link">View Details</a>
				</div>
			</div>
		</div>
	<?php } ?>
	
	<div class="d-flex justify-content-between">
		<div class="fs-3"><?php previous_posts_link( '« Previous' ); ?></div>
		<div class="fs-3"><?php next_posts_link( 'Next »', $doctors->max_num_pages );?></div>
	</div>
	<?php } else {
		// no posts found
		echo '<h3>No Doctors Found</h3>';
	}
	?>
	</div>
</div>
<?php wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>