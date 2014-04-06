
<script type="text/javascript" src="simplyscroll/jquery.simplyscroll.js"></script>
<link rel="stylesheet" href="simplyscroll/jquery.simplyscroll.css" media="all" type="text/css">
<script type="text/javascript">(function($) {$(function() {$("#scroller").simplyScroll();});})(jQuery);</script>
<script src="scrollbar/jquery.mCustomScrollbar.js"></script>
<link rel="stylesheet" href="scrollbar/jquery.mCustomScrollbar.css"/>
<script>
(function($){
        $(window).load(function(){
            $("#scroller").mCustomScrollbar()
        });
    })(jQuery);
</script>
<style type="text/css">

</style>
<hr/>

<ul id="scroller">
<?php
    if ($handle = opendir('../Heritage/Resources/ResourceAds')) {
        while (false !== ($file = readdir($handle))) {
            if (false !== strripos($file,".json")) {
               $data=json_decode(file_get_contents('../Heritage/Resources/ResourceAds/'.$file));
               ?>
               <li>
               <a href=<?php echo $data->href;?> >
               <div class='ad'>
                    <div class='image'><div class='image'><img src=<?php echo $data->image;?> /></div></div>
                    <div class='title'><span><?php echo $data->title;?></span></div>
                    <div class='date'><span><?php echo $data->date;?></span></div>
                    <div class='publisher'><span><?php echo $data->publisher;?></span></div>
                    <div class='price'>
                    <span>
                         <?php 
                         $cur="Rs.";
                         if($data->price=="rupees"){
                           $cur="Rs.";
                         }elseif($data->price=="doller"){
                           $cur="$";
                         }
                         echo $cur." ".$data->price;
                         ?>
                    </span>
                    </div>
               </div>
               </a>
               </li>
               <?php
            }
        }
    closedir($handle);
    }
?>
</ul>
