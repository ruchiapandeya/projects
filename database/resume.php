<?php 
include_once ("userobj.php");
include_once ('config.php');
include_once ("logutil.php");
include_once "dbutil.php";
@session_start();
$user=$_SESSION['userObj'];
$dbUtil = new DbUtil();
//echo $user->getId();
$adminId = $user->getId();
$name = $user->getName();
?>
<style type="text/css">
strong {
	background-color:#FF0;
}
</style>
<?php

$id = $_GET['id'];
$keyword = $_SESSION[keyword];

$chkkeyword=stripslashes($_SESSION[keyword]);
$chk_keyword = str_replace("'","",$chkkeyword);
$srch1 = strpos($chkkeyword, "'");

$keyword = str_replace("'","",$keyword);



if ($srch1 === false){
	//echo "aaa";
	$pos = strpos($keyword, "and");
	$pos1 = strpos($keyword, "or");
	if ($pos === false) {//php or mysql or java
		$check_keyword = explode(' ',$keyword);
		foreach($check_keyword as $key)
		{
			if( ($key!="or") && ($key!="OR") ){
				$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%')";
				$searchCon = " OR ";
			}
		}
	}elseif ($pos1 === false) {//php and mysql and java
		$check_keyword = explode(' ',$keyword);
		foreach($check_keyword as $key)
		{
			if( ($key!="and") && ($key!="AND") ){
				$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%')";
				$searchCon = " AND ";
			}
		}
	}else{//php or mysql and java
		$check_keyword = explode(' ',$keyword);
		$i=1;
		foreach($check_keyword as $key)
		{
			if($i%2==0){
				$searchTxt .= "".$key." ";
			}else{
				$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%') ";	
			}
			$i++;
		}
	}
	$result=$check_keyword;
	//print_r($check_keyword);
}else{
	//echo "bbb";
	$pos = strpos($keyword, "and");
	$pos1 = strpos($keyword, "or");
	if ($pos === false) {//php or mysql or java
		$keys = explode('OR',$keyword);
	
		foreach($keys as $key)
		{
			$key = trim($key);
			$key=str_replace("'","",$key);
			$check1 = strpos($key, "AND");
			if ($check1 === false) {
				$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%')";
				$searchCon = " OR ";
			}
			$check2 = strpos($key, "AND");
			if ($check1 == true) {
				$keys1 = explode('AND',$key);
				foreach($keys1 as $keynew)
				{
					$keynew = trim($keynew);
					$searchTxt .= $searchCon . "(title like '%$keynew%' OR skills like '%$keynew%' OR post_resume like '%$keynew%')";
					$searchCon = " AND ";
				}
			}
			//echo "<br>";
		}
	}
	$count = count($keys);
	$count1 = count($keys1);
	
	if( ($count=="0") && ($count1=="0") ){
		$result=trim($keyword);
	}elseif($count1=="0"){
		$result = array_filter(array_map('trim', $keys));
	}else{
		
		$array1 = array_filter(array_map('trim', $keys));
		$array2 = array_filter(array_map('trim', $keys1));
		
		$result = array_merge($array1, $array2);
		$result = array_filter(array_map('trim', $result));
	}
	//die;
	//print_r($result);
}
//print_r($result);

/*foreach($keys as $key)
{
	$key = trim($key); 
	
	$key=str_replace("'","",$key);
	$check1 = strpos($key, "AND");
	if ($check1 === false) {
		$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%')";
		$searchCon = " OR ";
	}
	$check2 = strpos($key, "AND");
	if ($check1 == true) {
	
		$keys1 = explode('AND',$key);
		foreach($keys1 as $keynew)
		{
			$searchTxt .= $searchCon . "(title like '%$keynew%' OR skills like '%$keynew%' OR post_resume like '%$keynew%')";
			$searchCon = " AND ";
		}
	}
}
*/
		
/*$count = count($keys1);
if($count=="0"){
	echo $result=trim($keyword);
}else{
	$result = array_merge($keys, $keys1);
	$result = array_filter(array_map('trim', $result));
}*/
$sql=$dbUtil->query("select post_resume from new_record where id = '$id'");
foreach($sql as $row){
	LogUtil :: debug("getting resume:".$row[post_resume]."");
	$text=$row[post_resume];
	
}



/**
 * Perform a simple text replace
 * This should be used when the string does not contain HTML
 * (off by default)
 */
define('STR_HIGHLIGHT_SIMPLE', 1);

/**
 * Only match whole words in the string
 * (off by default)
 */
define('STR_HIGHLIGHT_WHOLEWD', 2);

/**
 * Case sensitive matching
 * (off by default)
 */
define('STR_HIGHLIGHT_CASESENS', 4);

/**
 * Overwrite links if matched
 * This should be used when the replacement string is a link
 * (off by default)
 */
define('STR_HIGHLIGHT_STRIPLINKS', 8);

/**
 * Highlight a string in text without corrupting HTML tags
 *
 * @author      Aidan Lister <aidan@php.net>
 * @version     3.1.1
 * @link        http://aidanlister.com/repos/v/function.str_highlight.php
 * @param       string          $text           Haystack - The text to search
 * @param       array|string    $needle         Needle - The string to highlight
 * @param       bool            $options        Bitwise set of options
 * @param       array           $highlight      Replacement string
 * @return      Text with needle highlighted
 */
function str_highlight($text, $needle, $options = null, $highlight = null)
{
    // Default highlighting
    if ($highlight === null) {
        $highlight = '<strong>\1</strong>';
    }

    // Select pattern to use
    if ($options & STR_HIGHLIGHT_SIMPLE) {
        $pattern = '#(%s)#';
        $sl_pattern = '#(%s)#';
    } else {
        $pattern = '#(?!<.*?)(%s)(?![^<>]*?>)#';
        $sl_pattern = '#<a\s(?:.*?)>(%s)</a>#';
    }

    // Case sensitivity
    if (!($options & STR_HIGHLIGHT_CASESENS)) {
        $pattern .= 'i';
        $sl_pattern .= 'i';
    }

	$needle = (array) $needle;
	foreach ($needle as $needle_s) {
        $needle_s = preg_quote($needle_s);

        // Escape needle with optional whole word check
        if ($options & STR_HIGHLIGHT_WHOLEWD) {
            $needle_s = '\b' . $needle_s . '\b';
        }

        // Strip links
        if ($options & STR_HIGHLIGHT_STRIPLINKS) {
            $sl_regex = sprintf($sl_pattern, $needle_s);
            $text = preg_replace($sl_regex, '\1', $text);
        }

        $regex = sprintf($pattern, $needle_s);
		$text = preg_replace($regex, $highlight, $text);
	}

    return $text;
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resume</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#myForm').ajaxForm({
      target: '#showdata',
      success: function() {
        $('#showdata').fadeIn('slow');
      }
    });
  });
  </script>

</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<h1 align="center">Resume</h1>
<A name="experience">
<?php 
//$search = array('php', 'sql');
echo str_highlight($text, $result);

//$showResume = new highlight($text , $check_keyword);
//echo $showResume->output_text;
?>
</A>
<div style="width:400px; height:3px; float:left; background:#CC99CC;"></div>
<br />
<br />
<br />
<div>
<h3 style="color:#663399;">Notes:</h3>
<!--<script>
			function addComments() {
				var existingComment=document.getElementById("commentsDiv").innerHTML;
				var comment=document.getElementById("comments").value;
				document.getElementById("commentsDiv").innerHTML="<li><span style='font-size:10px; color:#663399;'>Posted by: Ruchi Pandeya | Posted On: <font color='orange'>"+new Date()+"</font></span><br>"+comment+"</li>"+existingComment;
				document.getElementById("comments").value="";
			}
		</script>
-->        
<div id="showdata" style="width:400px; color:#000000;"><?php include("notes_insert.php");?></div>
<br />
<div id="addCommentDiv">
<form id="myForm" action="notes_insert.php" method="post">
	<input type="hidden" name="name" value="<?php echo $name;?>" />
  <textarea id="message" name="message" style="width:500px; height:100px; border:4px solid #CCCCCC; "></textarea>
  <br>
  <input type="submit" value="Add" />
</form>
  <a href="#top" style="float:right;"><strong>^</strong> Back to Top</a> </div>

</body>
</html>