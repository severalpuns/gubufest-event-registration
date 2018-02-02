<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Gubu Fest</title>
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Font -->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo base_url('frontend')?>/css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="<?php echo base_url('frontend')?>/css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="<?php echo base_url('frontend')?>/css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="<?php echo base_url('frontend')?>/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('frontend')?>/css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="<?php echo base_url('frontend')?>/css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url('frontend')?>/js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->

					<!-- logo -->
          <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="<?php echo base_url('frontend')?>/img/logo.png" alt="Brandi">
						</h1>
					</a>
					<!-- /logo -->


					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
												<li><a href="#about">About</a></li>
                        <li><a href="#event">Event</a></li>
                        <li><a href="#galery">Galery</a></li>
                        <li><a href="#timeline">Timeline</a></li>
                        <li><a href="#contact">Contact</a></li>
												<li><a href="#contact">Register</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->



        <!--
        Home Slider
        ==================================== -->

		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- End Indicators bullet -->

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

					<!-- single slide -->
					<div class="item active" style="background-image: url(<?php echo base_url('frontend')?>/img/banner.jpg);">
						<div class="carousel-caption">
							<br><br><br><br><br>

							<ul class="social-links text-center">
								<li><a href="https://www.facebook.com/gubu.fest.5"><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href="https://www.instagram.com/gubufestival_pens/"><i class="fa fa-instagram fa-lg"></i></a></li>
								<li><a href="https://twitter.com/gubufestival18"><i class="fa fa-twitter fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->

					<!-- single slide -->
					<div class="item" style="background-image: url(<?php echo base_url('frontend')?>/img/banner2.jpg);">
						<div class="carousel-caption">
							<br><br><br><br>

							<ul class="social-links text-center">
                <li><a href="https://www.facebook.com/gubu.fest.5"><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href="https://www.instagram.com/gubufestival_pens/"><i class="fa fa-instagram fa-lg"></i></a></li>
								<li><a href="https://twitter.com/gubufestival18"><i class="fa fa-twitter fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->

				</div>
				<!-- End Wrapper for slides -->

			</div>
		</section>

        <!--
        End Home SliderEnd
        ==================================== -->

        <!--
        Features
        ==================================== -->

				<section id="about" class="timeline">
					<div class="container">
						<div class="row">

							<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
								<h2>About</h2>
								<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
							</div>

		          <br><br>

							<!-- single member -->
									<img src="<?php echo base_url('frontend')?>/img/about.jpg" alt="Team Member" class="img-responsive">
							<!-- end single member -->
						</div>
					</div>
				</section>

		<section id="event" class="event">
      <div class="container">
				<div class="row">
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Event</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

          <br><br>

					<!-- single member -->
					<figure class="team-member col-md-4 col-sm-12 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="<?php echo base_url('frontend')?>/img/team/member-1.png" alt="Team Member" class="img-responsive">
						</div>
					</figure>
					<!-- end single member -->

					<!-- single member -->
					<figure class="team-member col-md-4 col-sm-12 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="<?php echo base_url('frontend')?>/img/team/member-2.png" alt="Team Member" class="img-responsive">
						</div>
					</figure>
					<!-- end single member -->

					<!-- single member -->
					<figure class="team-member col-md-4 col-sm-12 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="member-thumb">
							<img src="<?php echo base_url('frontend')?>/img/team/member-3.png" alt="Team Member" class="img-responsive">
						</div>
					</figure>
					<!-- end single member -->
				</div>
			</div>
		</section>

        <!--
        End Features
        ==================================== -->


        <!--
        Our Works
        ==================================== -->

		<section id="galery" class="galery clearfix">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center">
						<h2>Galery</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
				</div>
			</div>

      <br><br><br>

			<div class="project-wrapper">

				<figure class="mix work-item branding">
					<img src="<?php echo base_url('frontend')?>/img/works/item-1.jpg" alt="">
				</figure>

				<figure class="mix work-item web">
					<img src="<?php echo base_url('frontend')?>/img/works/item-2.jpg" alt="">
				</figure>

				<figure class="mix work-item logo-design">
					<img src="<?php echo base_url('frontend')?>/img/works/item-3.jpg" alt="">
				</figure>

				<figure class="mix work-item photography">
					<img src="<?php echo base_url('frontend')?>/img/works/item-4.jpg" alt="">
				</figure>

				<figure class="mix work-item branding">
					<img src="<?php echo base_url('frontend')?>/img/works/item-5.jpg" alt="">
				</figure>

				<figure class="mix work-item web">
					<img src="<?php echo base_url('frontend')?>/img/works/item-6.jpg" alt="">
				</figure>

				<figure class="mix work-item logo-design">
					<img src="<?php echo base_url('frontend')?>/img/works/item-7.jpg" alt="">
				</figure>

				<figure class="mix work-item photography">
					<img src="<?php echo base_url('frontend')?>/img/works/item-8.jpg" alt="">
				</figure>

			</div>


		</section>

        <!--
        End Our Works
        ==================================== -->

        <!--
        Meet Our Team
        ==================================== -->

		<section id="timeline" class="timeline">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Timeline</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

          <br><br>

					<!-- single member -->
							<img src="<?php echo base_url('frontend')?>/img/timeline.jpg" alt="Team Member" class="img-responsive">
					<!-- end single member -->
				</div>
			</div>
		</section>

        <!--
        End Meet Our Team
        ==================================== -->

		<footer id="contact" class="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="<?php echo base_url('frontend')?>/img/logo.png" alt="">
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Explore</h6>
							<ul>
								<li><a href="https://www.facebook.com/gubu.fest.5"><i class="fa fa-facebook fa-lg"></i></a>  <a href="https://www.facebook.com/gubu.fest.5">Facebook</a></li>
								<li><a href="https://www.instagram.com/gubufestival_pens/"><i class="fa fa-instagram fa-lg"></i></a>   <a href="https://www.instagram.com/gubufestival_pens/">Instagram</a></li>
								<li><a href="https://twitter.com/gubufestival18"><i class="fa fa-twitter fa-lg"></i></a>   <a href="https://twitter.com/gubufestival18">Twitter</a></li>
                <li></li>
                <li></li>
                <li></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Support</h6>
							<ul>
                <li><a href="http://bit.ly/2EVaDgr">Guide Book</a></li>
								<li>gamefest2017@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
        <br><br><br><br>
        <center><h1><a href="<?php echo base_url('login')?>">REGISTER</a></h1></center>

				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © <a href="http://gametech.pens.ac.id/">Gubu Fest 2018</a>
						</p>
					</div>
				</div>
			</div>
		</footer>

		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="<?php echo base_url('frontend')?>/js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="<?php echo base_url('frontend')?>/js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?php echo base_url('frontend')?>/js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?php echo base_url('frontend')?>/js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="<?php echo base_url('frontend')?>/js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="<?php echo base_url('frontend')?>/js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="<?php echo base_url('frontend')?>/js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="<?php echo base_url('frontend')?>/js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="<?php echo base_url('frontend')?>/js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="<?php echo base_url('frontend')?>/js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script>
		<!-- Custom Functions -->
        <script src="<?php echo base_url('frontend')?>/js/custom.js"></script>

		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */

				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>
