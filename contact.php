<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$page_title  = "Contact Us";
		$page = "contact";
		require 'includes/top.php';
	 ?>
</head>
<body>
	<?php require 'includes/header.php'; ?>

	<?php 
	$page_name = "Contact Us";
	$page_description = 'From  set together our divided own saw divided the form god <br class="d-none d-xl-block"> seas moveth you will fifth under replenish end';
	require 'includes/hero-banner.php'; 

	?>

	 <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
      


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Chancerygate Industrial Cent,</h3>
              <p> Horton Close, West Drayton UB7 8EW. United Kingdom</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:01895447000">01895447000</a></h3>
              <p>12:30 PM to 12:00 AM (7 days a week)</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:Clearbusiness.adrianvenoin@gmail.com">Clearbusiness.adrianvenoin@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->




		
	<?php require 'includes/footer.php'; ?>
</body>
</html>