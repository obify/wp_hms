<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&family=Roboto:wght@100&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class('homepage is-preload');?> style="background-color: #fff;">
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header">

			<!-- Logo -->
			<?php /*the_custom_logo();*/?>
			<?php 
				$site_title = get_bloginfo( 'name' );
				$site_url = network_site_url( '/' );
				$site_description = get_bloginfo( 'description' );
			?>
			<small><?php /*echo $site_description;*/ ?></small>

			<!-- Contact -->
			<div class="topContact d-flex justify-content-between align-items-center" style="box-shadow: 0px 1px 5px 0px #e6eeff;">
				<div class="contacts">
					<h6 style="font-size: 15px;" id="emailTxt">
					<?php if(get_field('top_nav_email')){ ?>
						<svg style="color: blue;" width="15px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" dataSlot="icon">
						<path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
						</svg>
					<?php }?>
					<?php echo get_field('top_nav_email') ?></h6>
					<h6 style="font-size: 15px;">
					<?php if(get_field('top_nav_phone_one')){ ?>
					<svg style="color: blue;" width="15px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" dataSlot="icon">
					<path strokeLinecap="round" strokeLinejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
					</svg>
					<?php }?>
					<?php echo get_field('top_nav_phone_one') ?></h6>
				</div>
				<div class="socialIcons">
					<p><i class="fa-brands fa-x-twitter"></i></p>
					<p><i class="fa-brands fa-facebook"></i></i></p>
					<p><i class="fa-brands fa-instagram"></i></i></p>
				</div>
			</div>
			<!-- Contact -->

			<!-- Nav -->
			<nav class="navbar navbar-expand-md" style="background-color: #fff;">
				<div class="container-fluid">
					<a style="color: #2c4964; font-weight: 700; font-size: 30px;" class="navbar-brand text-uppercase" href="<?php echo $site_url; ?>"><?php echo $site_title;?></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="fw-bold collapse navbar-collapse text-uppercase" id="main-menu">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
						?>
						
					</div>
				</div>
			</nav>
		</section>