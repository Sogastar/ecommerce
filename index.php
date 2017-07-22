<!DOCTYPE>
<?php
include("functions/functions.php");
?>
 
<html>
	<head>
			<title>My Online Shop</title>
			
			
			<link rel="stylesheet" href="styles/style.css" media="all">
	</head>


<body>
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		<p>This is header</p>
		<img id="logo" src="images/logo.gif"/>
		<img id="banner" src="images/ad_banner.gif"/>
		
		
		
		</div>
		<!--Header ends here-->
		
		<!--Navigation bar starts here-->
		<div class="menubar">
		
			<ul id="menu">
			
				<li><a href ="#">Home</a></li>
				<li><a href ="#">All products</a></li>
				<li><a href ="#">My account</a></li>
				<li><a href ="#">Sign up</a></li>
				<li><a href ="#">Shopping card</a></li>
				<li><a href ="#">Contact us</a></li>
				
			</ul>
			
			
				<div id="form">
					<form method = "get" action="results.php" enctype="multipart/form-data">
						<input type="text" name ="user_query" placeholder="SEARCH A PRODUCT"/>
						<input type="submit" name ="search" value ="Search"/>
					</form>
				</div>
		</div>
		<!--Navigation bar ends here-->
		
		<!--Content starts here-->
		<div class="content_wrapper">
			
			<div id="sidebar">
			
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
					<!--ovo uklonimo i dodamo php za dinamicki popis iz baze
					<li><a href="#">Laptops</a></li>
					<li><a href="#">Computers</a></li>
					<li><a href="#">Cameras</a></li>
					<li><a href="#">Mobiles</a></li>
					<li><a href="#">IPads</a></li>
					<li><a href="#">Tablets</a></li>
				    -->
					<?php getCats(); ?>
					
				</ul>
				
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					<!--
					<li><a href="#">HP</a></li>
					<li><a href="#">DELL</a></li>
					<li><a href="#">Motorola</a></li>
					<li><a href="#">Sony</a></li>
					<li><a href="#">LG</a></li>
					<li><a href="#">Apple</a></li>
					-->
					<?php getBrands(); ?>
				</ul>
			
			</div>
		
			<div id="content_area">This is content area</div>
		</div>
		<!--Content wrapper ends here-->
		
		<div id="footer">This is the footer
		
		<h2 style ="text-align:center; padding-top:30 px;">&copy; 2017 by Soga</h2>
		
		</div>
	</div>
	<!--Main Container ends here-->


</body>

</html>	