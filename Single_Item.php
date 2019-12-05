<!DOCTYPE html>

<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Single Item</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/green.css">
 
<script src="scripts/hint.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
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
		<h2>Single Item</h2>
	</div>
</div>
</section>


<div class="container">
<?php
	//include("dbconnect.php");
	$pro_id = $_GET['pro_id'];
	$_SESSION['pro_id'] = $pro_id;
	$sql = "select * from view_pro_cus where pro_id = ".$pro_id.";";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	if ($num != 0) {
	} else {
		echo "<h2>&nbsp&nbspNo product was found...</h2><br><br>";
	    die("");
	}
	while($row = mysqli_fetch_array($result)){
		$pro_id = $row['pro_id'];
		$name = $row['name'];
		$stock = $row['stock'];
		$spe_poi = $row['special_point'];
		$email = $row['email'];
		$img = $row['img'];
		$type = $row['type'];
		$price = $row['price'];
		$_SESSION['spe_poi'] = $spe_poi;
		$_SESSION['stock'] = $stock;
		$_SESSION['seller_email'] = $email;
		$_SESSION['proname'] = $name;
		$_SESSION['img'] = $img;
		$_SESSION['type'] = $type;
		$_SESSION['price'] = $price;
		echo"	<div class='eight columns' >
				<div class='slider-padding'>
							<div id='product-slider-vertical' class='royalSlider rsDefault'>
						    <a href=".$img." class='mfp-gallery' title='First Title'><img class='rsImg' src=".$img." data-rsTmb=".$img." alt='1' /></a>
						    <a href=".$img." class='mfp-gallery' title='First Title'><img class='rsImg' src=".$img." data-rsTmb=".$img." alt='1' /></a>
						    <a href=".$img." class='mfp-gallery' title='First Title'><img class='rsImg' src=".$img." data-rsTmb=".$img." alt='1' /></a>
							</div>
						    <div class='clearfix'></div>
				</div>
				</div>
			<!-- Content -->
				<div class='eight columns'>
					<div class='product-page'>
						<!-- Headline -->
						<section class='title'>
							<h2>".$name."</h2>
							<span class='product-price'>Price:$".$price." AUD</span>
						</section>
			<!-- Text Parapgraph -->
						<section>
							<p class='margin-reset'>Type:".$type."</p>
							<div class='clearfix'></div>
						</section>
						<section>
							<p class='margin-reset'>stock:".$stock."</p>
							<div class='clearfix'></div>
						</section>
							<form action='checkqty.php' method='post'>
								<input type='text' name='quantity' placeholder='1' class='qty' />
								<input class='button adc' type='submit' value='Add to WishList'>
								<div class='clearfix'></div>
							</form><br>
								<input class='button adc' type='submit' onclick='showQty()' value='Find number of followers'>
								<p><span id='Qty'></span></p>
					</div>
				</div>";
	}
$db->disconnect();
?>
</div>

<div class="container">
	<div class="sixteen columns">
			<!-- Tabs Navigation -->
			<ul class="tabs-nav">
				<li class="active"><a href="#tab1">Item Description</a></li>
				<li><a href="#tab3">Contact Seller</a></li>
			</ul>

			<!-- Tabs Content -->
			<div class="tabs-container">

				<div class="tab-content" id="tab1">
					<?php
					echo"					<p>".$_SESSION['spe_poi']."</p>"
					?>
				</div>

				<div class="tab-content" id="tab3">

					<!-- Reviews -->
					<section class="comments">
						<?php
						echo"						<p class='margin-bottom-10'>".$_SESSION['seller_email']."</p>"
						?>

						<a href="#small-dialog" class="popup-with-zoom-anim button color margin-left-0">Mail to</a>

						<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
							<h3 class="headline">Contact Seller</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

							<!-- Form -->
							<form id="add-comment" class="add-comment" action="sending_email.php" method="post">
								<fieldset>
									<div >
										<label>To: </label>
										<?php
										echo"										<input type='text' readonly='readonly' value='".$_SESSION['seller_email']."'>";
										?>
									</div>
									<div class="margin-top-20">
										<label>Subject:</label>
										<input type="text" name="subject" value="">
									</div>

									<div>
										<label>Message: </label>
										<textarea name="message" cols="40" rows="3"></textarea>
									</div>
									<input type="submit" class="button color" value="Send">
									<div class="clearfix"></div>

								</fieldset>	
							</form>
						</div>

					</section>

				</div>

			</div>
	</div>
	<!-- Google map API start! -->
	<script type="text/javascript" src="scripts/googlemap.js"></script>
	<div id="map"></div><br>
<div class="sixteen columns">
<a href="singleItempdf.php" class="button adc">Download PDF</a>
</div>	

</div>


<div class="margin-top-50"></div>


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

		<div class="eight columns">© Copyright 2018 by <a href="index.php">2hand Swap</a>. All Rights Reserved.</div>
	</div>
	<!-- Container / End -->

</div>
<!-- Footer Bottom / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>


<!-- Java Script
================================================== -->

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
<script src="scripts/googlemap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpzmSlXacmav22UEpaZ9riYF57sE0J3sI&callback=initMap"async defer></script>
</body>
</html>
