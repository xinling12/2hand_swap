<html>
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Login&Sign up</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/green.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
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
				<li><i class="fa fa-child"></i><a href="login_signup.html">Log in</a></li>
				<li><i class="fa fa-pencil"></i><a href="login_signup.html">Sign up</a></li>
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
			<h1><a href="index.html"><img src="images/swap.jpg" alt="2handSwap" /></a></h1>
		</div>
	</div>

	<div class="six columns">
		<div id="logo">
			<h1><a href="index.html"><img src="images/website_name.jpg" alt="2handSwap" /></a></h1>
		</div>
	</div>

	<!-- Additional Menu -->
	<div class="six columns">
		<div id="additional-menu">
			<ul>
				<li><a href="wishlist.php">WishList <span>(0)</span></a></li>
				<li><a href="User_Account.php">My Account</a></li>
			</ul>
		</div>
	</div>


	<!-- Search -->
	<div class="six columns">
		<nav class="top-search">
			<form action="Search.php" method="get">
				<button><i class="fa fa-search"></i></button>
				<input class="search-field" type="text" name="search" placeholder="Search" value="">
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

				<li><a href="index.html" class="current homepage" id="current">Home</a></li>

				<li class="dropdown">
					<a href="aboutus.php">About us</a>
				</li>
			</ul>
		</nav>
	</div>
</div>

<section class="comments">
	<!-- Change Details -->
	<div class="container">
		<div class="sixteen columns">
			<h3 class="headline">My Details</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

			<!-- Form -->
			<form action="customer.php" method="post">
				<div class="form-row">
				    <div class="form-group col-md-6" id="firstname">
				      <label>Firstname</label>
				      <input type="text" class="form-control" name="firstname" placeholder="Firstname">
				    </div>
				    <div class="form-group col-md-6" id="lastname">
				      <label>Lastname</label>
				      <input type="text" class="form-control" name="lastname" placeholder="Lastname">
				    </div>
				</div>								    
				<div class="form-row"> 
				    <div class="form-group col-md-6" id="dob">
					    <label>Date of Birth</label>
					    <input type="date" name="dob" class="form-control">
					</div>
					<div class="form-group col-md-6">
				      <label for="inputState">Gender</label>
				      <select id="inputState" name="gender" class="form-control">
				        <option selected>Male</option>
				        <option>Female</option>
				        <option>Other</option>
				      </select>
				    </div>
				</div>									
				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<label>Address</label>
				    	<input type="text" name="address" class="form-control" placeholder="1234 Main St. Macgregor Qld">
					</div>								    
				    <div class="form-group col-md-6">
				      <label for="inputZip">ZipCode</label>
				      <input type="text" name="postcode" class="form-control" id="inputZip" placeholder="1234">
				    </div>
				</div><br>
				<input type="submit" value="Submit" class="button color">
				<div class="clearfix"></div>
			</form>
				<div class="container">
					<form action="upload_customer.php" method="post" enctype="multipart/form-data">
						<h4>Change Profile Picture:</h4>
				    	Select image to upload:
				    	<input type="file" value="choose picture" name="fileToUpload" id="fileToUpload">
				    	<input type="submit" value="Upload Image" name="submit">
					</form>
				</div><br>
			</div>
		</div>											
	</section>

<!-- Footer
================================================== -->
<div id="footer">

	<!-- Container -->
	<div class="container">

		<div class="four columns">
			<div id="footer_logo">
				<a href="index.html"><img src="images/swap_small.jpg" alt="2hand swap" class="margin-top-15"></a>
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

		<div class="eight columns">© Copyright 2018 by <a href="index.html">2hand Swap</a>. All Rights Reserved.</div>
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