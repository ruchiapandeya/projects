<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Building-Products</title>
	<!--#include file="header.html"-->
    
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<body>
<p id="back-top" style="display:block;"><a href="#top"><span></span>Back to Top</a></p>

<!-- bodyWrapper 

<div id="bodyWrapper" class="bg_body">
<div class="wrapper-padd"> -->

<div class="wrapper_botttom"> 
	<div class="row_3 ofh">  
		<div id="bodyContent_login" > 
        	<p class="show">
            	<h5><a href="home.php">Home</a> > <a href="#">Registration</a></h5>
            </p>
            	<h2 style="color:#c94812;">My Profile Details</h2>
            	<p class="infoString">&nbsp;&nbsp;<font color="#c94812"><small><strong>NOTE: </strong></small></font> If you already have an account with us, please login at the <a href="login.php"><u>login page</u></a>.
                </p>

				<form name="create_account" action="http://localhost/ideazworld/projects/building-products/osc/catalog/create_account.php" method="post" onsubmit="return check_form(create_account);"><input type="hidden" name="formid" value="4e5e5c3f8d1b6c8d72834439702f8705" /><input type="hidden" name="action" value="process" />

				<div class="contentContainer">
					<div class="contentPadd">
						<h4>Your Personal Details</h4>
							<div class="contentInfoText">

    							<table border="0" cellspacing="2" cellpadding="2" width="100%">
									<tr>
										<td class="fieldKey">Gender:</td>
										<td class="fieldValue radio">
                                        <div><input type="radio" name="gender" value="m" style="background:none;border:0px;" />
                                        &nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div><input type="radio" name="gender" value="f"  style="background:none;border:0px;" />
                                        &nbsp;&nbsp;Female</div>&nbsp;<span class="inputRequirement">*</span>
                                        </td>
                                    </tr>
      
      								<tr>
										<td class="fieldKey">User Name:</td>
                                        <td class="fieldValue"><input type="text" name="username" class="input" />&nbsp;
                                        <span class="inputRequirement">*</span></td>
									</tr>

									<tr>
										<td class="fieldKey">First Name:</td>
										<td class="fieldValue"><input type="text" name="firstname" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span></td>
									</tr>

      								<tr> 
    						            <td class="fieldKey">Last Name:</td>
										<td class="fieldValue"><input type="text" name="lastname" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span></td>
									</tr>

									<tr>
										<td class="fieldKey">Date of Birth:</td>
										<td class="fieldValue"><input type="text" name="dob" id="dob" class="input" />
                                        &nbsp;<span class="inputRequirement">* (eg. MM/DD/YYYY)</span>
										<script type="text/javascript">$('#dob').datepicker({dateFormat: 'mm/dd/yy', changeMonth: true, changeYear: true, yearRange: '-100:+0'});</script></td>
									</tr>

    								<tr>
										 <td class="fieldKey">E-Mail Address:</td>
										 <td class="fieldValue"><input type="text" name="email_address" class="input" />
                                         &nbsp;<span class="inputRequirement">*</span></td>
									</tr>
      
      								<tr>
										<td class="fieldKey">Password:</td>
										<td class="fieldValue"><input type="password" name="password" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span></td>
									</tr>

      								<tr>
										<td class="fieldKey">Password Confirmation:</td>
										<td class="fieldValue"><input type="password" name="confirmation" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span></td>
									</tr>
								</table>
                                
							</div>

  						<h4>Your Address</h4>
							<div class="contentInfoText">
								<table border="0" cellspacing="2" cellpadding="2" width="100%">
									<tr>
										<td class="fieldKey">Street Address:</td>
										<td class="fieldValue"><input type="text" name="street_address" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span></td>
									</tr>

									<tr>
										<td class="fieldKey">Suburb:</td>
										<td class="fieldValue"><input type="text" name="suburb" class="input" />&nbsp;</td>
									</tr>

								 	<tr>
										<td class="fieldKey">Post Code:</td>
										<td class="fieldValue"><input type="text" name="postcode" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span></td>
									</tr>

      								<tr>
										<td class="fieldKey">City:</td>
										<td class="fieldValue"><input type="text" name="city" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span></td>
									</tr>

									<tr>
										<td class="fieldKey">State/Province:</td>
										<td class="fieldValue"><input type="text" name="state" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span>        </td>
									</tr>

									<tr>
										<td class="fieldKey">Country:</td>
										<td class="fieldValue">
        									<select name="country" class="input">
            									<option value="" selected="selected">Please Select</option>
                								<option value="india">India</option>
            								</select>&nbsp;<span class="inputRequirement">*</span></td>
									</tr>
      
      								<tr>
										<td class="fieldKey">Telephone Number:</td>
										<td class="fieldValue"><input type="text" name="telephone" class="input" />
                                        &nbsp;<span class="inputRequirement">*</span></td>
									</tr>
                                    
									<tr>
										<td class="fieldKey">Fax Number:</td>
										<td class="fieldValue"><input type="text" name="fax" class="input" />&nbsp;</td>
									</tr>
      
      								<tr>
										<td class="fieldKey">Web Address:</td>
										<td class="fieldValue"><input type="text" name="web_address" class="input" />&nbsp;</td>
									</tr>
								</table>
							</div>
							<h4>Acknowledgement</h4>
    						<div class="contentInfoText">
								<table border="0" cellspacing="2" cellpadding="2" width="100%">
									<tr>
        								<td class="fieldValue"><p><input type="checkbox" name="" value="1" checked="checked" />
        								Receive members-only deals, offers, promotions and discounts from product suppliers and tradespeople</p>		 										</td>
        							</tr>
        
        							<tr>
        								<td class="fieldValue"><p><input type="checkbox" name="" value="1" checked="checked"/>
        								I have read and accepted the <a href="#"><u>terms and conditions</u></a>, 
                                        <a href="#"><u>privacy policy</u></a>, and <a href="#"><u>website disclaimer</u></a></p></td>
									</tr>
        
       								<tr>
										<td class="fieldValue">&nbsp;How did you hear about us?
											<select name="country" style="width:200px;">
            									<option value="" selected="selected"> -Select- </option>
                                                <option value="india">Google</option>
                								<option value="india">Forum</option>
                                                <option value="india">Yahoo</option>
                                                <option value="india">Friend</option>
                                                <option value="india">Customer</option>
            								</select>&nbsp;<span class="inputRequirement">*</span></td>
                                            
									</tr> 
                                    <tr>
										<td>
      									<label for="code">Write code below > <span id="txtCaptchaDiv" style="color:#F00"></span>
                                        <!-- this is where the script will place the generated code --> 
      									<input type="hidden" id="txtCaptcha" /></label><br />
                                        <!-- this is where the script will place a copy of the code for validation: this is a hidden field -->
      									<input type="text" name="txtInput" id="txtInput" size="30" />
    									</td>
										
									</tr>
                                    
                                    <tr>
                                    	<td><a href="create_account_success.php"><img src="images/submit.png" title="Submit your form" /></a>
                                        </td>
                                    </tr>
                                    	
                                    				
								</table>
							</div>
					</div>
				</div>
				</form>
<script type="text/javascript">
	function checkform(theform){
		var why = "";
		 
		if(theform.txtInput.value == ""){
			why += "- Security code should not be empty.\n";
		}
		if(theform.txtInput.value != ""){
			if(ValidCaptcha(theform.txtInput.value) == false){
				why += "- Security code did not match.\n";
			}
		}
		if(why != ""){
			alert(why);
			return false;
		}
	}
 

//Generates the captcha function    
	var a = Math.ceil(Math.random() * 9)+ '';
	var b = Math.ceil(Math.random() * 9)+ '';       
	var c = Math.ceil(Math.random() * 9)+ '';  
	var d = Math.ceil(Math.random() * 9)+ '';  
	var e = Math.ceil(Math.random() * 9)+ '';  
	  
	var code = a + b + c + d + e;
	document.getElementById("txtCaptcha").value = code;
	document.getElementById("txtCaptchaDiv").innerHTML = code;	

// Validate the Entered input aganist the generated security code function   
function ValidCaptcha(){
	var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
	var str2 = removeSpaces(document.getElementById('txtInput').value);
	if (str1 == str2){
		return true;	
	}else{
		return false;
	}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
	return string.split(' ').join('');
}
</script>
			
        </div> <!-- bodyContent //-->

            
		<div class="shadow">
          <h3 class="shadow_box">Building Projects</h3> 
		</div> 
		
                 <div class="menus">
					<ul class="the_menu">
						<li class="sub"><a href="#nogo"><strong>Bathrooms</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li class="sub"><a href="#nogo"><strong>Pivot Doors</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
									<ul>
                                    	<li><a href="#nogo"> <strong>Staching Doors</strong></a> </li>
										<li><a href="#nogo"><strong>Slidding Doors</strong></a></li>
										<li><a href="#nogo"> <strong>Hinges</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
											
										</li>
									</ul>
								</li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Bricks</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Doors and Locks</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li class="sub"><a href="#nogo"><strong>Pivot Doors</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
									<ul>
                                    	<li><a href="#nogo"> <strong>Staching Doors</strong></a> </li>
										<li><a href="#nogo"><strong>Slidding Doors</strong></a></li>
										<li><a href="#nogo"> <strong>Hinges</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
											
										</li>
									</ul>
								</li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
                        <li class="sub"><a href="#nogo"><strong>Floor Coverings</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li><a href="#nogo"><strong>Garage Doors</strong></a></li>
						<li class="sub"><a href="#nogo"><strong>Heating & Cooling</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Hot Water</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Insulation</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Kitchen | Laundry</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li><a href="#nogo"><strong>Kitchen | Laundry Appliances</strong></a></li>
						<li class="sub"><a href="#nogo"><strong>Landscaping & Outdoors</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Lighting</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Paint</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Roofing</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li><a href="#nogo"><strong>Sheds and Garages</strong></a></li>		
                        <li><a href="#nogo"><strong>Solar Electricity</strong></a></li>
						<li class="sub"><a href="#nogo"><strong>Water Tanks</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Window Furnishing</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Windows</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li><a href="#nogo"><strong>Render | External Cladding</strong></a></li>
						<li class="sub"><a href="#nogo"><strong>External Cladding</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						
					</ul>
				</div>

	</div> 

</div>
    <!--#include file="footer.html"-->
<script type="text/javascript">

$('.productListTable tr:nth-child(even)').addClass('alt');

</script>

   

    

    

<!-- </div>

</div>		 bodyWrapper //-->

</body>  

<!--[if IE]>

  <link href="css/ie_style.css" rel="stylesheet" type="text/css" />

<![endif]-->

  <script type="text/javascript" src="ext/js/imagepreloader.js"></script>

  <script type="text/javascript">

		preloadImages([

			'images/user_menu.gif',

			'images/tail_menu_act.gif',

			'images/bg_list.png',

			'images/bg_main.png']);

	</script>

</html> 

