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
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
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
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
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
    <p>Discover unparalleled eye care services at our center, offering cutting-edge diagnostics like Optical Coherence Tomography, precise measurements with Optical Biometry and Pachymetry, transformative treatments such as YAG Laser, and specialized care for glaucoma, diabetes retinopathy, occuloplasty, and squint correction. Elevate your vision with our expert team and diverse optical collection, ensuring clear sight and stylish choices for every patient.</p>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Revolutionizing Vision: Modern Cataract Surgery through Phaco Emulsification</h5>
                    <p class="card-text">Explore advanced eye care with our state-of-the-art Phaco Emulsification, ensuring precise and efficient cataract surgery for enhanced vision and recovery.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Precision in Sight: Computerized Eye Testing for Accurate Vision Assessment</h5>
                  <p class="card-text">Discover the future of eye examinations with our computerized testing, providing thorough and precise assessments for optimal vision correction and care.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Clarity Unveiled: Optical Coherence Tomography for Detailed Eye Imaging</h5>
                  <p class="card-text">Experience cutting-edge diagnostics with Optical Coherence Tomography, offering unparalleled insights into eye health for precise diagnosis and tailored treatment plans.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Precision Measurements: Optical Biometry and Pachymetry for Comprehensive Eye Assessment</h5>
                  <p class="card-text">Elevate your eye care with advanced optical biometry and pachymetry, ensuring accurate measurements crucial for personalized treatment and optimal visual outcomes.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Visual Insight: Explore Your Vision with Advanced Field Analyzer Technology</h5>
                  <p class="card-text">Uncover the full scope of your visual field through our cutting-edge field analyzer, a sophisticated tool for comprehensive eye examinations and precise diagnostic insights.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Laser Precision: Transformative Eye Care with YAG Laser Technology</h5>
                  <p class="card-text">Embrace advanced eye treatments with YAG Laser, offering precision and efficacy for conditions like cataracts and glaucoma, ensuring optimal vision outcomes with minimal discomfort.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="https://images.pexels.com/photos/5621857/pexels-photo-5621857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Laser Precision: Transformative Eye Care with YAG Laser Technology</h5>
                  <p class="card-text">Embrace advanced eye treatments with YAG Laser, offering precision and efficacy for conditions like cataracts and glaucoma, ensuring optimal vision outcomes with minimal discomfort.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- SERVICES END -->

<!-- APPOINTMENT START -->
<div class="container mt-5 makeApointment">
  <h3 class="text-center">Make an Appointment</h3>
  <p class="text-center">Secure your path to optimal eye health. Schedule an appointment with us today for personalized, expert care, advanced diagnostics, and a commitment to preserving and enhancing your vision. Your journey to clear and healthy eyes begins with a simple appointment.</p>
  <form class="row g-3 mt-4">
  <div class="col-md-4">
    <input placeholder="Name" type="text" class="form-control" id="name">
  </div>
  <div class="col-md-4">
    <input placeholder="Email" type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <input placeholder="Phone" type="text" class="form-control" id="phone">
  </div>
  <div class="col-md-4">
    <input placeholder="Appointment Date" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-4">
  <select id="inputState" class="form-select">
      <option selected>Select Department</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-4">
  <select id="inputState" class="form-select">
      <option selected>Select Doctor</option>
      <option>...</option>
    </select>
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
  </div>
  <div class="col-12 mx-auto d-grid">
    <button type="submit" class="btn btn-primary">Make an Appointment</button>
  </div>
</form>
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
  <h3 class="text-center">Contact</h3>
  <p class="text-center container">Connect with us effortlessly through our Contact page. Whether you have inquiries about our services, want to schedule an appointment, or need assistance, our dedicated team is just a message or call away. Reach out to us, and let's take the next step in preserving and enhancing your vision together.</p>
  <div>
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.0915292079308!2d83.97652527396895!3d21.46492498029573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a21171bf53c9f15%3A0x81f14b52e8aa94c7!2sKalyani%20eye%20%26%20retina%20clinic!5e0!3m2!1sen!2sin!4v1702364130055!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
  </div>
</div>
<!-- CONTACT END -->

<!-- End Latest Coupons -->
<?php get_footer();?>