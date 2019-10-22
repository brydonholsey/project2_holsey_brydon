<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">

		<title>Caltina</title>


		<!-- stylesheets -->
		<link type="text/css" rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link href="lightbox/css/lightbox.css" rel="stylesheet" />

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Nunito:300,400,700&display=swap" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a61cb35b75.js" crossorigin="anonymous"></script>

		<!--[if lt IE 9]>
			<script src="js/html5shiv-printshiv.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="container">

		<header>
			<div class="nav-toggle">
  			<div class="nav-toggle-bar"></div>
			</div>
			<nav class="nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="product.html">Product</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

			<div class="header-content">
				<nav class="desktop-menu">
					<ul>
	          <li><a href="index.html">Home</a></li>
						<li><a href="product.html">Product</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
				<img src="images/logos/caltina.png" alt="Caltina Logo" title="Caltina Logo">
				<h1 id="page-title">Contact</h1>
				<h2>Let's chat</h2>
			</div>
			<div class="overlay"></div>
			<div class="header-image"></div>
		</header>

		<main>
      <section class="thank-you-1 container-85">
        <h3>Missing fields</h3>
        <p>Sorry, you have not completed all of the required fields.</p>
        <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>
      </section>
		</main>

		<footer data-aos="fade-up" data-aos-duration="2000">
			<div class="container-85">
				<div class="left-70">
					<h4>Caltina</h4>
					<hr>
					<p><a href="mailto:info@caltina.com">info@caltina.com</a><br>
						415.561.5150
					</p>
					<p>606 Broderick Street <br>
					San Francisco, CA 94117
					</p>
				</div>
				<div class="right-30">
					<h4>Sitemap</h4>
					<hr>
					<p>
						<a href="index.html">Home</a> <br>
						<a href="services.html">Services</a> <br>
						<a href="about.html">About</a> <br>
						<a href="contact.html">Contact</a> <br>
					</p>
				</div>
				<div class="clear"></div>
				<div class="left-70">
					<h4>Learn More</h4>
					<hr>
					<p><a href="http://www.salesforce.com">salesforce.com</a>
					</p>
				</div>
				<div class="right-30">
					<img class="footer-logo" src="images/logos/caltina-color.png" alt="Caltina Logo" title="Caltina Logo">
				</div>
				<div class="clear"></div>
			</div>
		</footer>

		</div>


	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
       AOS.init();
     </script>
	<script src="js/backstretch.js"></script>
	<script src="js/scripts.js"></script>
	<script src="lightbox/js/lightbox.js"></script>
	</body>

</html>


<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
