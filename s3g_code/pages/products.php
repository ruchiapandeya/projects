<!DOCTYPE html>

<html>
<head>
    <title>S3G</title>
    <?php include ('../includes/base.html') ?>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery.als-1.2.min.js"></script>
                <script type="text/javascript" src="../js/settingsEN.js"></script>
                <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <script>
        $("#demo2").als({
	visible_items: 4,
	scrolling_items: 1,
	orientation: "horizontal",
	circular: "yes",
	autoscroll: "no"
});
    </script>
</head>
<body>
    <header>

        <div id="sec">
            <div class="logo">
                <a href="../pages/home.php"><img src="../images/logo.png"></a>
            </div>
            <!--<div class="select-style">
                 <select>
                   <option value="english">English</option>
                   <option value="hindi">Hindi</option>
                   <option value="spanish">Spanish</option>
                 </select>
             </div>-->
            <nav>
                <ul style=" margin-top: 0.7%;">
                    <li><a class="" href="../pages/home.php">Home</a></li>
                    <li><a class="" href="../pages/service.php">Services</a></li>
                    <li><a class="active" href="../pages/products.php">Products</a></li>
                    <li><a class="" href="../pages/about_us.php">About Us</a></li>
                    <li><a class="" href="../pages/contact_us.php" class="utility">Contact Us</a></li>
                </ul>
            </nav>
        </div>
            <div class="seprator"></div>
    </header>
    <section>
        <div id="container_2">
            <h1 style="margin-bottom: 300px; margin-top: 110px;">Coming Soon..</h1>
            
        </div>  
            
        
    </section>
    <?php include ('../includes/footer.html') ?>
</body>
</html>
