<!DOCTYPE html>

<!--
/*
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
-->
	
	
<html>
	<head>
		<jsp:include page="header.jsp" />
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/form.css?v=2">
		
</head>
<body>
	
	<section>
		<div class="buttons_no_padding">
			Sign Up For New User
		</div>	
		<div class="buttons tiptip">
			<form class="signUp">
				
					<label>Personal Details</label>
				
				<p>
					<h4>Name <span>*</span></h4>
					<input type="text" size="60" class="input-text" required/>
				</p>
				<p>
					<h4>Last Name <span>*</span></h4>
					<input type="text" size="60" class="input-text" required/>
				</p>
				<p>
					<h4>Email Address <span>*</span></h4>
					<input type="email" size="60" class="input-text" required/>
				</p>
				<p>
					<h4>User Id <span>*</span></h4>
					<input type="text" size="60" class="input-text" required/>
				</p>
				<p>
					<h4>Password <span>*</span></h4>
					<input type="password" size="60" class="input-text" required/>
				</p>
				<p>
					<h4>Retype Password <span>*</span></h4>
					<input type="password" size="60" class="input-text" required/>
				</p>
				<p>
					<h4>Phone <span>*</span></h4>
					<input type="tel" size="60" class="input-text" required/>
				</p>
				<p>
					<h4>Date of Birth <span>*</span></h4>
					<input type="date" size="60" class="input-text" required/>
				</p>
				
				<p>
					<h4>Gender <span>*</span></h4>
					<input type="radio" name="gender" class="radio"/> Male <span class="blank-space"></span>
					<input type="radio" name="gender" class="radio" checked="checked"/> Female <span class="blank-space"></span>
				</p>
				<p>
					<h4>Checkbox <span>*</span></h4>
					<input type="checkbox" name="one" class="checkbox"/> normal checkbox <span class="blank-space"></span>
					<input type="checkbox" name="one" class="checkbox" checked="checked"/> checkbox checked <span class="blank-space"></span>
					<input type="checkbox" name="one" class="checkbox" disabled="disabled"/> checkbox disabled
				</p>
				<p>
					<h4>Dropdown List <span>*</span></h4>
					<select class="select">
						<option value="">Choose One of Select Option </option>
						<option value="">Select Option Number 1</option>
						<option value="">Select Option Number 2</option>
						<option value="">Select Option Number 3</option>
					</select>
					<span class="select-arrow"></span>
				</p>
				<p style="margin-left: 6%;">
					<button class="action green"><span class="label">Save</span></button>
					<button class="action blue"><span class="label">Reset</span></button>
					<button class="action red"><span class="label">Cancel</span></button><br>
					
				</p>
			</form>
		</div>
		
	</section>
	<jsp:include page="footer.jsp" />
	
	<!-- GA -->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-2260508-2");
			pageTracker._trackPageview();
		} catch(err) {}</script>
	<!-- GA -->
</body>
</html>