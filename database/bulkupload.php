<?php
include "config.php";
$dirPath = 'newresume';
$date=date("Y-m-d");
$lastUpdated=date("Y-m-d");
$i=0;
if ($handle = opendir($dirPath)) 
{
	while (false !== ($file = readdir($handle))) 
	{
		if ($file != "." && $file != "..") 
		{
			if (is_dir("$dirPath/$file")) 
			{
            	//echo $file;
         	} else {
				//echo $file;
				$doc = str_replace(" ","_",$file);
				rename('newresume/'.$file.'', 'cv/'.$doc.'');
				//$doc = 'c14ee_Siddharth_Sinha.doc';
				$html = 'sid"'.$i.'".html';
				
				

				$input = 'cv/"'.$doc.'';
				$output = 'newresume_html/"'.$html.'';
	
				$url = 'java -jar tools/jod-converter/lib/jodconverter-cli-2.2.2.jar '.$input.' '.$output.'';
	
				$replaceString = str_replace('"','',$url);

				$convertToHtml = shell_exec($replaceString);
				
				$replaceOutputFile = str_replace('"','',$html);

				$post_resume_step1 = file_get_contents('newresume_html/'.$replaceOutputFile.'');
				
				$post_resume = str_replace("'","\'",$post_resume_step1);
		
				$sql="insert into new_record(resume, post_resume, date, lastUpdated, bulk) Values ('$doc', '$post_resume', '$date', '$lastUpdated', 'yes')";
				
				$action=1;
				if(!mysql_query($sql))
				{
					@die('Error:'.mysql_error());
					$action=2;
				}
				if($action=="1")
				{
					//echo "Done";	
					//echo "<br>";
				}
				else
				{
					//echo "Error";
					//echo "<br>";
				}
				
			}
			$i=$i+1;
      	}
   	}
   	closedir($handle);
}
@header("location:bulkdata.php");
?>
