<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
*                   	{ margin:0; padding:0; outline:none; }
body                	{ font-size:62.5%; font-family:Arial, Helvetica, sans-serif;
                      	background: #c434d9 url(images/body_bg.png) repeat-x;
												margin-top:200px; margin-left:60px; }

#contact_form					{ width:520px; margin:0 auto; height:300px; padding:10px 0px 0px 40px;
														margin-top:-30px;
												background: transparent url(images/form_bg.png);
                        position:relative; }
form fieldset					{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size:1.2em;
												margin:0px 0px 20px 0px; width:578px; position:relative;
												border:0;display:block; padding: 0px 10px 8px; }
form fieldset legend	{ border-width:1px; border-style:solid; border-color:#BBBB66; color:#3D7169;
												font-weight:bold; font-variant:small-caps; font-size:140%; padding:4px 8px;
												margin:0px 0px 10px 0px; position:relative; top: -12px; background:white; }
label									{ font-size:90%; display:block; float:left; width:10em; text-align:right;
												margin:.2em .2em 0 0; color:#9933CC; font-weight:bold;padding:8px 0px; }
label.error           { font-weight:normal;color:red;text-align:left;width:140px; padding-left:25px;
                        background: transparent url(images/cancel.png) no-repeat scroll left; }
input.text-input			{ margin:4px;padding:2px 0;color:#333; }

label#name_label      { position:absolute; top:0; left:0; }
input#name            { position:absolute; top:0; left:110px; }
label#name_error      { position:absolute; top:22px; left:120px; }

label#email_label     { position:absolute; top:45px; left:0px; }
input#email           { position:absolute; top:45px; left:110px; }
label#email_error      { position:absolute; top:67px; left:120px; }

label#password_label     { position:absolute; top:90px; left:0px; }
input#password           { position:absolute; top:90px; left:110px; }
label#password_error      { position:absolute; top:120px; left:100px; width:200px; font-size:10px; color:#9933CC;}
.button					{ position:absolute; top:150px; left:115px; background-image:url(images/login_admin.png); width:60px; height:25px; }



</style>
</head>

<body>
<img src="images/logo_login.png"  style="margin-top:-150px; margin-left:330px;"/>

<div id="contact_form">
  <form name="contact" method="post" action="">
    <fieldset>
     
      <label for="email" id="email_label">User Name</label>
      <input type="text" name="email" id="email" size="30" value="" class="text-input" />
      
      <label for="password" id="password_label">Password</label>
      <input type="password" name="password" id="password" size="30" value="" class="text-input" />
      <label for="phone" id="password_error"><a href="forgot_password.html">Forgot Password</a> || <a href="consultant_signup.html">SignUp Now</a></label>
      <br />
      <a href="#" class="button"><img src="images/login_admin.png" border="none" /></a>
     
    </fieldset>
  </form>
  <img src="images/girl.png"  style="margin-left:-280px; margin-top:-63px;" />
</div>
</body>
</html>
