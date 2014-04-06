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
                    <li><a class="" href="../pages/products.php">Products</a></li>
                    <li><a class="active" href="../pages/about_us.php">About Us</a></li>
                    <li><a class="" href="../pages/contact_us.php" class="utility">Contact Us</a></li>
                </ul>
            </nav>
        </div>
            <div class="seprator"></div>
    </header>
    <section>
        <div id="container_2">
            <h1>A group of passionate individuals whose purpose is to create simple solutions for real world complex problems, while advocating for positive social change.</h1>
            <h1><span class="strong">Our Mission</span></h1>
            <p style="width: 960px;">S3G is to provide cost effective and simple software solutions which would facilitate a sustainable business regardless of its complexity. We also believe in providing the
            right education,learning and awareness for new experts to be able to deliver better results ethically.</p><br>
        </div>  
            <ul id="left_box">
                <h1><span class="strong">Our Team</span></h1><br>
                <li>
                    <img class="profile" src="../images/girish.png">
                    <p style="font-family: 'segoe_scriptregular'; color: #49a56f; margin-left: 10%">Girish Babu.<br>
                        <span style="color: #777777">Advisor</span><br>
                        <span style="color: #777777">Bangalore, K.A, India</span><br>
                        <a href="http://www.linkedin.com/profile/view?id=41948581&locale=en_US&trk=tyah&trkInfo=tas%3Agiri%2Cidx%3A2-1-2">View Linkedin Profile</a>
                    </p>
                </li><br>
                <li>
                    <img class="profile" src="../images/sandesh.png">
                    <p style="font-family: 'segoe_scriptregular'; margin-left: 10%; color: #49a56f;">Sriram Chakravarthi<br>
                        <span style="color: #777777">Advisor</span><br>
                        <span style="color: #777777">Bangalore, K.A, India</span><br>
                        <a href="#">View Linkedin Profile</a>
                    </p>
                </li>
            </div>
            <ul style="margin-top: -28%; margin-left: 50%; list-style: none;">
                <li>
                    <img style=" margin-top: -36%;" class="profile" src="../images/sanju.png">
                    <p style="font-family: 'segoe_scriptregular'; margin-left: 22%; color: #49a56f;">Sanju Anantharaman<br>
                        <span style="color: #777777">Advisor</span><br>
                        <span style="color: #777777">Bangalore, K.A, India</span><br>
                        <a href="#">View Linkedin Profile</a>
                    </p>
                </li><br>
                <li>
                    <img class="profile" src="../images/sandesh.png">
                    <p style="font-family: 'segoe_scriptregular';  margin-left: 22%;   color: #49a56f;">Sandesh Gitte <br>
                        <span style="color: #777777">Advisor</span><br>
                        <span style="color: #777777">Bangalore, K.A, India</span><br>
                        <a href="#">View Linkedin Profile</a>
                    </p>
                </li><br><br><br>
            </ul>
        
    </section>
    <?php include ('../includes/footer.html') ?>
</body>
</html>
