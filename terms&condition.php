<html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Terms&Conditions</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/green.css">
 
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
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
				session_start();
				if(isset($_SESSION['email']) && isset($_SESSION['password'])){
					echo "				<li><i class='fa fa-user'></i>".$_SESSION['name']."</li>
										<li><i class='fa fa-paper-plane'></i><a href='logout.php'>Log out</a></li>";
				}
				else{echo"				<li><i class='fa fa-child'></i><a href='login_signup.html'>Log in</a></li>
										<li><i class='fa fa-pencil'></i><a href='login_signup.html'>Sign up</a></li>";
					}
				?>

			</ul>
		</div>

		<!-- Social Icons -->
		<div class="six columns">
			<ul class="social-icons">
				<li><a class="facebook" href="www.facebook.com"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="www.twitter.com"><i class="icon-twitter"></i></a></li>
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
			<?php
			if(isset($_SESSION['email']) && isset($_SESSION['password'])){
				echo "			<h1><a href='index.php'><img src='images/swap.jpg' alt='2handSwap' /></a></h1>";
			}
			else{echo "			<h1><a href='index.html'><img src='images/swap.jpg' alt='2handSwap' /></a></h1>";
				}
			?>
		</div>
	</div>
	<div class="six columns">
		<div id="logo">
			<?php
			if(isset($_SESSION['email']) && isset($_SESSION['password'])){
				echo "			<h1><a href='index.php'><img src='images/website_name.jpg' alt='2handSwap' /></a></h1>";
			}
			else{echo "			<h1><a href='index.html'><img src='images/website_name.jpg' alt='2handSwap' /></a></h1>";
				}
			?>

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
			<?php
			if(isset($_SESSION['email']) && isset($_SESSION['password'])){
				echo "				<li><a href='index.php' class='current homepage' id='current'>Home</a></li>";
			}
			else{echo "				<li><a href='index.html' class='current homepage' id='current'>Home</a></li>";
				}
			?>
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
		<h2>Terms and Conditions</h2>
	</div>
</div>
</section>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

<div class="twelve columns">
	<div class="extra-padding">

		<!-- Post -->
		<article class="post single">

			<figure class="post-img">
				<a href="images/terms&conditions.jpg" class="mfp-image" title="First Image Title"><img src="images/terms&conditions.jpg" alt="">
					<div class="hover-icon"></div>
				</a>
			</figure>
			<section class="post-content">

				<header class="meta">
					<h2><a href="#">Our Private Policy</a></h2>
				</header>

			<p>Program Coverage: Infoactiv Group Pty Ltd will accept all Apple products and computers, monitors, mobile phones and peripherals from any manufacturer, except products contaminated or suspected of being contaminated with chemicals, biological agents or other substances not integral to the original new equipment or otherwise associated with normal office or household environments. It will not accept hazardous waste; batteries that are not an integral part of the system being recycled; loose batteries or batteries that are corroded, leaking or otherwise damaged; UPS systems; CRTs that have been removed from their cases; or CRTs that are cracked or broken. It will also not accept any waste it is legally not permitted to collect or which the customer has a legal obligation to dispose of in a specified manner that would not be met by this program.</p>
		
			<p>Infoactiv will endeavour to complete all scheduled recycling pick-ups within one month of registration from Australian capital cities and major regional centres, or as outlined in the FAQ. In remote locations, the environmental impact of vehicle emissions may outweigh the benefit of collection. In these instances, Apple’s recycling partner will keep your request on file and contact you to schedule a pick-up if other requests are received from your area, making a pick-up environmentally worthwhile. In some instances, recycling volumes may not be large enough to justify a recycling collection, in which case no other service will be offered in lieu.</p>
			<p class="margin-reset">General: 2hand Swap is not responsible for printing errors. Apple reserves the right to change the terms and conditions, modify the offer or end the offer at any time without notice.
			These terms and conditions are governed by the laws of New South Wales, and the customer irrevocably and unconditionally submits to the non-exclusive jurisdiction of the courts of New South Wales.</p>
				<div class="clearfix"></div>

			</section>

		</article>
		<!-- Post / End -->

</div>
<!-- Container / End -->

<div class="margin-top-40"></div>

</div>
</div>


<!-- Footer
================================================== -->
<div id="footer">

	<!-- Container -->
	<div class="container">

		<div class="four columns">
			<div id="footer_logo">
			<?php
			if(isset($_SESSION['email']) && isset($_SESSION['password'])){
				echo "				<a href='index.php'><img src='images/swap_small.jpg' alt='2hand swap' class='margin-top-15'></a>";
			}
			else{echo "				<a href='index.html'><img src='images/swap_small.jpg' alt='2hand swap' class='margin-top-15'></a>";
				}
			?>

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
		<?php
			if(isset($_SESSION['email']) && isset($_SESSION['password'])){
				echo "		<div class='eight columns'>© Copyright 2018 by <a href='index.php'>2hand Swap</a>. All Rights Reserved.</div>";
			}
			else{echo "		<div class='eight columns'>© Copyright 2018 by <a href='index.html'>2hand Swap</a>. All Rights Reserved.</div>";
				}
			?>

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
</div>
</body>
</html>
