<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	
	
	<link rel="stylesheet" href="../css/layout.css">
</head>
<body>

	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form action="/invenio/loginvalidate" method="post">
				<h2>Login</h2>
				<p><input id="userid" name="userid" type="text" placeholder="Username"></p>
				<p><input id="password" name="password" type="password" placeholder="Password"></p>
				<label for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</label>
				<button type="submit"></button>
			<form>
		</div>

	
		<p class="forgot"><a href="#">Forgot your password? &nbsp;&nbsp;&nbsp;</a><a href="sign_up.jsp"> Sign Up.</a></p>


	</div><!-- container -->

	
	
<!-- End Document -->
</body>
</html>