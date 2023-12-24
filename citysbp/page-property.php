<?php
/*
* Template Name: Property Template
*/
?>
<?php get_header(); ?>

<section id="main">
<!-- Property start -->
<div class="section-title mx-auto my-3 text-center text-uppercase text-muted">
	<h4>Property Types</h4>
</div>
<div class="container text-center">
	<?php
	// Get the taxonomy's terms
	$terms = get_terms(
		array(
			'taxonomy'   => 'optiontype',
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
<!-- Option End-->
<?php wp_reset_postdata(); ?>
<!-- Property start -->
<div class="container text-center mt-2">
	<?php
	// Get the taxonomy's terms
	$terms = get_terms(
		array(
			'taxonomy'   => 'propertytype',
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
<div class="section-title mx-auto my-3 text-center text-uppercase text-muted">
	<h4>localities</h4>
</div>
<div class="container text-center mt-2">
	<?php
	// Get the taxonomy's terms
	$terms = get_terms(
		array(
			'taxonomy'   => 'locality',
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
<!-- End Course Categories -->
<!-- Start Latest Coupons -->
<div class="section-title mx-auto my-4 text-center text-uppercase text-muted">
	<h4>Showing all Properties</h4>
</div>
<div class="container">
	<div class="row">
	<?php 
			// set the "paged" parameter (use 'page' if the query is on a static front page)
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
			
			$property_arguments = array(
				'nopaging'               => false,
				'paged'                  => $paged,
				'post_type' => 'property',
				'posts_per_page' => 1
			);
			$properties = new WP_Query($property_arguments);
			// The Loop
		if ( $properties->have_posts() ) {
			
			while($properties -> have_posts()){
				$properties->the_post();
			
		?>
		
		<div class="col-md-3 col-lg-3 col-sm-12 mb-2">
			<div class="card shadow-sm rounded">
            <?php 

                $term_list = get_the_terms($post->ID, 'propertytype');
                $types ='';
                foreach($term_list as $term_single) {
                    $types .= ucfirst($term_single->name).', ';
                }
                $typesz = rtrim($types, ', ');

				$term_list_option = get_the_terms($post->ID, 'optiontype');
                $types_option ='';
                foreach($term_list_option as $term_single) {
                    $types_option .= ucfirst($term_single->name).', ';
                }
                $typesz_option = rtrim($types_option, ', ');
            ?>
				
				<div class="card-body">
					<h5 class="card-title"><?php the_title(); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $typesz; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $typesz_option; ?></h6>
					<a href="<?php the_permalink();?>" class="card-link">View Details</a>
				</div>
			</div>
		</div>
	<?php } ?>
	
	<div class="d-flex justify-content-between">
		<div class="fs-3"><?php previous_posts_link( '« Previous' ); ?></div>
		<div class="fs-3"><?php next_posts_link( 'Next »', $properties->max_num_pages );?></div>
	</div>
	<?php } else {
		// no posts found
		echo '<h3>No Properties Found</h3>';
	}
	?>
	</div>
</div>

<!-- Property end -->
<?php wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>