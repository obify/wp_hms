<?php
/*
* Template Name: Doctor Template
*/
?>

<?php get_header();?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background: url(<?php echo get_field('hero_image'); ?>) top center;">
    <div class="container">
      <h1>Welcome to Kalyani<br/>Eye & Retina Centre</h1>
      <h2>Where expertise meets compassion,</br>restoring and preserving your precious vision.</h2>
      <a href="#footer" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
          <h3>Why Choose Kalyani?</h3>
          <p>
            Experience unrivaled care with advanced technology, skilled specialists, and personalized attention. Our commitment to innovation and compassionate service ensures optimal eye and retina care, fostering trust and well-being for every patient.
          </p>
          <div class="text-center">
            <a href="#footer" class="more-btn">Contact <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Retina Surgery & Injections</h4>
                    <p>Precision in retina surgery enhances vision. Injections aid healing, ensuring optimal eye health and function.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Cateract by PHACO Surgery (No Ingection)</h4>
                    <p>PHACO surgery for cataracts offers clarity without injections, advancing eye care with minimally invasive techniques and precision.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Eye Related Plactic Surgery</h4>
                    <p>Eye-related plastic surgery rejuvenates appearance, addressing cosmetic concerns while prioritizing safety and optimal vision outcomes for patients.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
    </div>
  </div>
</section>
<!-- End Why Us Section -->
     
<!-- Credit: Componentity.com -->
<!-- <a href="https://componentity.com" target="_blank" class="block">
  <img src="http://codenawis.com/componentity/wp-content/uploads/2020/08/logo-componentity-%E2%80%93-9.png" width="120px" class="d-block mx-auto my-5">
</a> -->

<!-- COUNTS START -->
<div class="mt-5 countMainContainer">
		<div class="row text-center">
	        <div class="col">
	        <div class="counter">
          <i class="fa-solid fa-user-doctor fa-2xl" style="color: #1977cc;"></i>
      <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
       <p class="count-text ">Doctors</p>
    </div>
	        </div>
              <div class="col">
               <div class="counter">
               <i class="fa-solid fa-hospital fa-2xl" style="color: #1977cc;"></i>
      <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
      <p class="count-text ">Departments</p>
    </div>
              </div>
              <div class="col">
                  <div class="counter">
                  <i class="fa-solid fa-flask fa-2xl" style="color: #1977cc;"></i>
      <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
      <p class="count-text ">Research Labs</p>
    </div></div>
              <div class="col">
              <div class="counter">
              <i class="fa-solid fa-award fa-2xl" style="color: #1977cc;"></i>
      <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
      <p class="count-text">Awards</p>
    </div>
              </div>
         </div>
</div>

<script>
    (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>
<!-- COUNTS END -->

<!-- SERVICES START -->
<div class="serviceContainer text-center mt-5">
    <h3>Our Services</h3>
    <p class="container">Discover unparalleled eye care services at our center, offering cutting-edge diagnostics like Optical Coherence Tomography, precise measurements with Optical Biometry and Pachymetry, transformative treatments such as YAG Laser, and specialized care for glaucoma, diabetes retinopathy, occuloplasty, and squint correction. Elevate your vision with our expert team and diverse optical collection, ensuring clear sight and stylish choices for every patient.</p>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://plus.unsplash.com/premium_photo-1661302956617-b40b5d2bf19d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Revolutionizing Vision</h5>
                    <p class="card-text">Modern Cataract Surgery through Phaco Emulsification</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5765829/pexels-photo-5765829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Precision in Sight</h5>
                  <p class="card-text">Computerized Eye Testing for Accurate Vision Assessment</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Clarity Unveiled</h5>
                  <p class="card-text">Optical Coherence Tomography for Detailed Eye Imaging</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5715882/pexels-photo-5715882.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Precision Measurements</h5>
                  <p class="card-text">Optical Biometry and Pachymetry for Comprehensive Eye Assessment</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5654750/pexels-photo-5654750.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Visual Insight</h5>
                  <p class="card-text">Explore Your Vision with Advanced Field Analyzer Technology</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Laser Precision</h5>
                  <p class="card-text">Transformative Eye Care with YAG Laser Technology</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Laser Precision</h5>
                  <p class="card-text">Transformative Eye Care with YAG Laser Technology</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- SERVICES END -->

<!-- DEVICES END -->
<h3 class="galleryTitle">Our Devices</h3>
<div id="devices" class="container-fluid container mb-3">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d1.jpeg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d2.jpeg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d3.jpeg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d4.jpeg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d5.jpeg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d6.jpeg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d7.jpeg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d8.jpeg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/devices/d9.jpeg"; ?>" class="img-responsive">
</div>
<!-- DEVICES END -->

<!-- Gallery Start -->
<h3 class="galleryTitle">Gallery</h3>
<div id="gallery" class="container-fluid">  
  <img src="<?php echo get_template_directory_uri()."/images/img/hospital.jpg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/inside.jpg"; ?>" class="img-responsive">
   <img src="<?php echo get_template_directory_uri()."/images/img/1.jpg"; ?>" class="img-responsive">
  <!-- <video class="vid" controls>
    <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
    </source>
  </video> -->
  <img src="<?php echo get_template_directory_uri()."/images/img/2.jpg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/3.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/4.jpg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/5.jpg"; ?>" class="card img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/6.jpg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/7.jpg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/8.jpg"; ?>" class="img-responsive">
  <img src="<?php echo get_template_directory_uri()."/images/img/9.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/10.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/11.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/12.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/13.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/14.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/15.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/16.jpg"; ?>" class="img-responsive">
<img src="<?php echo get_template_directory_uri()."/images/img/17.jpg"; ?>" class="img-responsive">

</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      </div>
    </div>

  </div>
</div>
<!-- Gallery END -->

<!-- <div class="container my-3">
  <h3 id="heading" class="text-center py-2">Heading</h3>
  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body"><strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        <div class="imageCarousel">
          <img src="<?php echo get_template_directory_uri()."/images/img/hospital.jpg"; ?>" class="img-responsive">
          <img src="<?php echo get_template_directory_uri()."/images/img/inside.jpg"; ?>" class="img-responsive">
          <img src="<?php echo get_template_directory_uri()."/images/img/3.jpg"; ?>" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        <div class="imageCarousel">
          <img src="<?php echo get_template_directory_uri()."/images/img/hospital.jpg"; ?>" class="img-responsive">
          <img src="<?php echo get_template_directory_uri()."/images/img/inside.jpg"; ?>" class="img-responsive">
          <img src="<?php echo get_template_directory_uri()."/images/img/3.jpg"; ?>" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        <div class="imageCarousel">
          <img src="<?php echo get_template_directory_uri()."/images/img/hospital.jpg"; ?>" class="img-responsive">
          <img src="<?php echo get_template_directory_uri()."/images/img/inside.jpg"; ?>" class="img-responsive">
          <img src="<?php echo get_template_directory_uri()."/images/img/3.jpg"; ?>" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- APPOINTMENT START -->
<div class="mt-5 makeApointment">
  <div class="container">
  <h3 class="text-center">Make an Appointment</h3>
  <p class="text-center">Secure your path to optimal eye health. Schedule an appointment with us today for personalized, expert care, advanced diagnostics, and a commitment to preserving and enhancing your vision. Your journey to clear and healthy eyes begins with a simple appointment.</p>
  <div class="row g-3 mt-4">
  <div class="col-md-4">
    <input placeholder="Name" type="text" class="form-control" id="name">
  </div>
  <div class="col-md-4">
    <input placeholder="Email" type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <input placeholder="Phone" type="text" class="form-control" id="phone">
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 100px"></textarea>
  <label for="message">Your Query</label>
  </div>
  <div class="col-12 mx-auto d-grid">
    <button id="submitAppointment" class="btn btn-primary">Make an Appointment</button>
  </div>
  <div class="d-flex justify-content-center">
    <div id="spinnerElem" class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  </div>
</div>
</div>
<!-- APPOINTMENT END -->

<!-- QUESTIONS ANSWEAR START -->
<div class="container mt-5 frequentlyAskQsn">
  <div class="text-center">
  <h3>Frequently Asked Questions</h3>
  <p>Explore common queries about eye health, treatments, and services in our Frequently Asked Questions section. Find insightful answers to key concerns, empowering you with knowledge for informed decisions about your eye care journey. If you have additional questions, feel free to reach out to our dedicated team for personalized assistance. Your vision matters, and we're here to provide the clarity you seek.</p>
  </div>
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      What is Optical Coherence Tomography (OCT) used for?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">OCT is a non-invasive imaging technology that helps diagnose and manage various eye conditions, providing detailed cross-sectional images of the retina, aiding in early detection and treatment planning.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      How often should I have an eye examination?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">For optimal eye health, it's recommended to have a comprehensive eye exam every one to two years, or as advised by your eye care professional. Regular check-ups can detect issues early, ensuring timely intervention.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      What is YAG Laser used for in eye care?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">YAG Laser is employed for treating conditions like cataracts and glaucoma. It offers precision and minimal discomfort, helping to improve vision and manage eye conditions effectively.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
      Can diabetes affect my eyesight?
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Yes, diabetes can lead to a condition called diabetic retinopathy, affecting the blood vessels in the retina. Regular eye exams are crucial for early detection and management to prevent vision loss.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
      How can I choose the right eyewear?
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Our skilled opticians guide you in selecting eyewear that complements your style and vision needs. From lens options to frame styles, we ensure you find the perfect balance of fashion and function for clear and comfortable vision.</div>
    </div>
  </div>
</div>
</div>
<!-- QUESTIONS ANSWEAR END -->

<!-- CONTACT START -->
<div class="mt-5 contactSectn">
  <h3 class="text-center">Our Location</h3>
  <p class="text-center container">Connect with us effortlessly through our Contact page. Whether you have inquiries about our services, want to schedule an appointment, or need assistance, our dedicated team is just a message or call away. Reach out to us, and let's take the next step in preserving and enhancing your vision together.</p>
  <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3712.9675034587017!2d83.97934287526887!3d21.469791680292186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjHCsDI4JzExLjMiTiA4M8KwNTgnNTQuOSJF!5e0!3m2!1sen!2sin!4v1706260447886!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- CONTACT END -->

<script>
jQuery(document).ready(function () {
    jQuery("#spinnerElem").hide();
    jQuery('#submitAppointment').click(function () {
        if (jQuery("#name").val().trim() === '') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please enter your first name"
            });
        }
        else if (jQuery("#inputEmail4").val().trim() === '') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please enter your email address"
            });
        }
        else if (jQuery("#phone").val().trim() === '') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please enter your phone number"
            });
        }
        else {
            jQuery("#spinnerElem").show();
            jQuery.ajax({
                method: "POST",
                url: "https://obifyconsulting.com/apis/PHPMailer/email.php",
                data: {
                    firstName: jQuery("#name").val().trim(),
                    email: jQuery("#inputEmail4").val().trim(),
                    phone: jQuery("#phone").val().trim(),
                    message: jQuery("#message").val().trim()
                },
                success: function (response) {
                    jQuery("#spinnerElem").hide();
                            Swal.fire({
                        icon: "success",
                        title: "Request Recieved",
                        text: "We will contact you soon"
                    });
                },
                error: function (error) {
                  console.log(error);
                  debugger;
                    jQuery("#spinnerElem").hide();
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Some error occured"
                    });
                }
            });
        }
    });
});
</script>
<script>
  $(document).ready(function(){
  $("img").click(function(){
  var t = $(this).attr("src");
  $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
  $("#myModal").modal();
});

$("video").click(function(){
  var v = $("video > source");
  var t = v.attr("src");
  $(".modal-body").html("<video class='model-vid' controls><source src='"+t+"' type='video/mp4'></source></video>");
  $("#myModal").modal();  
});
});//EOF Document.ready
</script>
<?php get_footer();?>