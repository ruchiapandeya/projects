
<link rel="stylesheet" type="text/css" href="css/main.css" />
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
<link type="text/css" href="css/reset.css" rel="stylesheet" />




<div align="center">
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1 style="font-size:16px">Welcome to techjobpost</h1>
					
				<p class="grey" style="font-size:12px; line-height:16px;">This website provides you the ability to search and browse through the various IT Jobs without requiring any registration. But in order to get Jobs and/or Find  any freelancer, you need a profile created with valid login credentials.</p>
				
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="#" method="post">
					<h1 style="font-size:16px">Member Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#"  style="font-size:10px">Lost your password?</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="#" method="post">
					<h1 style="font-size:16px">Not a member yet? Sign Up!</h1>				
					<label class="grey" for="signup">Username:</label>
					<input class="field" type="text" name="signup" id="signup" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li  style="font-size:10px;">Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#" style="font-size:10px;">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->   

    <!-- Top Add. strats from here -->
   <div id="header">
      
    <!--navi-->
   <div id="menu" align="left">
		<ul style="width:80%;">
			<li class="current_page_item"><a href="home.php" title="Home"><img src="images/home_button.png" style="margin-left:0px; border:none;"/></a></li>
			<li><a href="advance_search.php">Advance Search</a></li>
			<li><a href="resume_step1.php">Post Resume</a></li>
			<li><a href="resume_services.php">Resume Service</a></li>
            <li><a href="employers_login.php">Employer's Login</a></li>
			<li><a href="new_employers.php">New Employer</a></li>
            <li><a href="#" style="background-image:none;"></a></li>
		</ul>
	</div>
  <div class="container" style="margin-top:0%;">
    <div id="contactFormContainer">
        <div id="contactForm">
        	<div class="loader"></div>
			<div class="bar"></div>
            <form action="mail.php" class="contactForm" name="cform" method="post">
                <h1>Job Search By Keyword<br /></h1>
                <div class="input_boxes">
                    <p><label for="name">Keyword</label><span class="name-missing">Please enter Valid Keyword</span><br />
                    <input id="name" type="text" value="" name="name" /></p>
                    <p><label for="e-mail">Location</label><span class="email-missing">Please enter a valid Location</span><br />
                    <input id="e-mail" type="text" value="" name="email" /></p>
                 </div>   
                 <input class="submit" type="submit" name="submit" value="Submit Form" onfocus="this.blur()"  />
            </form>
      </div>
      <div class="contact"></div>    
  </div>
</div>
<div id="backgroundPopup"></div>


<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>
  </div>

