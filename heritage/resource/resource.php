<!DOCTYPE html>
<html
	dir="ltr" lang="en">
	<!-- ------------------------------------------------------------ -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='css/resource_new.css' rel='stylesheet' />
<link rel="stylesheet" href="framewarp/framewarp.css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script src="js/script.js"></script>        
<?php include("../header.html"); ?>
<style type="text/css">
</style>
<script src="framewarp/framewarp.js"></script>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<!--[if IE 9]><body class="ie9"><![endif]-->
<body>
	<div class="container_24">    
		<div class='what-hwf'>     
        	<em>   
        		<div>  
            		<?php include("journals.html"); ?>
            	</div>   
           			<img src="images/line_sep.png" />
           			<div style="height:auto;">
                    
					   <?php
                            if ($handle = opendir('../Heritage/Resources/ArticleModule')) {
								$id = 1;
                                while (false !== ($file = readdir($handle))) {
                                    if (false !== strripos($file,".json")) {
										
                                        $filex=basename($file, ".json");
                                        $data=json_decode(file_get_contents('../Heritage/Resources/ArticleModule/'.$file));
                                ?>
                                
                                <div id="box4">
                                <a href=<?php echo $data->href?>  id=<?php echo "b".$id;$id++;?>>
                                <p><img src=<?php echo $data->image;?> class="image" alt="" width="77" height="60" /></p>
                                <p id="date"><strong><?php echo $data->date;?></strong></p>
                                <p id="title"><strong><?php $title=substr($data->title,0,50); echo $title."";?> </strong></p>
                                <p id="publisher"><strong><?php echo $data->publisher;?></strong></p>
                                <p id="summary">
                                <strong><?php $summary=substr($data->summary,0,140); echo $summary."...";?></strong>
                                </p>
                                </a>
                                </div>
                                <?php
                                    }
                                }
                                closedir($handle);
                            }
                            ?>
            					</div>
                	</div>
			</em>      			
    	</div>  
	</div>   
	<?php include("../footer.html"); ?>
    
        
        
</body>  
</html>
