<!DOCTYPE html>

<html>
<head>
    <title>S3G</title>
    <?php include ('../includes/base.html') ?>
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery.als-1.2.min.js"></script>
                <script type="text/javascript" src="../js/settingsEN.js"></script>
                <link rel="stylesheet" type="text/css" href="../css/style.css"/>
                <script src="../js/modernizr.custom.js"></script>
    <script>
        $("#demo2").als({
	visible_items: 4,
	scrolling_items: 1,
	orientation: "horizontal",
	circular: "yes",
	autoscroll: "no"
});
    </script>
   <style>
    .cbp-qtrotator {
    position: relative;
    margin: 1em auto 5em auto;

}
 
.cbp-qtrotator .cbp-qtcontent {
    position: absolute;
    border-top: 1px solid #f4f4f4;
    padding: 2em 0;
    top: 0;
    z-index: 0;
    opacity: 0;
}
 
.no-js .cbp-qtrotator .cbp-qtcontent {
    border-bottom: none;
}
 
/* Currently visible */
.cbp-qtrotator .cbp-qtcontent.cbp-qtcurrent,
.no-js .cbp-qtrotator .cbp-qtcontent {
    position: relative; 
    z-index: 100;
    pointer-events: auto;
    opacity: 1;
}
 
.cbp-qtrotator .cbp-qtcontent:before,
.cbp-qtrotator .cbp-qtcontent:after {
    content: " ";
    display: table;
}
 
.cbp-qtrotator .cbp-qtcontent:after {
    clear: both;
}
 
.cbp-qtprogress {
    position: absolute;
    background: #47a3da;
    height: 1px;
    width: 0%;
    top: 0;
    z-index: 1000;
}
 
.cbp-qtrotator blockquote {
    margin: 0;
    padding: 0;
}
 
.cbp-qtrotator blockquote p {
    font-size: 16px;
    text-align: justify;
    color: #888;
    font-weight: 300;
    margin: 0.4em 0 1em;
}
 
.cbp-qtrotator blockquote footer {
    font-size: 1.2em;
}
 
.cbp-qtrotator blockquote footer:before {
    content: ' ';
}
 
.cbp-qtrotator .cbp-qtcontent img {
   
    border: 1px solid #f7f5f5;
    outline: 1px solid #dddddd;
    margin-left: 46%;
}
 
/* Example for media query */
@media screen and (max-width: 30.6em) { 
 
    .cbp-qtrotator {
        font-size: 70%;
    }
 
    .cbp-qtrotator img {
        width: 80px;
    }
 
}
   </style>
   <script>
        /*function formValidationAction() {
            var form = document.getElementById("contact_form");
            var senderName = form.senderName;
            var senderEmail = form.senderEmail;
            var senderMessage = form.senderMessage;
            var error = new Array();
            if (senderName == "") {
                error.push("Please fill in the name.");
            }
            if (senderEmail == "") {
                error.push("Please fill in the email.");
            }
            if (senderMessage == "") {
                error.push("Please fill in the message.");
            }
            var errorMessage = "";
            if (error.length > 0) {
                for (var i=0;i<error.length;i++) { 
                    errorMessage = errorMessage + "\n" + error[i];
                }
            }
            if (error != "") {
                document.getElementById("messageDiv").innerHTML = errorMessage;
                document.getElementById("messageDiv").style.display = "block";
                return;
            }
            form.submit();
        }*/
        
        function onLoad() {
            if ('<?php echo $_GET["submitMessage"]; ?>' != "") {
                document.getElementById("messageDiv").innerHTML = '<?php echo $_GET["submitMessage"]; ?>';
                document.getElementById("messageDiv").style.display = "block";
            }
        }
   </script>
</head>
<body onLoad="onLoad()">
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
                    <li><a class="" href="../pages/about_us.php">About Us</a></li>
                    <li><a class="active" href="../pages/contact_us.php" class="utility">Contact Us</a></li>
                </ul>
            </nav>
        </div>
            <div class="seprator"></div>
    </header>
    <section>
        <div id="container_2">
            
        
        <h1>Contact Us</h1>
            <h2 style="color: #333333; font-size: 16px; margin-bottom: 20px;">Send a mail: <br><br><a href="mailto:admin@s3gtech.in">admin@s3gtech.in</a><br><a href="mailto:contact@s3gtech.in">contact@s3gtech.in</a></h2><br>
            <p>OR</p><br>
            <p style="color: #333333; font-size: 16px;">Tell us a little about you and your project and one of our Business Development Consultants will reach out to you within one Business Day.</p>
        </div>
            <div id="feedback">
                <!--<h1>Clients Feedback</h1>
                    <div class="main">
				<div id="cbp-qtrotator" class="cbp-qtrotator">
					<div class="cbp-qtcontent">
						<blockquote>
						  <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                                                        "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.."</p>
						  <p style=" font-size: 16px; color: #49a56f;">- Pino Caruso</p><img src="../images/client_1.png" alt="img01" />
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<blockquote>
						  <p>"Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet."
                                                  Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet."</p>
						  <p style=" font-size: 16px; color: #49a56f;">- suresh</p><img src="../images/client_2.png"" alt="img02" />
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<blockquote>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...</p>
						  <p style=" font-size: 16px; color: #49a56f;">- Moby</p><img src="../images/client_3.png"" alt="img03" />
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<blockquote>
						  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                                  Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet."</p>
						  <p style=" font-size: 16px; color: #49a56f;">- Lorem Ipsim</p><img src="../images/client_4.png"" alt="img04" />
						</blockquote>
					</div>
				</div>
			</div>-->
            </div>
            <div id="messageDiv" style="display:none"></div>
            <form class="contact_form" action="send_email.php" method="post" id="contact_form">
                <ul>
                    <li>
                        <label for="name">Name:</label>
                        <input name="senderName" type="text" placeholder="John Doe" required />
                    </li>
                    <li>
                        <label for="email">Email:</label>
                        <input name="senderEmail" type="email" placeholder="john_doe@example.com" required />
                    </li>
                    <li>
                        <label for="message">Message:</label>
                        <textarea name="senderMessage" cols="40" rows="6" required ></textarea>
                    </li>
                    <li>
                            <button class="submit" type="submit">Submit Form</button>
                    </li>
                </ul>
            </form>
		<script src="../js/jquery.cbpQTRotator.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>
    </section>
    <?php include ('../includes/footer.html') ?>
</body>
</html>
