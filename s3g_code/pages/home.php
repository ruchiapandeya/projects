<!DOCTYPE html>

<html>
<head>
    <title>S3G</title>
    <?php include ('../includes/base.html') ?>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery.als-1.2.min.js"></script>
                <script type="text/javascript" src="../js/settingsEN.js"></script>
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
                    <li><a class="active" href="../pages/home.php">Home</a></li>
                    <li><a class="" href="../pages/service.php">Services</a></li>
                    <li><a class="" href="../pages/products.php">Products</a></li>
                    <li><a class="" href="../pages/about_us.php">About Us</a></li>
                    <li><a class="" href="../pages/contact_us.php" class="utility">Contact Us</a></li>
                </ul>
            </nav>
        </div>
            <div class="seprator"></div>
    </header>
    <section>
        <div id="container">
            <h2><span class="strong">Mission Title</span></h2>
            <p>
                "S3G Technology Solutions is a partnership to carry on the business of Learning & Development for graduates and other professionals, Software and hardware services,
                software/ hardware product development, software consulting, placement consultancy and expand the same to any other allied business/es as may be decided upon from time to time."
            </p>
            <a href="../pages/service.php" class='circle_one'><img class="circle_img" src="../images/circle_one.png"></a>
            <a href="../pages/service.php" class='circle_two'><img class="circle_img" src="../images/circle_two.png"></a>
            <a href="../pages/service.php" class='circle_three'><img class="circle_img" src="../images/circle_three.png"></a>
        </div>
        <div id="mix_text">
                <ul>
                    <li><h1>Innovative <span class="strong">software delivery</span> for amazing customer experiences<br></h1></li>
                    <li><h1 style="margin-left: 37%; margin-top: -10.2%;">Pioneering <span class="strong">tools and training</span> for teams who aspire to be great</h1></li>
                    <li><h1 style="margin-left: 74%; margin-top: -10.2%;">Insightful <span class="strong">consulting</span> <br>for our clients' toughest challenges</h1></li>
                    <a id="button" href="../pages/service.php">Read More</a>
                    <a id="button" href="../pages/service.php" style="margin-left: 31%;">Read More</a>
                    <a id="button" href="../pages/service.php" style="margin-left: 29%;">Read More</a>
                </ul>
        </div>
        <!--<div id="clients">
            <h2 style="background-color: #ffffff; color: #777777; margin-left: 44%; padding: 0px 0px 0px 20px; width: 80px; margin-top: -2%; font-size: 18px;">Clients</h2>
                <div class="als-container" id="demo2">
                        <span class="als-prev"><img src="../images/thin_left_arrow_333.png" alt="prev" title="previous" /></span>
                            <div class="als-viewport">
                                <ul class="als-wrapper">
                                    <li class="als-item"><img src="../images/client1.png" /></li>
                                    <li class="als-item"><img src="../images/client2.png" /></li>
                                    <li class="als-item"><img src="../images/client3.png" /></li>
                                    <li class="als-item"><img src="../images/client6.png" /></li>
                                    <li class="als-item"><img src="../images/client5.png" /></li>
                                    <li class="als-item"><img src="../images/client7.png" /></li>

                                </ul>
                            </div>
                        <span class="als-next"><img src="../images/thin_right_arrow_333.png" alt="next" title="next" /></span>
                </div>
        </div>-->
        <!--<div id="news">
            <ul>
                <li>
                    <h1>Latest News </h1><div style=" margin-left: 1%; margin-top: -3.7% "><a id="button" href="#">Read More</a></div>
                    <div class="image">
                        
                    </div>
                    
                </li>
                <li>
                    <p style="padding-left: 40px; margin-left: 30%; margin-top: -28%;">
                        <span style="color: #27a6de; text-decoration: underline;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br><br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer. Galley of type and scrambled it to make a type specimen book.
                    </p>
                </li>
                <li>
                    <p class="mix_script" style="font-size: 18px; line-height: 24px; margin-left: 70%; margin-top: -34.5%;">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </li>
            </ul>
        </div>
            <div style="margin-top: -44%; margin-bottom: 18%;">
                <img src="../images/line.png" style="margin-left:28%;">
                <img src="../images/line.png" style="margin-left:37%;">
            </div>
        <div>
            
        </div>-->
    </section>
    <?php include ('../includes/footer.html') ?>
</body>
</html>
