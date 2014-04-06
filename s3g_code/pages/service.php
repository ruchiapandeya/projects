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
                    <li><a class="active" href="../pages/service.php">Services</a></li>
                    <li><a class="" href="../pages/products.php">Products</a></li>
                    <li><a class="" href="../pages/about_us.php">About Us</a></li>
                    <li><a class="" href="../pages/contact_us.php" class="utility">Contact Us</a></li>
                </ul>
            </nav>
        </div>
            <div class="seprator"></div>
    </header>
    <section>
        <div id="container_1">
            <h1>Happiness is not the absence of problems ,  it's the ability to deal with them.</h1>
            <p>
                We strive in generating tremendous value for our clients in their businesses, big or small, at cost effective prices and faster delivery times
            </p>
            <img style="margin-top: -15%; float: right; padding: 0px 0px 20px 20px;" src="../images/services.png">
        </div>
        <div id="box1">
            <h2><span class="strong">Software Design and Delivery</span>  </h2>
            <p>
                We are a group of highly dedicated individuals who envision, design and deliver custom software for our clients' toughest challenges. We believe innovation is
                critical and failure is not an option. <br><br>We keep things simple and employ the best cutting edge thinking practices and tried and tested approches to give our clients an
                edge , exciting new customer experiences , powered by latest technologies. We like challenges and have the skill,experitise and adaptability to provide unlimited
                solutions as long as it has potential to drive ambitious results.
            </p><br><br>
            <h2><span class="strong">Learning and Education</span>  </h2>
            <p>
                With almost a decade of consulting experience in the field of Banking , Retail , Telecommunication and Testing we believe in preparing the next generation of engineers
                before they step into the infinte space of the Corporate Cosmos. <br><br>We provide highly specialized and effective trainings and workshops in some of the most critical areas
                of corporate life which is imperative to the success of an individual like communication, policy awareness , finance , Best practices , Delivery frameworks at the most
                affordable prices.
            </p><br><br><br><br>
        </div>
        
        
    </section>
    <?php include ('../includes/footer.html') ?>
</body>
</html>
