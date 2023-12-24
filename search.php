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
                }
            ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>