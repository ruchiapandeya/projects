<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Heritage</title>
	<?php include("../header.html"); ?>
  
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<!--[if IE 9]><body class="ie9"><![endif]-->
<style>
<style type="text/css">
/* All form elements are within the definition list for this example */
input{border:1px solid lightblue; height:18px; box-shadow: rgba(0,0,0,0.3) 0 0 4px;}
select{border:1px solid lightblue; box-shadow: rgba(0,0,0,0.3) 0 0 4px;}
textarea{border:1px solid lightblue; box-shadow: rgba(0,0,0,0.3) 0 0 4px;}
textarea:hover {border:1px solid #CCCCCC; background:#FFFFCC;}
dl {
	font:normal 12px/15px ;
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

.clean-gray {
	border: solid 1px #DEDEDE;
	background: #EFEFEF;
	color: #222222;
	padding: 4px;
	text-align: center;
}
#form_cancel {
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	background: #39d url('images/bg-btn-blue.png') repeat-x scroll 0 0;
	border: 1px solid #39D;
	color: #fff;
	text-shadow: 0 -1px 0 #39d;
	padding: 4px 10px 5px;
	font-size: 11px;
	margin: 0 5px 0 0;
	font-weight: bold;
}

#form_cancel::-moz-focus-inner {
	padding: 0;
	border: 0;
}

#form_cancel:hover,#form_cancel:focus {
	background-position: 0 -5px;
	cursor: pointer;
}

.what-hwf {position: relative;top: 0px;width: 100%;margin: 5% 0% 0% 0%;line-height: 30px;
	       padding-bottom: 20px;color: white;border-radius: 5px;
}
.what-hwf em {	position: relative;font-size: 15px; text-decoration:none;
				padding:20px 10px 20px 10px;margin: -10px 0px 40px 0px;color:#666666;float: left;
				background-color: #ffffff;
				-webkit-box-shadow: 0 8px 6px -6px grey;
	   			-moz-box-shadow: 0 8px 6px -6px grey;
	        	box-shadow: 0 8px 6px -6px grey;
			}
#contactUs{width:960px;}
</style>
<body>
	<div  class="container_24"> 
    	<div class='what-hwf'>
    		<em>
				<div id="contactUs">
	        		<form id="contact_us_form" action="contact_us_sendemail.php" method="post" class="niceform box"><br />
	    				<fieldset>
	    	   				<legend class="font-shadow" style="font-size:16px; color:#00b7ea;"><b>Contact Us</b></legend><hr /><br />
	                        	<dl>
                        			<dt><label for="email"><b>Email Id:</b></label></dt>
                        			<dd><input type="text" name="email" id="email" size="44"  placeholder="hello@yahoo.com" required value="<?php echo $emailId;?>" maxlength="32" style="border:1px solid lightblue; padding:4px 2px 4px 2px;" />
                        			</dd>
                        		</dl>
                        		<dl>
                        			<dt><label for="message"><b>Message:</b></label></dt>
                                	<dd><textarea name="message" id="message" rows="8" cols="35" required></textarea></dd>
                                </dl>
                      	</fieldset>
                        	<div align="center" style="margin-bottom:4%;">
								<input id="form_cancel" class="formCancelButton" type="submit" style="height: 25px" value=" Send " tabindex="6">
                            </div>
					</form>   
				</div>
        	</em>     
        </div>       
	</div>
	<br><br><br><br><br><br><br><br><br><br><br>
	<?php include("../footer.html"); ?>
</body>
</html>