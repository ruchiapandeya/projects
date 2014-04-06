

<link rel="stylesheet" type="text/css" href="../js/valid/jquery.validate.css" />
<style type="text/css">
/* All form elements are within the definition list for this example */
body                	{ font-size:62.5%; font-family:Arial, Helvetica, sans-serif;
                      	background: #c434d9 url(images/body_bg.png) repeat-x;
												margin-top:200px; margin-left:60px; }
input{border:1px solid lightblue; height:18px;}
select{border:1px solid lightblue;}
textarea{border:1px solid lightblue;}
dl {
	font:normal 12px/15px Arial;
    position: relative;
    width: 350px;
}
dt {
    clear: both;
    float:left;
    width: 130px;
    padding: 4px 0 2px 60px;
    text-align: left;
}
dd {
    float: left;
    width: 320px;
    margin: 0 0 20px 200px;
    padding-left: 6px;
	margin-top:-24px;
}
.ie7 dd {
    float: left;
    width: 200px;
    margin: 0 0 20px 100px;
    padding-left: 6px;
	margin-top:-24px;
}

/* The hint to Hide and Show */
.hint {
   	display: none;
    position: absolute;
    right: -450px;
    width: 200px;
    margin-top: -18px;
    border: 1px solid #c93;
    padding: 10px 12px;
    /* to fix IE6, I can't just declare a background-color,
    I must do a bg image, too!  So I'm duplicating the pointer.gif
    image, and positioning it so that it doesn't show up
    within the box */
    background: #ffc url(../images/pointer.gif) no-repeat -10px 5px;
}

/* The pointer image is hadded by using another span */
.hint .hint-pointer {
    position: absolute;
    left: -10px;
    top: 5px;
    width: 10px;
    height: 19px;
    background: url(../images/pointer.gif) left top no-repeat;
}
.ie7 #list-box
{
	width:340px;
	margin-left:200px;
	float:right;
	padding-bottom:11px;
}
.form_div_align {
	float:left;
	margin-left:130px;
	margin-top:-101px;
	
}
.ie7 .form_div_align {
	float:left;
	margin-left:120px;
	margin-top:-101px;
	
}
.ie8 .form_div_align {
	float:left;
	margin-left:120px;
	margin-bottom:100px;
}
 #button{margin-left:130px; margin-top:-40px;}
.ie8 #description{margin-top:-100px;}
.ie8 #box_dis{margin-top:-100px;}
.ie7 #description{margin-top:100px;}
.ie7 #datepicker_img1{margin-left:250px; margin-top:-22px;}
.ie7 #datepicker_img2{margin-left:250px; margin-top:-35px;}
</style>
<script>
	function togglePasswordDiv(type) {
		if(type == "1") {
			document.getElementById("forgotPasswordDiv").style.display="none";
			document.getElementById("changePasswordDiv").style.display="block";
		} else {
			document.getElementById("forgotPasswordDiv").style.display="block";
			document.getElementById("changePasswordDiv").style.display="none";
		}
	}
</script>

<div id="columns">
		<div id="main">
			<div style="width:50%;">
                 <div id="containers">
                 
                     <form action="vars.php" method="post" class="niceform box"><br />
    					<fieldset>
    	   					<legend class="font-shadow" style="font-size:16px;"><b>Password Admin</b></legend><hr /><br />
                         		 <p style="font-size:12px;"><b><a href="javascript:togglePasswordDiv('1')" style="color:#006699">Change Password</a>	    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:togglePasswordDiv('2')" style="color:#006699">Forgot Password</a>
                                </b></p><br /><br />
                            	<div id="changePasswordDiv">
        						<dt><label for="email" style="font-size:12px;">Email Id:</label></dt>
            					<dd><b style="font-size:12px">ruchipandeya@gmail.com</b>
                                </dd>
        						<dl>
        						<dt><label for="Password">New Password:</label></dt>
            					<dd><input type="password" name="text" id="text" size="32"  placeholder="New Password" maxlength="32" /></dd>
                                <dt><label for="Password">Confirm Password:</label></dt>
            					<dd><input type="password" name="text" id="text" size="32"  placeholder="Confirm Password" maxlength="32" /></dd>
        						</dl>
                                <dd style="margin-top:1%">
                                <a href="#"><img src="images/submit.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/cancel.png" /></a>
                                </dd>
        						</dl>
                                </div>
                                <div id="forgotPasswordDiv" style="display:none">
        						<dt><label for="email">Email Id:</label></dt>
            					<dd><input type="text" name="email" id="email" size="32"  placeholder="Your registered email" maxlength="32" /></b>
                                </dd>
                                <dd style="margin-top:2%">
                                <a href="#"><img src="images/submit.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/cancel.png" /></a>
                                </dd>
        						</dl>
                                </div>
       					</fieldset>
        				
					</form>   
                     
				</div>
            
			</div>
		</div>
</div>




