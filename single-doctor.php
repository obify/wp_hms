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
                        <article class="mb-2">
                            
                            <?php
 
                               $description = get_post_meta( get_the_ID(), 'description', true);
                               $address = get_post_meta( get_the_ID(), 'address', true);
                               
                               $contact_number = get_post_meta( get_the_ID(), 'contact_number', true);
                               $contact_number2 = get_post_meta( get_the_ID(), 'contact_number_2', true);
                               $contact_email = get_post_meta( get_the_ID(), 'contact_email', true);

                               $timings = get_post_meta( get_the_ID(), 'timings', true);
                               $photo = get_post_meta( get_the_ID(), 'photo', true);

                               $image_attributes = wp_get_attachment_image_src( $photo );

                               $terms = get_the_terms( $post->ID, 'doctortype' );
                               $types ='';
                                foreach($terms as $term_single) {
                                    $types .= ucfirst($term_single->slug).', ';
                                }
                                $typesz = rtrim($types, ', ');
                            ?>
                            <div class="card">
                                <div class="card-header fw-bold bg-primary text-white">
                                    <?php the_title(); ?>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Description</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo $description; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Specialization</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo $typesz; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Address</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo $address; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Contact Number</div>
                                            <div class="col-md-6 col-sm-12 text-muted">
                                            <?php echo $contact_number; ?>&nbsp;
                                            <a href="tel:<?php echo $contact_number; ?>" class="fw-bold text-uppercase text-success fw-bold">
                                             <i class="fas fa-phone"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php if ( get_post_meta( get_the_ID(), 'contact_number2', true ) ) : ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Alternate Number</div>
                                                <div class="col-md-6 col-sm-12 text-muted">
                                                <?php echo $contact_number2; ?>&nbsp;
                                                <a href="tel:<?php echo $contact_number2; ?>" class="fw-bold text-uppercase text-success fw-bold">
                                                <i class="fas fa-phone"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'contact_email', true ) ) : ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Email</div>
                                                <div class="col-md-6 col-sm-12 text-muted"><?php echo $contact_email; ?></div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Visiting Time</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo $timings; ?></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </article>
                  <?php }
                }
            ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <img class="img-fluid" src="<?php echo $image_attributes[0]; ?>">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>