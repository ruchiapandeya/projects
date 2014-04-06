<?php
//C:\xampp\htdocs\jodconverter\lib>java -jar jobconverter-cli-2.2.2.jar C:\xampp\htdocs\reqform.doc sid.html
?>
<?php
//$results = shell_exec('java -jar tools/jod-converter/lib/jodconverter-cli-2.2.2.jar Siddharth_Sinha.doc testing1.html');
//echo $results;


$doc = 'Siddharth Sinha.doc';
$html = 'sid.html';


$cv = str_replace(" ","_",$doc);
rename('newresume/'.$doc.'', 'cv/'.$cv.'');

$input = 'cv/"'.$cv.'';
$output = 'newresume_html/"'.$html.'';

$url = 'java -jar tools/jod-converter/lib/jodconverter-cli-2.2.2.jar '.$input.' '.$output.'';
	
echo $replaceString = str_replace('"','',$url);

$convertToHtml = shell_exec($replaceString);



//$url="java -jar C:\xampp\htdocs\jodconverter\lib\jodconverter-cli-2.2.2.jar C:\xampp\htdocs\nh\projects\database\newresume\c14ee_Siddharth_Sinha.doc C:\xampp\htdocs\nh\projects\database\newresume_html\sid.html";

//$results = shell_exec('java -jar C:\xampp\htdocs\jodconverter\lib\jodconverter-cli-2.2.2.jar "'.$input.'" "'.$output.'"');

/*$doc = 'c14ee_Siddharth_Sinha.doc';
$html = 'sid.html';

$input = 'C:\xampp\htdocs\nh\projects\database\newresume\"'.$doc.'';
$output = 'C:\xampp\htdocs\nh\projects\database\newresume_html\"'.$html.'';

$url = 'java -jar C:\xampp\htdocs\jodconverter\lib\jodconverter-cli-2.2.2.jar '.$input.' '.$output.'';

$convertToHtml = str_replace('"','',$url);

$results = shell_exec($convertToHtml);
*/
//$results = shell_exec('java -jar C:\xampp\htdocs\jodconverter\lib\jodconverter-cli-2.2.2.jar "'.$input.'" "'.$output.'" ');

//echo $results;
?>