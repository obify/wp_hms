<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="row">
			<div class="col-md-12 col-sm-12 my-4">		
				<?php $term = get_queried_object();  ?>
					<h4 class="text-center text-uppercase text-muted">Showing all 
						<span class="text-primary"><?php echo $term->name; ?></span> doctors</h4>
			</div>
            <div class="col-md-12 col-sm-12 ">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>
                        <div class="col-md-12 col-sm-12">
							<section class="shadow-sm p-3 mb-3 bg-body rounded">
								<a href="<?php the_permalink();?>" class="image featured">
									<?php the_post_thumbnail('home-featured');?>
								</a>
								<?php $term_list = get_the_terms($post->ID, 'doctortype');
								$types ='';
								foreach($term_list as $term_single) {
									$types .= ucfirst($term_single->slug).', ';
								}
								$typesz = rtrim($types, ', ');
								?>
								<header>
									<h3><?php the_title(); ?></h3>
									<h6 class="text-muted">Specialization: <?php echo $typesz; ?></h6>
								</header>
								<footer>
									<a href="<?php the_permalink();?>" class="text-uppercase btn btn-primary text-white fw-bold">
										View Details
									</a>
								</footer>
							</section>
						</div>
                  <?php }
                }else{
					echo "<b>No results found</b>";
				}
            ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>