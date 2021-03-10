<!DOCTYPE html>
<html>
<head>
	<title>Daksh Software Solution</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  	<!-- add logo in title -->
  	<link rel="icon" href="images/logo_1.png" type="image/icon type">

  	<!-- Custom index page CSS file -->
  	<link rel="stylesheet" type="text/css" href="css/style.css">

  	<!-- Google Fonts File -->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

	<!-- Font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

	<!-- SweetAleart CDN file -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- Owl Carousel CDN file -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

	<!-- Jquery CDN file -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/chatbot.css">
</head>
<body onload="myFunction()">

	<div id="loading"> 

	</div>

	<!-- Header Part Start Here -->
	<div class="header" id="topheader">
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container text-uppercase p-2">
				<a href="#" class="pr-3"><img src="images/logo_1.png"  width="60px" height="60px" ></a>
			  <a class="navbar-brand font-weight-bold text-white" href="#">Daksh Software Solution</a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto text-uppercase">
			      <li class="nav-item active">
			        <a class="nav-link js-scroll-trigger" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="#servicediv">Services</a>
			      </li>	
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="#unique_features">Features</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="#aboutusdiv">About</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link js-scroll-trigger" href="#contactid">Contact</a>
			      </li>
			    </ul>    
			  </div>
			</div>
		</nav>

		<!-- code is disabled on 19 jan 2021 by Dinesh -->

		<!-- <section class="header-section">
			<div class="center-div">
				<h1 class="font-weight-bolder"> We are The Web Developers</h1>
				<p class="font-weight-bolder">We create the world best websites. </p>
				<div class="header-buttons">
					<a href="#newsletterid">AboutUs</a>
					<a href="#contactid">Contact</a>
				</div>
			</div>
		</section> -->

		<div class="main_header__div d-flex align-items-start justify-content-center flex-column shadow">
	        <p>Daksh Software Solution</p>
	        <!-- <h2 class="animateWord">
	          <span>We are </span>
	          <div>
	            <ul class="flip">
	              <li>a Programmer</li>
	              <li>a Designer</li>
	              <li>a Freelancer</li>
	              <li>a App Developer</li>
	            </ul>
	          </div>
	        </h2> -->
	        <h2 class="animateWord">
	          <span>We Create </span>
	          <div>
	            <ul class="flip">
	              <li>Mobile Application</li>
	              <li>Website</li>
	              <li>Web Application</li>
	              <li>Desktop Application</li>
	            </ul>
	          </div>
	        </h2>

	        <a href="#contactid"><button class="text-uppercase">Contact Us</button></a>
      	</div>
	</div>
	<!-- /Header Part Ends Here -->


	<!-- Three Extra Header Div Starts Here -->

	<section class="header-extradiv">
		<div class="container">
			<div class="row">
				<div class="first-div col-lg-3 col-md-5 col-12">

					<h1>Welcome to</h1>
					<h2>Daksh Software Solution </h2>
					<div class="underline"></div>
				</div>

				<div class="extra-div col-lg-3 col-md-5 col-12">
					<a href="#"><i class="fa-5x fa fa-magic" aria-hidden="true"></i></a>

					<h2>EASY TO USE</h2>
					<p class="text-center">We consider usability throughout the design and development process. ... We clearly divide your website into easy to understand sections.</p>
				</div>

				<div class="extra-div col-lg-3 col-md-5 col-12">
					<a href="#"><i class="fa-5x fa fa-paint-brush" aria-hidden="true"></i></a>

					<h2>AWESOME DESIGN</h2>
					<p>We create a masterful design [and] invest the time to understand your business and audience and deliver a well thought-out design in very little time.</p>
				</div>

				<div class="extra-div col-lg-3 col-md-5 col-12">
					<a href="#"><i class="fa-5x fa fa-cog" aria-hidden="true"></i></a>

					<h2>EASY TO CUSTOMIZE</h2>
					<p class="text-center">We customize software and gives your company a way to be innovative and edge out your competitors, increase overall efficiency for better user experience.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Three Extra Header Div Ends Here -->

	<!-- Offer Section Starts Here -->


	<!-- Modified On: 3rd Feb 2021
	Modifier Name: Dinesh Gosavi --> 

	<section class="serviceoffers" id="servicediv">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold text-white pb-5"> What Do We Offer </h1>
		</div>

		<div class="container overflow-hidden">
			<div class="row gy-5">
				<div class="extra-div col-lg-6 col-md-12 col-12" style="transform: translateY(0px);">
					<div class="services">
						<a href="#"><i class="fa fa-globe fa-5x p-5" aria-hidden="true"></i></a>

						<h2>WEB DEVELOPMENT</h2>
						<p class="p-2">We create website that effectively responds to the requirements of users to dominate the World Wide Web.Empowering with different features like customizable interface, tailored user-experience, integrated content management system.</p>
					</div>
				</div>
				<div class="extra-div col-lg-6 col-md-12 col-12" style="transform: translateY(0px);">
					<div class="services">
						<a href="#"><i class="fa fa-android fa-5x p-5" aria-hidden="true"></i></a>

						<h2>MOBILE DEVELOPMENT</h2>
						<p class="pb-5">We emphasis on providing unparalleled (in terms of quality and price) Android applications to clients. Our developers will analyze your needs and turn your Android/iOS app into a reality.</p>
					</div>
				</div>
				<div class="extra-div col-lg-6 col-md-12 col-12" style="transform: translateY(0px);">
					<div class="services">
						<a href="#"><i class="fa fa-wrench fa-5x p-5" aria-hidden="true"></i></a>

						<h2>SOFTWARE DEVELOPMENT</h2>
						<p class="">We builds custom software and delivers turn-key projects to small and medium-sized enterprises and startups.We provides specialized Solution to multiple business domains, such as fin-tech, education, transport & logistics and others.</p>
					</div>
				</div>
				<div class="extra-div col-lg-6 col-md-12 col-12" style="transform: translateY(0px);">
					<div class="services">
						<a href="#"><i class="fa fa-paint-brush fa-5x p-5" aria-hidden="true"></i></a>

						<h2>WEB DESIGN</h2>
						<p class="">By observing, researching, and identifying clients requirements, we design products according to these unifying qualities.In order to produce effective, efficient and visually pleasing displays.Preserving a layout that is as consistent as possible between devices</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modified On: 3rd Feb 2021
	Modifier Name: Dinesh Gosavi -->

	<!-- <section class="serviceoffers" id="servicediv">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold text-white pb-5"> What Do We Offer </h1>
		</div>

		<div class="d-flex justify-content-between align-items-center px-5">
			<div class="card " style="width: 28rem; border-radius: 6px; letter-spacing: 1px;">
			  <div class="card-body">
			    <a href="#"><i class="fa fa-globe fa-5x p-5" aria-hidden="true"></i></a>
			    <h2 class="card-subtitle text-center font-weight-bold pt-5 pb-3">WEB DEVELOPMENT</h2>
			    <p class="card-text text-center px-3">We create website that effectively responds to the requirements of users to dominate the World Wide Web.Empowering with different features like customizable interface, tailored user-experience, integrated content management system.</p>
			  </div>
			</div>
			<div class="card " style="width: 28rem; border-radius: 6px; letter-spacing: 1.5px;">
			  <div class="card-body">
			    <a href="#"><i class="fa fa-android fa-5x p-5" aria-hidden="true"></i></a>
			    <h2 class="card-subtitle text-center font-weight-bold pt-5 pb-3">MOBILE APP DEVELOPMENT</h2>
			    <p class="card-text text-center px-3">We emphasis on providing unparalleled (in terms of quality and price) Android applications to clients. Our developers will analyze your needs and turn your Android/iOS app into a reality.</p>
			  </div>
			</div>
			<div class="card " style="width: 28rem; border-radius: 6px; letter-spacing: 1px;">
			  <div class="card-body">
			    <a href="#"><i class="fa fa-wrench fa-5x p-5" aria-hidden="true"></i></a>
			    <h2 class="card-subtitle text-center font-weight-bold pt-5 pb-3">SOFTWARE DEVELOPMENT</h2>
			    <p class="card-text text-center px-3">We builds custom software and delivers turn-key projects to small and medium-sized enterprises and startups.We provides specialized Solution to multiple business domains, such as fintech, education, transport & logistics and others.</p>
			  </div>
			</div>
			<div class="card " style="width: 28rem; border-radius: 6px; letter-spacing: 1px;">
			  <div class="card-body">
			    <a href="#"><i class="fa fa-paint-brush fa-5x p-5" aria-hidden="true"></i></a>
			    <h2 class="card-subtitle text-center font-weight-bold pt-5 pb-3">WEB DESIGN</h2>
			    <p class="card-text text-center px-3">By observing, researching, and identifying clients requirements, we design products according to these unifying qualities.In order to produce effective, efficient and visually pleasing displays.Preserving a layout that is as consistent as possible between devices</p>
			  </div>
			</div>
		</div>
	</section> -->

	<!-- Offer Section Ends Here -->

	<!-- about us starts Here -->

	<section class="about-us" id="aboutusdiv">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold pb-5"> MORE ABOUT US </h1>
		</div>
		
		<div class="container-fluid">
			<div class="row pt-5">
				<div class="col-lg-6 col-md-6 col-12 about-content mt-5">
					<h2>Innovators. Dreamers.</h2>
					<p>Daksh Software Solution is a leading provider of cutting-edge technologies and services, offering scalable Solution for companies of all sizes. We started by scribbling our ideas on a piece of paper, today we offer smart, innovative services to our clients.</p></br></br>

					<p>We built our Solution by closely listening to our potential clientele and understanding their expectations with our product. We know how to analyze this information and customize our offering to changing market needs. Why not join our fast growing customer base? Get in touch today to know more about the <span>Daksh Software Solution</span>.</p>
				</div>

				<div class="col-lg-6 col-md-6 col-12 about-img">
					<div>
						<img src="images/about-us.jpeg" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>			

	<!-- about us starts Here -->


	<!-- projects done starts Here -->

	<!-- <section class="project-work">
		<div class="container headings text-center">
			<p class="text-center font-weight-bold pb-5"> MORE THAN 100+ WEBSITES CREATED  </p>
		</div>

		<div class="container-fuid d-flex justify-content-around align-items-center text-center pb-5">
			<div>
				<h1 class="count">150</h1>
				<p>CMS installation</p>
			</div>

			<div>
				<h1 class="count">20</h1>
				<p>Awards Won</p>
			</div>

			<div>
				<h1 class="count">150</h1>
				<p>Happy Clients</p>
			</div>

			<div>
				<h1 class="count">100</h1>
				<p>Working On</p>
			</div>
		</div>
	</section> -->

	<!-- projects done Ends Here -->


	<!-- Our Pricing Sections Starts Here -->

	<!-- <section class="pricing" id="pricingdiv">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold text-white pb-5"> OUR BEST PRICING </h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="card text-center">
					  <div class="card-header">BASIC</div>
					  <div class="card-body">
					  	<li>$<span class="money">20</span>/website</li>
					  	<li>Responsive Website</li>
					  	<li>Domane Name Free</li>
					  	<li>Mobile Friendly</li>
					  	<li>Webmail Support</li>
					  	<li>Customer Support 27/7</li>
					  </div>
					  <div class="card-footer">
					  	<a href="#">Purchase</a>
					  </div>
					</div>
				</div>

				<div class="col-lg-4 col-12 mid-card">
					<div class="card text-center">
					  <div class="card-header">STANDARD</div>
					  <div class="card-body">
					  	<li>$<span class="money">40</span>/website</li>
					  	<li>Responsive Website</li>
					  	<li>Domane Name Free</li>
					  	<li>Mobile Friendly</li>
					  	<li>Webmail Support</li>
					  	<li>Customer Support 27/7</li>
					  </div>
					  <div class="card-footer">
					  	<a href="#">Purchase</a>
					  </div>
					</div>
				</div>

				<div class="col-lg-4 col-12">
					<div class="card text-center">
					  <div class="card-header">PREMIUM</div>
					  <div class="card-body">
					  	<li>$<span class="money">60</span>/website</li>
					  	<li>Responsive Website</li>
					  	<li>Domane Name Free</li>
					  	<li>Mobile Friendly</li>
					  	<li>Webmail Support</li>
					  	<li>Customer Support 27/7</li>
					  </div>
					  <div class="card-footer">
					  	<a href="#">Purchase</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>	 -->

	<!-- Our Pricing Sections Ends Here -->


	<!-- Customer Feedback Sections Starts Here -->

		

	<!-- Unique Sections Starts Here -->

	<section class="unique_features" id="unique_features">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold"> Our Unique Features </h1>
		</div>

		<div class="silder owl-Carousel" id="silder">	
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<div class="card">
							<div class="content">
								<div class="title">Illustrations</div>
								<p style="padding-bottom: 0">We add visual elements to your site design that actually make the difference between a good and a great site.</p>
							</div>
							<div class="img">
								<img src="images/Illustration.png" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="card">
							<div class="content">
								<div class="title">Web Capabilities</div>
								<p>We design and develop website that are responsive in nature.</p>
							</div>
							<div class="img py-4">
								<img src="images/Web_Compatibility.png" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="card">
							<div class="content">
								<div class="title">User-Friendly</div>
								<p>We understand when something is user-friendly, it is hassle-free and workable.</p>
							</div>
							<div class="img">
								<img src="images/User-friendly.png" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="card">
							<div class="content">
								<div class="title">Webpage Speed</div>
								<p>We provide best speed optimization service for top-class website performance.</p>
							</div>
							<div class="img">
								<img src="images/Webpage_Speed.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Unique Sections Ends Here -->

	<!-- Customer Feedback Sections Ends Here -->


	<!-- contact us Sections starts Here -->

	<section class="contactus" id="contactid">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold"> CONTACT US </h1>
			<p class="text-capitalize text-center pt-4 d-flex justify-content-around align-items-center"> We would be happy to answer your questions and set up a meeting with you. Daksh Software Solution can help set you apart from the flock!</p>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
					<form method="POST" name="contact_form" class="contactForm" id="frmContactus">
						<div class="controls">
							<div class="row columns">
								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" type="text" name="full_name" id="full_name" required="required" autocomplete="off" placeholder="Enter your name here">
									</div>
								</div>
							</div>

							<div class="row columns">
								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" type="number" name="phone_num" id="phone_num" required="required" autocomplete="off" placeholder="Enter your phone no. here">
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" type="email" name="email_addr" id="email_addr" required="required" autocomplete="off" required="required" placeholder="Enter your email here">
									</div>
								</div>
							</div>

							<div class="row  columns">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="msg" id="msg" required="required"rows="6" cols="50" placeholder="Type your message here..."></textarea>
									</div>
								</div>
							</div>

							<div class="submitbtn mt-3 d-flex justify-content-center">
								<button type="submit" class="btn btn-lg btn-info d-flex justify-content-center align-items-center" id="submit">Submit</button><br>
								<span style="color: green; font-size: 12px;" id="success_msg"></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>	

	<!-- contact us Sections Ends Here -->


	<!-- News Letter Sections Starts Here -->

	<section class="newsletter" id="newsletterid">
		<div class="container headings text-center">
			<h1 class="text-center font-weight-bold"> SUBSCRIBE TO OUR NEWSLETTER </h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<form name="newsletter_form" id="newsletter_form">
						<div class="input-group mb-3">
					    	<input type="email" class="form-control news-email" name="newsletter_email" id="newsletter_email"  placeholder="Your Email" required>
					    	<div class="input-group-append">
					      		<button type="submit" class="input-group-text" name="save" id="save">&nbsp; Subscribe</button>
					    	</div>
					  	</div>
				  	</form>
				</div>
			</div>
		</div>
	</section>		

	<!-- News Letter Sections Ends Here -->


	<!-- Get Free Quotes Button Starts Here -->
		<div class="container">
	    	<div class="row">
	    	 <div id="Smallchat">
	        <div class="Layout Layout-open Layout-expand Layout-right" style="background-color: #3F51B5;color: rgb(255, 255, 255);opacity: 5;border-radius: 10px;">
	          <div class="Messenger_messenger">
	            <div class="Messenger_header" style="background-color: rgb(22, 46, 98); color: rgb(255, 255, 255);">
	              <h4 class="Messenger_prompt">How can we help you?</h4> <span class="chat_close_icon"><i class="fa fa-window-close" aria-hidden="true"></i></span> </div>
	            <div class="Messenger_content">
	              <div class="Messages">
	                <div class="Messages_list"></div>
	              </div>
	              <div class="Input Input-blank">
	                <textarea class="Input_field" placeholder="Send a message..." style="height: 20px;"></textarea>
	                <button class="Input_button Input_button-emoji">
	                  <div class="Icon" style="width: 18px; height: 18px;">
	                    <svg width="56px" height="56px" viewBox="1332 47 56 56" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 18px; height: 18px;">
	                      <g id="emoji" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1332.000000, 47.000000)">
	                        <path d="M28,56 C12.536027,56 0,43.463973 0,28 C0,12.536027 12.536027,0 28,0 C43.463973,0 56,12.536027 56,28 C56,43.463973 43.463973,56 28,56 Z M28,50 C40.1502645,50 50,40.1502645 50,28 C50,15.8497355 40.1502645,6 28,6 C15.8497355,6 6,15.8497355 6,28 C6,40.1502645 15.8497355,50 28,50 Z" id="Oval-8" fill="#96AAB4" fill-rule="nonzero"></path>
	                        <path d="M28,47 C18.0588745,47 10,38.9411255 10,29 C10,27.5224898 11.5469487,26.5550499 12.8754068,27.2017612 C13.0116063,27.2662365 13.0926181,27.3037345 13.1866998,27.3464814 C13.4611235,27.4711684 13.7819537,27.6111958 14.1451774,27.7627577 C15.1908595,28.199088 16.3591406,28.6365764 17.6173846,29.0449298 C21.1841638,30.2025005 24.7379224,30.8945075 28,30.8945075 C31.2620776,30.8945075 34.8158362,30.2025005 38.3826154,29.0449298 C39.6408594,28.6365764 40.8091405,28.199088 41.8548226,27.7627577 C42.2180463,27.6111958 42.5388765,27.4711684 42.8133002,27.3464814 C42.9073819,27.3037345 42.9883937,27.2662365 43.0558366,27.2344634 C44.4530513,26.5550499 46,27.5224898 46,29 C46,38.9411255 37.9411255,47 28,47 Z M28,43 C34.6510529,43 40.2188483,38.3620234 41.6456177,32.1438387 C40.9980758,32.3847069 40.320642,32.6213409 39.6173846,32.8495777 C35.6841638,34.1260741 31.7379224,34.8945075 28,34.8945075 C24.2620776,34.8945075 20.3158362,34.1260741 16.3826154,32.8495777 C15.679358,32.6213409 15.0019242,32.3847069 14.3543823,32.1438387 C15.7811517,38.3620234 21.3489471,43 28,43 Z" id="Oval-8" fill="#96AAB4" fill-rule="nonzero"></path>
	                        <path d="M19,15 L19,20 C19,21.1045695 19.8954305,22 21,22 C22.1045695,22 23,21.1045695 23,20 L23,15 C23,13.8954305 22.1045695,13 21,13 C19.8954305,13 19,13.8954305 19,15 Z" id="Line" fill="#96AAB4" fill-rule="nonzero"></path>
	                        <path d="M32,15 L32,20 C32,21.1045695 32.8954305,22 34,22 C35.1045695,22 36,21.1045695 36,20 L36,15 C36,13.8954305 35.1045695,13 34,13 C32.8954305,13 32,13.8954305 32,15 Z" id="Line-Copy-2" fill="#96AAB4" fill-rule="nonzero"></path>
	                      </g>
	                    </svg>
	                  </div>
	                </button>
	                <button class="Input_button Input_button-send">
	                  <div class="Icon" style="width: 18px; height: 18px;">
	                    <svg width="57px" height="54px" viewBox="1496 193 57 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 18px; height: 18px;">
	                      <g id="Group-9-Copy-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1523.000000, 220.000000) rotate(-270.000000) translate(-1523.000000, -220.000000) translate(1499.000000, 193.000000)">
	                        <path d="M5.42994667,44.5306122 L16.5955554,44.5306122 L21.049938,20.423658 C21.6518463,17.1661523 26.3121212,17.1441362 26.9447801,20.3958097 L31.6405465,44.5306122 L42.5313185,44.5306122 L23.9806326,7.0871633 L5.42994667,44.5306122 Z M22.0420732,48.0757124 C21.779222,49.4982538 20.5386331,50.5306122 19.0920112,50.5306122 L1.59009899,50.5306122 C-1.20169244,50.5306122 -2.87079654,47.7697069 -1.64625638,45.2980459 L20.8461928,-0.101616237 C22.1967178,-2.8275701 25.7710778,-2.81438868 27.1150723,-0.101616237 L49.6075215,45.2980459 C50.8414042,47.7885641 49.1422456,50.5306122 46.3613062,50.5306122 L29.1679835,50.5306122 C27.7320366,50.5306122 26.4974445,49.5130766 26.2232033,48.1035608 L24.0760553,37.0678766 L22.0420732,48.0757124 Z" id="sendicon" fill="#96AAB4" fill-rule="nonzero"></path>
	                      </g>
	                    </svg>
	                  </div>
	                </button>
	              </div>
	            </div>
	          </div>
	        </div>
	        <!--===============CHAT ON BUTTON STRART===============-->
	        <!-- <div class="chat_on"> <span class="chat_on_icon"><i class="fa fa-comments fa-2x" aria-hidden="true"></i></span> </div> -->
	        <!--===============CHAT ON BUTTON END===============-->
	      </div>
    	</div>
    </div>
	<!-- Get Free Quotes Button Ends Here -->


	<!-- Footer Sections Starts Here -->

	<footer class="footersection" id="footerdiv">
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 footer-div">
					<div>
						<h3>ABOUT DAKSH SOFTWARE Solution</h3>  

						<p>We have highly skilled engineers with excellent technical knowledge and experience in using the latest software standards. We deliver Solution that meet client's needs, expectations and budget. By putting our clients at the heart of everything we do.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
					<div class="footer-nav">
						<h3>NEVIGATION LINKS</h3>
						<li><a href="#">Home</a></li>
						<li><a href="#servicediv">Services</a></li>
						<li><a href="#unique_features	">Features</a></li>
						<li><a href="#aboutusdiv">About</a></li>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-12 footer-div">
					<div>
						<h3>NEWSLETTER</h3>
						<p>Subsccribe to our NewsLetter for business professionals caught between high OEM price and mediocre print and graphic outputs.</p>

						<div class="container newsletter-footer">
							<div class="row">
								<div class="mt-3 col-lg-12 col-12">
									<form name="newsletter_footer" id="newsletter_footer">
										<div class="input-group mb-3">
									    	<input type="email" class="form-control news-email" name="newsletter_email" id="newsletter_email"  placeholder="Your Email" required>
									    	<div class="input-group-append">
									      		<button type="submit" class="input-group-text" name="footer_save" id="footer_save">&nbsp; Subscribe</button>
									    	</div>
									  	</div>
								  	</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-5 text-center">
			<p class="copyright_line text-center">© 2021 Daksh Software Solution All rights reserved | This Website is made with <span style="color: red;">❤️</span> by <span><a href="#">Daksh Software Solution</a></span></p>
		</div>

		<div class="scrolltop float-right">
			<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
		</div>

	</footer>

	<!-- Footer Sections Ends Here -->

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>

  	<script src="js/index.js"></script>
</body>
</html>