<script type="text/javascript">
        // Popup window code
        function newPopup(url) {
	popupWindow = window.open(
	url,'popUpWindow','height=600,width=860,left=540,top=200,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
        }
</script>

<?php
if ($handle = scandir('../Heritage/Home/ResourcesTab')) {
	foreach ($handle as $file) {
		if (false !== strripos($file,".json")) {
			$filedata = file_get_contents('../Heritage/Home/ResourcesTab/'.$file);
			$data=json_decode($filedata);
			?>
<li>
	<img class="thumb" src=<?php echo $data->thumbnail_image;?>
	data-bw=<?php echo $data->thumbnail_image?>>
	<div style="margin-top: 16px"></div>
	<h2><?php echo $data->title?></h2>
	<p>
		<?php echo $data->short_summary;?>
	</p> <a class="buttonlight morebutton" href="#">View More</a>
	<div class="page-more">
	 <?php if(isset($data->video_link)){
		echo "<iframe class=\"video_clip\"";
		echo "src=\"".$data->video_link."\"";
		echo "height=\"280\" width=\"498\" frameborder=\"0\" webkitAllowFullScreen
			allowFullScreen>
		</iframe>";
	 }
	 elseif(isset($data->big_image)){
	   echo "<img class=\"big-image\" width=\"498\" height=\"280\" src=\"".$data->big_image."\">";
	 }
	?>
		<div class="details_double">
			<h2><?php echo $data->main_title;?></h2>
			<?php echo $data->main_summary;?>
			<a class="buttonlight" href="<?php if(isset($data->resource_page)){echo "JavaScript:newPopup('heritage_data/".$data->resource_page."');";} ?>">Visit Resource</a>
		</div>
		<div class="closer"></div>
	</div>
</li>

<?php 
		}
	}
}
?>