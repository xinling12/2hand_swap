
<html>

<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>2hand Swap</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/green.css" id="colors">
 
<script src="scripts/hint.js"></script>
</head>

<body class="boxed">
<div id="wrapper">


<!-- Top Bar
================================================== -->
<div id="top-bar">
	<div class="container">
		<!-- Top Bar Menu -->
		<div class="ten columns">
			<ul class="top-bar-menu">
				<li>G'day!</li>
				<?php
				include('iflogin.php');
				echo "				<li><i class='fa fa-user'></i>".$_SESSION['name']."</li>";
				?>
				<li><i class="fa fa-paper-plane"></i><a href="logout.php">Log out</a></li>
			</ul>
		</div>

		<!-- Social Icons -->
		<div class="six columns">
			<ul class="social-icons">
				<li><a class="facebook" href="http://www.facebook.com"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="http://www.twitter.com"><i class="icon-twitter"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="clearfix"></div>


<!-- Header
================================================== -->
<div class="container">
	<!-- Logo -->
	<div class="four columns">
		<div id="logo">
			<h1><a href="index.php"><img src="images/swap.jpg" alt="2handSwap" /></a></h1>
		</div>
	</div>

	<div class="six columns">
		<div id="logo">
			<h1><a href="index.php"><img src="images/website_name.jpg" alt="2handSwap" /></a></h1>
		</div>
	</div>

	<!-- Additional Menu -->
	<div class="six columns">
		<div id="additional-menu">
			<ul>
				<li><a href="wishlist.php">WishList <span>
					<?php
					include("qtyStart.php");
					?>
				</span></a></li>
				<li><a href="User_Account.php">My Account</a></li>
			</ul>
		</div>
	</div>


	<!-- Search -->
	<div class="six columns">
		<nav class="top-search">
			<form action="Search.php" method="get">
				<button ><i class="fa fa-search"></i></button>
				<input class="search-field" name="search_content" type="text" onkeyup="showHint(this.value)" placeholder="Search">
			</form>
			<p><span id="txtHint"></span></p>
		</nav>
	</div>
</div>


<!-- Navigation
================================================== -->
<div class="container">
	<div class="sixteen columns">
		
		<a href="#menu" class="menu-trigger"><i class="fa fa-bars"></i> Menu</a>

		<nav id="navigation">
			<ul class="menu" id="responsive">

				<li><a href="index.php" class="current homepage" id="current">Home</a></li>

				<li class="dropdown">
					<a href="aboutus.php">About us</a>
				</li>
			</ul>
		</nav>
	</div>
</div>


<!-- Titlebar
================================================== -->
<section class="titlebar">
<div class="container">
	<div class="sixteen columns">
		<h2>2hand Swap</h2>
	</div>
</div>
</section>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<!-- Filters -->
	<div class="sixteen columns">
		<div id="filters" class="filters-dropdown headline"><span></span>
			<ul class="option-set" data-option-key="filter">
				<li><a href="#filter" class="selected" data-filter="*">All</a></li>
				<li><a href="#filter" data-filter=".accessories">Laptop</a></li>
				<li><a href="#filter" data-filter=".clothing">Mobile</a></li>
				<li><a href="#filter" data-filter=".technology">Camera</a></li>
				<li><a href="#filter" data-filter=".food">Accessories</a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>


	<!-- Portfolio Wrapper-->
	<div id="portfolio-wrapper">

		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item food">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/cable1-3.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>
					<section class="item-description">
						<span>Accessories</span>
						<h5>Apple MFi Certified - Dark Grey (6 Feet/1.8 Meter)</h5>
					</section>
			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item accessories">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/acer1-1.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>
					<section class="item-description">
						<span>Laptop</span>
						<h5>Acer Aspire E 15 E5-575-33BM 15.6-Inch FHD Notebook</h5>
					</section>
			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item food">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/earphone1-1.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>
					<section class="item-description">
						<span>Accessories</span>
						<h5>Panasonic RP-HJE120-PPK In-Ear Stereo Earphones, Black</h5>
					</section>
			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item accessories">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/dell1-3.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>
					<section class="item-description">
						<span>Laptop</span>
						<h5>Dell 15.6" Laptop, 7th Gen. AMD Dual-Core A6 Processor 2.50GHz</h5>
					</section>
			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item clothing">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/iphoneX-1.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>

					<section class="item-description">
						<span>Mobile</span>
						<h5>Apple iPhone X 256 GB T-Mobile - Space Gray, Locked to T-Mobile</h5>
					</section>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item clothing">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/iphoneX-2.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>

					<section class="item-description">
						<span>Mobile</span>
						<h5>Apple iPhone X 256 GB T-Mobile - Light Black, Locked to T-Mobile</h5>
					</section>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item technology">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/canon1-2.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>

					<section class="item-description">
						<span>Camera</span>
						<h5>Canon EOS 80D Digital SLR Kit with EF-S 18-55mm f/3.5-5.6 Image</h5>
					</section>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item accessories">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/hp1-3.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>

					<section class="item-description">
						<span>Laptop</span>
						<h5>HP EliteBook 8470P 14" Notebook PC - Intel Core i5-3320M 2.6GHz</h5>
					</section>

			</figure>
		</div>

 		<!-- Portfolio Item -->
		<div class="one-third column portfolio-item accessories">
			<figure>
				<div class="portfolio-holder">
						<img alt="" src="images/portfolio/mac1-4.jpg">
						<div class="hover-cover"></div>
						<div class="hover-icon"></div>
				</div>

					<section class="item-description">
						<span>Laptop</span>
						<h5>Apple MacBook Air MJVM2LL/A Intel i5 1.6GHz 4GB 128GB</h5>
					</section>

			</figure>
		</div>

	</div>
	<!-- Portfolio Wrapper / End -->

</div>
<!-- Container / End -->

<div class="margin-top-30"></div>

<!-- Footer
================================================== -->
<div id="footer">

	<!-- Container -->
	<div class="container">

		<div class="four columns">
			<div id="footer_logo">
				<a href="index.php"><img src="images/swap_small.jpg" alt="2hand swap" class="margin-top-15"></a>
				<p class="margin-top-10">	</p>
			</div>
		</div>

		<div class="six columns">

			<!-- Headline -->
			<h3 class="headline footer">Customer Service</h3>
			<span class="line"></span>
			<div class="clearfix"></div>

			<ul class="footer-links">
				<li><a href="private_policy.php">Privacy Policy</a></li>
				<li><a href="terms&condition.php">Terms & Conditions</a></li>
			</ul>

		</div>

		<div class="six columns">

			<!-- Headline -->
			<h3 class="headline footer">My Account</h3>
			<span class="line"></span>
			<div class="clearfix"></div>

			<ul class="footer-links">
				<li><a href="User_Account.php">My Account</a></li>
				<li><a href="wishlist.php">Wish List</a></li>
			</ul>

		</div>

	</div>
	<!-- Container / End -->

</div>
<!-- Footer / End -->

<!-- Footer Bottom / Start -->
<div id="footer-bottom">

	<!-- Container -->
	<div class="container">

		<div class="eight columns">© Copyright 2018 by <a href="#">2hand Swap</a>. All Rights Reserved.</div>
	</div>
	<!-- Container / End -->

</div>
<!-- Footer Bottom / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>


<!-- Java Script
================================================== -->
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/jquery.themepunch.plugins.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/hoverIntent.js"></script>
<script src="scripts/superfish.js"></script>
<script src="scripts/jquery.pureparallax.js"></script>
<script src="scripts/jquery.pricefilter.js"></script>
<script src="scripts/jquery.selectric.min.js"></script>
<script src="scripts/jquery.royalslider.min.js"></script>
<script src="scripts/SelectBox.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.tooltips.min.js"></script>
<script src="scripts/jquery.isotope.min.js"></script>
<script src="scripts/puregrid.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/custom.js"></script>
</body>
</html>
