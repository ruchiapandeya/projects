<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<style>
.ie7 #horizontal_line{margin-left:130px;}
#horizontal_line{margin-left:108px;}
.ie7 #job{margin-left:130px;}
#job{margin-left:105px;}
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body> 
<?php 
include "config.php";
$sql=mysql_query("select * from job_post where id = '$_GET[id]'");
while($row=mysql_fetch_array($sql))
{
	$id=$row[id];
	$count=$row[visits]+1;
	
	mysql_query("update job_post set visits = '$count' where id = '$id'");
	
	function highlightWords($text, $words)
	{
		foreach ($words as $word)
		{
    		$word = preg_quote($word);
    	    $text = preg_replace("/\b($word)\b/i", '<span class="highlight_word">\1</span>', $text);
		}
    	 return $text;
	}
	$str1=explode(",",$_GET['str']);
?>

 
<!-- content -->  
  
<div id="content">
<h2 id="job" style=" margin-bottom:-38px; padding-top:10px;">Job Details</h2>
<p style="margin-right:145px;" align="right" ><a href="index.php"><img src="images/home_button.png"  style="margin-bottom:-5px; border:none;"/><strong> Home</strong></a></p>
<div id="horizontal_line" style="  width:730px; height:2px; background:#CC99CC;"></div> 
    
<div id="info">


        	<div id="job_details"><br />
        		<h2><?php echo $row[job_profile];?> -</h2>
        			<h4><?php echo $row[comp_name];?></h4>
        				<a href="#"><img src="images/apply.png" title="Login to Apply" border="none"/></a>
        				<a href="#"><img src="images/registration.png" border="none" title="Apply without Registration"/></a>
                             	<p style="font-size:15px; border-bottom:2px solid #FF9900;"><strong>Summary</strong></p>
                        		<p><strong>Job Id:</strong><p id="display"><?php echo "NH-".$row[id];?></p></p>
                        		<p><strong>No. of Opening:</strong><p id="display"><?php echo $row[vacancy];?> Opening(s)</p></p>
                        		<p><strong>Work Experience:</strong><p id="display"><?php echo "".$row[exp_min]."-".$row[exp_max]." Years";?></p></p>
                        		<p><strong>Job Location:</strong><p id="display"><?php echo $row[location];?></p></p>
                        		<p><strong>Compensation:</strong><p id="display"><?php echo "INR ".$row[sal_min]."-".$row[sal_min]."&nbsp;&nbsp;";?><?php if($row[incentive]!=""){?><br /><em style="padding-left:136px;">(<?php echo $row[incentive];?>)</em><?php }?></p></p>
                                <p><strong>Educational Details:</strong><p id="display"><?php echo "".$row[grad].", ".$row[pg]."";?></p></p>
                        		<p><strong>Industry:</strong><p id="display"><?php 
										$industry =  highlightWords($row['industry'], $str1);
										echo $industry;
										?></p></p>
                                <p><strong>Job Type:</strong><p id="display">Permanent</p></p>
                        		<p><strong>Roles Type:</strong><p id="display"><?php 
										$role =  highlightWords($row['role'], $str1);
										echo $role;
										?></p></p>
                        		<p><strong>Functional Area:</strong><p id="display"><?php 
										$functional_area =  highlightWords($row['functional_area'], $str1);
										echo $functional_area;
										?></p></p>
                                <p><strong>Keywords:</strong><p id="display"><?php 
										$keyword =  highlightWords($row['keyword'], $str1);
										echo $keyword;
										?></p></p>
                                <p><strong>Listed on:</strong><p id="display"><?php echo $row[posted_date];?></p></p>
                                <p style="font-size:15px; border-bottom:2px solid #FF9900;"><strong>Desired Skills</strong></p>
                            <p class="text"><?php 
											$candidate_profile1=str_replace("<p>","",$row['candidate_profile']);
											$candidate_profile2=str_replace("</p>","",$candidate_profile1);
											$candidate_profile =  highlightWords($candidate_profile2, $str1);
											echo $candidate_profile;
											?><br /><br />
                            </p>   
                            
                            <p style="font-size:15px; border-bottom:2px solid #FF9900;"><strong>Job Summary</strong></p>
                            
                            <p class="text"><?php 
											$job_desc1=str_replace("<p>","",$row['job_desc']);
											$job_desc2=str_replace("</p>","",$job_desc1);
											$job_desc =  highlightWords($job_desc2, $str1);
											echo $job_desc;
											?><br /><br />
                           	</p>   
                            
                            <p style="font-size:15px; border-bottom:2px solid #FF9900;"><strong>About Company</strong></p>
                            <p class="text"><?php 
											$comp_profile1=str_replace("<p>","",$row['comp_profile']);
											$comp_profile2=str_replace("</p>","",$comp_profile1);
											$comp_profile =  highlightWords($comp_profile2, $str1);
											echo $comp_profile;
											?></p>
                            
                            <p style="font-size:15px; border-bottom:2px solid #FF9900;"><strong>Contact Details</strong></p>
                          
                           		<p><strong>Company Name:</strong><p id="display"><?php echo $row[comp_name];?></p></p>
                        		<p><strong>Website:</strong><p id="display"><?php if($row[comp_website]!=""){?>
									<a href="<?php echo $row[comp_website];?>" target="_blank" style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:13px; color:#1750b5;"><?php echo $row[comp_website];?></a>
									<?php }else{echo "<font color='#FF0000'>Not Mentioned</font>";}?></p></p>
                        		<p><strong>Contact Person:</strong><p id="display"><?php if($row[contact_person]!=""){echo $row[contact_person];}else{echo "<font color='#FF0000'>Not Mentioned</font>";}?></p></p>
                        		<p><strong>Address:</strong><p id="display"><?php if($row[address]!=""){echo $row[address];}else{echo "<font color='#FF0000'>Not Mentioned</font>";}?></p></p>
                        		<p><strong>Email Address:</strong><p id="display"><?php if($row[email]!=""){?>
									<a href="mailto:<?php echo $row[email];?>" style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:13px; color:#1750b5;"><?php echo $row[email];?></a>
									<?php }else{echo "<font color='#FF0000'>Not Mentioned</font>";}?></p></p>
                                <p><strong>Contact No.:</strong><p id="display"><?php if($row[telephone]!=""){echo $row[telephone];}else{echo "<font color='#FF0000'>Not Mentioned</font>";}?></p></p>
                                <a href="#"><img src="images/apply.png" border="none" title="Login to Apply"/></a>
        				        <a href="#"><img src="images/registration.png" border="none" title="Apply without Registration"/></a>
                                </div>
                 
                    
                     	
            </div> 
          
    <div id="container"> 
      	<div id="display_box">
        	<div id="slider" class="nivoSlider">
                <img src="images/slide1.png" />
                <img src="images/slide2.png" />
                <img src="images/slide3.png" />
                <img src="images/slide4.png" />
                
            </div>
			<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
			<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
			<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider();
			});
			</script>
                
     </div>     
	

<hr />
</div>
<?php }?>
</body>
</html>
