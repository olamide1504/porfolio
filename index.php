<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home</title>
	<!-- MDB icon -->
	<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">
	<!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
			<a class="navbar-brand text-capitalize font-weight-bold" href="#">ADEYEMI DEBORAH</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="#works">Works</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	
	<main>
		<div class="container">

			<div>
				<img class="image" src="images/image.svg">
			</div>
			

			<section class="about" id="about">
				<div style="float: left;">
					<h6></h6>

					<hr class="divider text-left">

					<span>
						<span class="software" style="">Software used:</span>
						<img src="images/logos_figma.svg" class="figma ml-4">
						<img src="images/logos_sketch.svg" class="sketch ml-4">
						<img src="images/cib_adobe-xd.svg" class="abode-xd ml-4">
					</span>

					<p class="socials">
						<i class="fab fa-linkedin fa-lg"></i>
						<i class="fab fa-behance fa-lg ml-4"></i>
						<i class="fab fa-twitter fa-lg ml-4"></i>
						<i class="fab fa-dribbble fa-lg ml-4"></i>
					</p>
					
				</div>
				

				<div class="d-none d-md-block ml-auto" style="background: linear-gradient(123.85deg, #333333 -4.84%, rgba(51, 51, 51, 0) 35.95%), url('images/profile.jpeg'); background-size: cover; background-repeat: no-repeat; min-height: 700px; width: 640px; border-radius: 4px;"></div>

				<div class="ellipse">
					<img src="images/ellipse.svg" class="ellipse-img">
				</div>

				<img class="d-block d-lg-none" src="images/profile.jpeg" style="width: 100%; height: 247px; object-fit: cover; object-position: 50% 70%;">
	
			</section>
			

			<section class="projects" id="works">

				<div class="row">
					<div class="col-md-5">
						<h1 class="font-weight-bold project-title">Some of my project designs</h1>
					</div>
				</div>
				

				<div class="row work-div">
					<div class="col-md-6 work-img">
						<div class="w1"></div>
					</div>

					<div class="col-md-6 mt-5">
						<span class="work-header">#design system #mobile design</span>
						<p class="work-text pt-4">An e-commerce mobile application for vendors that enables them to sell any fashion related goods faster. I was the UI/UX Designer for this project.</p>
					</div>
				</div>

				<div class="row work-div">
					<div class="col-md-6 mt-5">
						<div class="w2"></div>
					</div>

					<div class="col-md-6 mt-5">
						<span class="work-header">#design system #web design</span>
						<p class="work-text pt-4">A sample web portfolio design of a UI/UX Designer to attract potential clients and showcase some of the design works.</p>
					</div>
				</div>

				<div class="row work-div">
					<div class="col-md-6 mt-5">
						<div class="w3"></div>
					</div>

					<div class="col-md-6 mt-5">
						<span class="work-header">#design system #mobile design</span>
						<p class="work-text pt-4">A church mobile application design. This gives the member of the church access to some of the teachings and sermon remotely. It was designed by myself and a colleague, Adeboye Blessing.</p>
					</div>
				</div>

				<div class="row work-div">
					<div class="col-md-6 mt-5">
						<div class="w4"></div>
					</div>

					<div class="col-md-6 mt-5">
						<span class="work-header">#wireframe #sketch #mobile design</span>
						<p class="work-text pt-4">The wireframe design and hand drawn sketches of a to-do list mobile application. The app is to help users have a list of an organized tasks and deliver before deadlines.</p>
					</div>
				</div>

			</section>


			<section class="contact mt-5" id="contact">
				<span class="collab font-weight-bold">Let’s work together!</span>
				<span class="ml-4"><img class="emoji" src="images/smiley.svg"></span>

				<p class="py-5">Tell me more about the project by sending a message to <a href="mailto:deborahadeyemi96@gmail.com">deborahadeyemi96@gmail.com</a></p>
			</section>

			<div class="back-to-top">
				<a onclick="topFunction()" id="myBtn" title="Go to top">
					<i class="fas fa-long-arrow-alt-up"></i>
				</a>
			</div>

			<footer>
				<hr style="border: 1.6px solid rgba(255, 255, 255, 0.2);">
				<p style="font-size: 14px;"><i class="far fa-copyright fa-sm"></i> 2020 All rights reserved</p>
			</footer>


		</div>

	</main>


	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<!-- Your custom scripts (optional) -->
	<script type="text/javascript">
		var content = 'I am a UI/UX designer based in Lagos, Nigeria. I am passionate about designing and love making complex issues look simple.';

		var ele = '<span>' + content.split('').join('</span><span>') + '</span>';


		$(ele).hide().appendTo('h6').each(function (i) {
		    $(this).delay(100 * i).css({
		        display: 'inline',
		        opacity: 0
		    }).animate({
		        opacity: 1
		    }, 100);
		});


		//Get the button
		var mybutton = document.getElementById("myBtn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() { scrollFunction() };

		function scrollFunction() {
		  	if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
		    	mybutton.style.display = "block";
		  	} else {
		    	mybutton.style.display = "none";
		  	}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  	document.body.scrollTop = 0;
		  	document.documentElement.scrollTop = 0;
		}
	</script>

</body>
</html>