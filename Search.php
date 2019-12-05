
<html>

<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Search result</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/green.css">
 
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
<section class="parallax-titlebar fullwidth-element"  data-background="#000" data-opacity="0.45" data-height="160">

	<img src="images/bgp.jpg" alt="" />
	<div class="parallax-overlay"></div>

	<div class="parallax-content">
		<h2>Shop <span>choose your favourite</span></h2>
	</div>

</section>


<div class="container">

	<!-- Content
	================================================== -->
	<!-- Products -->
	<div class="products">
		<?php
		if (isset($_GET["search"])){
			$item = $_GET["search"];
		}else{
			$item = $_GET["search_content"];
		}
		if($item!=""){
			$sql = "select * from product where name like '%".$item."%';";
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
					$spe_poi = $row['special_point'];
					$img = $row['img'];
					$type = $row['type'];
					$price = $row['price'];
					echo"		<div class='four columns'>
								<figure class='product'>
									<div class='mediaholder'>
										<form action='Single_Item.php' method='get'>
											<a href='Single_Item.php?pro_id=".$pro_id."'>
												<img alt='".$name."' src='".$img."'>
												<div class='cover'>
												<img alt='".$name."' src='".$img."'>
												</div>
											</a>
											<a href='Single_Item.php?pro_id=".$pro_id."' class='product-button'><i class='fa fa-heart'></i> See Details</a>
										</form>
									</div>
									<section>
										<h5>".$name."</h5>
										<span class='product-price'>".$price."</span>
									</section>
								</figure>
								</div>";
				}
			}else{
				echo "<script>alert('Sorry,you did not input anything...');</script>
			  			<script type=text/javascript>location.href = 'index.php';</script>";
			}
			$db->disconnect();
		?>

	</div>

</div>

<div class="margin-top-15"></div>
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
