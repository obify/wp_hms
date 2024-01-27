<!-- Footer -->
<section id="footer">
	<div class="container-fluid pt-2" style="background-color: #e9eff4;">
		<div class="row">
			<div class="col-md-3 col-sm-12">
				<?php dynamic_sidebar('footer-widget-1');?>
			</div>
			<div class="col-md-3 col-sm-12">
				<?php dynamic_sidebar('footer-widget-2'); ?>
			</div>
			<div class="col-md-3 col-sm-12">
				<?php dynamic_sidebar('footer-widget-3');?>
			</div>
			
		</div>
	</div>
	<footer class="footer" id="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <p class="about">
      <span> About the company</span> Ut congue augue non tellus bibendum, in varius tellus condimentum. In scelerisque nibh tortor, sed rhoncus odio condimentum in. Sed sed est ut sapien ultrices eleifend. Integer tellus est, vehicula eu lectus tincidunt,
      ultricies feugiat leo. Suspendisse tellus elit, pharetra in hendrerit ut, aliquam quis augue. Nam ut nibh mollis, tristique ante sed, viverra massa.
    </p>
    <div class="icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
  </div>
  <div class="footer-center col-md-4 col-sm-6">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span> Sakhipara Main Road, Next Lane to<br/>IPrint Studio, Hanuman Colony</span> Sambalpur, Odisha</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p> <?php echo get_field('top_nav_phone_one') ?>,</p>
      <p> <?php echo get_field('top_nav_phone_two') ?></p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="#"> office@company.com</a></p>
    </div>
  </div>
  <div class="footer-right col-md-4 col-sm-6">
    <h2> KALYANI<span> EYE & RETINA</span> CENTER</h2>
    <p class="menu">
      <a href="#"> Home</a> |
      <a href="#"> About</a> |
      <a href="#"> Services</a> |
      <a href="#"> Portfolio</a> |
      <a href="#"> News</a> |
      <a href="#"> Contact</a>
    </p>
    <p class="name"> Obify Consulting Pvt. Ltd. &copy; 2024</p>
  </div>
</footer>
</section>

	</div>

	<!-- Scripts -->
	<?php wp_footer(); ?>
	
</body>

</html>