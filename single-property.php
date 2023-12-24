<?php get_header(); ?>

<section id="main">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>
                        <!-- Content -->
                        <article class="mb-2">
                            
                            <?php
 
                               $property_type = get_post_meta( get_the_ID(), 'property_type', true);
                               $property_option = get_post_meta( get_the_ID(), 'property_option', true);
                               
                               $property_title = get_post_meta( get_the_ID(), 'property_title', true);
                               $property_description = get_post_meta( get_the_ID(), 'property_description', true);
                               $property_address = get_post_meta( get_the_ID(), 'property_address', true);

                               $property_num_1 = get_post_meta( get_the_ID(), 'contact_number', true);
                               $property_num_2 = get_post_meta( get_the_ID(), 'alternate_contact_number', true);
                               $property_email = get_post_meta( get_the_ID(), 'contact_email', true);
                               $property_available_from = get_post_meta( get_the_ID(), 'available_from', true);

                               $property_pincode = get_post_meta( get_the_ID(), 'property_pincode', true);
                               $property_image_1 = get_post_meta( get_the_ID(), 'property_image_1', true);
                               $image_attributes1 = wp_get_attachment_image_src( $property_image_1 );
                               $property_image_2 = get_post_meta( get_the_ID(), 'property_image_2', true);
                               $image_attributes2 = wp_get_attachment_image_src( $property_image_2 );
                               $property_image_3 = get_post_meta( get_the_ID(), 'property_image_3', true);
                               $image_attributes3 = wp_get_attachment_image_src( $property_image_3 );
                               $property_youtube_video = get_post_meta( get_the_ID(), 'property_youtube_video_url', true);

                               $image_attributes = wp_get_attachment_image_src( $photo );
                            ?>
                            <div class="card">
                                <div class="card-header fw-bold bg-primary text-white">
                                    <?php the_title(); ?>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Title</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo $property_title; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Description</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo $property_description; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Type</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo get_term($property_type)->name; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">For</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo get_term($property_option)->name; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Available From</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo $property_available_from; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Address</div>
                                            <div class="col-md-6 col-sm-12 text-muted"><?php echo $property_address; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Contact Number</div>
                                            <div class="col-md-6 col-sm-12 text-muted">
                                            <?php echo $property_num_1; ?>&nbsp;
                                            <a href="tel:<?php echo $property_num_1; ?>" class="fw-bold text-uppercase text-success fw-bold">
                                             <i class="fas fa-phone"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php if ( get_post_meta( get_the_ID(), 'alternate_contact_number', true ) ) : ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Alternate Number</div>
                                                <div class="col-md-6 col-sm-12 text-muted">
                                                <?php echo $property_num_2; ?>&nbsp;
                                                <a href="tel:<?php echo $property_num_2; ?>" class="fw-bold text-uppercase text-success fw-bold">
                                                <i class="fas fa-phone"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'contact_email', true ) ) : ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Email</div>
                                                <div class="col-md-6 col-sm-12 text-muted"><?php echo $property_email; ?></div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'property_youtube_video_url', true ) ) : ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 text-muted text-uppercase fw-bold">Youtube video</div>
                                                <div class="col-md-6 col-sm-12 text-muted">
                                                    <a target="_blank" href="<?php echo $property_youtube_video; ?>" class="text-danger fw-bold">
                                                    <i class="fab fa-youtube fs-4"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        </article>
                        
                  <?php }
                }
            ?>
            </div>
            <div class="col-md-12 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img style="height:65vh" src="<?php echo $image_attributes1[0]; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img style="height:65vh" src="<?php echo $image_attributes2[0]; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img style="height:65vh" src="<?php echo $image_attributes3[0]; ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
            </div>
    </div>
</section>

<?php get_footer(); ?>