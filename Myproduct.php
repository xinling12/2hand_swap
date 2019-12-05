<html>

<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>My product</title>

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
		<h2>My Product</h2>
	</div>
</div>
</section>


<div class="container cart">


	<!-- Cart Totals -->
	<div class="sixteen columns">
		<h3 class="headline">My Product On 2hand Swap</h3><span class="line margin-bottom-35"></span><div class="clearfix"></div>
	</div>

	<div class="sixteen columns">

		<!-- Cart -->
		<table class="cart-table responsive-table">

			<tr>
				<th></th>
				<th>Product Name</th>
				<th>Price</th>
				<th> Stock Status</th>
				<th></th>
				<th></th>
			</tr>

			<?php
			$username = $_SESSION['email'];
			$sql = "select * from view_pro_cus where email='".$username."';";
			$result = $conn->query($sql);
			$num = mysqli_num_rows($result);
			while($row = mysqli_fetch_array($result)){
				$image = $row['img'];
				$name = $row['name'];
				$price = $row['price'];
				$stock = $row['stock'];
				$pro_id = $row['pro_id'];
				echo"			<form action='deletepro.php' method='get'
								<tr>
									<td><img src=".$image." alt=".$name."></td>
									<td class='cart-title'><a href='Single_Item.php?pro_id=".$pro_id."'>".$name."</a></td>
									<td>".$price."&nbspAUD</td>
									<td>
										".$stock."
									</td>
									<td><a href='deletepro.php?pro_id=".$pro_id."' class='cart-remove'></a></td>
								</tr>
								</form>";
			}
			$db->disconnect();
			?>
			</table>
			<br>
			<div class="clearfix"></div>
			<section class="comments">
					<!-- Change Details -->
			<!-- Change Details -->
				<a href="#small-dialog" class="popup-with-zoom-anim button color margin-left-0">Add Product</a>

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
					<h3 class="headline">Add Product</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

					<!-- Form -->
					<form action="product.php" method="post">
						<div class="form-row">
						    <div class="form-group col-md-4" id="firstname">
						      <label>Product Name</label>
						      <input type="text" class="form-control" name="pro_name" placeholder="Dell Laptop">
						    </div>
						    <div class="form-group col-md-7" id="lastname">
						      <label>Type</label>
						      <input type="text" class="form-control" name="type" placeholder="15 5000 15.6">
						    </div>						    
						</div>
						<div class="form-row">
						    <div class="form-group col-md-4">
							  <label>Price</label>
						      <input type="text" class="form-control" name="price" placeholder="1500">
							</div>
							<div class="form-group col-md-1">
							  <label></label>
							  <p></p>
						      <p>AUD</p>
							</div>						    
						    <div class="form-group col-md-3">
						      <label>Qty</label>
						      <input type="text" class="form-control" name="stock" placeholder="1">
							</div>
						</div>								    
						<div class="form-row"> 
							<div class="form-group">
						      <label>Description</label>
						      <textarea cols="80" rows="3" name="description" placeholder="Write your description here..."></textarea>
						    </div>
						</div>															
						<input type="submit" value="Submit" name="submit">
						<div class="clearfix"></div><br>
					</form>
						<div class="container">
							<form action="upload_product.php" method="post" enctype="multipart/form-data">
								<h4>Change Product Picture:</h4>
						    	Select image to upload:
						    	<input type="file" value="choose picture" name="fileToUpload" id="fileToUpload">
						    	<input type="submit" value="Upload Image" name="submit">
							</form>
						</div><br>												
				</div>
			</section>
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
