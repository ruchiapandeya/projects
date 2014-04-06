<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Building-Products</title>
	<?php include("headerNew.html"); ?>
    
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<!--[if IE 9]><body class="ie9"><![endif]-->
<style type="text/css">
@-moz-document url-prefix() {
   .form-wrapper button{font: bold 14px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';}
}
</style>

<body>
<div align="center">
	<div id="homepageWrapper" style="margin-top:90px;" >
		<div id="searchOption">
        	<a href="home.php" class="current">Products</a>
            <a href="#">Manufacturer</a>
            <a href="#">Supplier</a>
            <a href="#">Service Provider</a>
        </div>
        <div style="padding-bottom:80px; padding-top:8px;" >
			<form class="form-wrapper cf">
				<input type="text" placeholder="Search here..." required>
				<button type="submit">Search</button>
			</form>
        </div>
		<div id="searchMenu">
			<ul class="green">
            	<li><span style="color:#FF4F00; padding-right:5px;">Explore : </span></li>
                <li><a href="#" title="Products" ><span>Products</span></a></li>
                <li><a href="#" title="Manufacturer"><span>manufacturer</span></a></li>
                <li><a href="#" title="Supplier"><span>Supplier</span></a></li>
                <li><a href="#" title="Service Provider"><span>Service Provider</span></a></li>
			</ul>
		</div>
             <h2 id="scrollerHeadning">What's New</h2>
        <div id="ca-container" class="ca-container">
   
				<div class="ca-wrapper">
					<div class="ca-item ca-item-1">
						<div class="ca-item-main">					
							<a href="#"><img src="images/products/053.png" style="height:120px;" title="Product 1"></a>
						</div>
						
					</div>
					<div class="ca-item ca-item-2">
						<div class="ca-item-main">
							<a href="#"><img src="images/products/045.png" style="height:120px;" title="Product 2"></a>
						</div>
					</div>
					<div class="ca-item ca-item-3">
						<div class="ca-item-main">
							<a href="#"><img src="images/products/048.png" style="height:120px;" title="Product 3"></a>
						</div>
					</div>
					<div class="ca-item ca-item-4">
						<div class="ca-item-main">
							<a href="#"><img src="images/products/047.png" style="height:120px;" title="Product 4"></a>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>

<script type="text/javascript" src="ext/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="ext/js/jquery.contentcarousel.js"></script>
    <script type="text/javascript">
			$('#ca-container').contentcarousel();
		</script>
        <?php include("footer.html"); ?>
</body>
</html>