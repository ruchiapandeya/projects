<!DOCTYPE html>
<html>
<head>
<?php include("../header.html"); ?>
<link href='css/resource.css' rel='stylesheet' />

<script type="text/javascript" src="js/jquery.js"></script>
<!-- <script type="text/javascript" src="jqevents.js"></script> -->
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="simplyscroll/jquery.simplyscroll.js"></script>
<link rel="stylesheet" type="text/css"
	href="simplyscroll/jquery.simplyscroll.css" media="screen" />

<!-- Add jQuery library -->
<script type="text/javascript" src="fancy/lib/jquery-1.8.0.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript"
	src="fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- ------------------------------------------------------------ -->
<!-- Tooltip plugin -->
<link href='css/bootstrap.css' rel='stylesheet' type="text/css" />
<link href='css/bootstrap.min.css' rel='stylesheet' type="text/css" />
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- ------------------------------------------------------------ -->
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript"
	src="fancy/source/jquery.fancybox.js?v=2.1.0"></script>
<link rel="stylesheet" type="text/css"
	href="fancy/source/jquery.fancybox.css?v=2.1.0" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css"
	href="fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.3" />
<script type="text/javascript"
	src="fancy/source/helpers/jquery.fancybox-buttons.js?v=1.0.3"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css"
	href="fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.6" />
<script type="text/javascript"
	src="fancy/source/helpers/jquery.fancybox-thumbs.js?v=1.0.6"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript"
	src="fancy/source/helpers/jquery.fancybox-media.js?v=1.0.3"></script>
<script>
  window.onerror=function(sMessage,sUrl,sLine){alert("Message : "+sMessage+"\nURL : "+sUrl+"\nLine : "+sLine);};
  </script>



<script type="text/javascript">
		$(document).ready(function() {

			$('.tip').tooltip();
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
<style type="text/css">
.fancybox-custom .fancybox-skin {
	box-shadow: 0 0 50px #222;
}
</style>
</head>
<body>
	<!-- <div id="overlay">
     <div id='xdata'>
        Content you want the user to see goes here.
     </div>
</div>
 -->

	<div class="container_24">
		<div id='main-area'>
			<div id='sidebar'>
				<div id='about-us'>
					<div id='about-us-title'>
						<center>
							<a href="../abtUs/aboutUs.php"><span>About Us</span> </a>
						</center>
					</div>
					<br />
					<div id="abt-para">Heritage Without Frontiers is an open internet resource which
						brings together the finest ideas, scholarship and happenings in
						the areas of cultural and natural heritage.</div>
				</div>
				<div id='events'>
					<div id='event-title'>
						<center>
							<a href="../events/event.php"><span>Events </span> </a>
						</center>

					</div>
					<div class='event-list'>
						<div class='title'>
							<a href="http://indianoceanworldcentre.com/grad_conf_iowh_2012"
								rel="tooltip" class="tip" data-placement="right"
								title="First Annual IOWC Graduate Conference on Indian
							Ocean World History">First Annual IOWC</a>
						</div>
						<div class='description'></div>
						<div class='time'>27-28 October 2012</div>
					</div>
					<div class='event-list'>
						<div class='title'>
							<a href="http://indianoceanworldcentre.com/textiles2012"
								rel="tooltip" class="tip" data-placement="right"
								title="IOWC Conference (Textile Trades and Consumption
							in the Indian Ocean World, from Early Times to the Present)">IOWC
								Conference</a>
						</div>
						<div class='description'>Nearly 70 papers have been accepted for
							presentation at the conference.</div>
						<div class='time'>2-4 November 2012</div>
					</div>
					<div class='event-list'>
						<div class='title'>
							<a href="http://indianoceanworldcentre.com/mcri_event02"
								rel="tooltip" class="tip" data-placement="right"
								title="ARC/MCRI Conference - The Dimensions of the
							Indian Ocean World Past: Sources and Opportunities for
							interdisciplinary work in Indian Ocean World History, 9th -19th
							Centuries">ARC/MCRI Conference</a>
						</div>
						<div class='description'></div>
						<div class='time'>12-14 November 2012</div>
					</div>

				</div>
			</div>
			<div id='main-content'>
				<div id='inner-main-content'>
				<?php
				if ($handle = opendir('../Heritage/Resources/ArticleModule')) {
					while (false !== ($file = readdir($handle))) {
						if (false !== strripos($file,".json")) {
							$filex=basename($file, ".json");
							$data=json_decode(file_get_contents('../Heritage/Resources/ArticleModule/'.$file));
							echo "<a class=\"fancybox fancybox.iframe\" href=\"".$data->href."\">";?>
					<div class='article-list'>
						<div class='image'>
							<img src=<?php echo $data->image;?> />
						</div>
						<div class='title'>
							<span><?php echo $data->title;?> </span>
						</div>
						<div class='publisher'>
							<span><?php echo $data->publisher;?> </span>
						</div>
						<div class='date'>
							<span><?php echo $data->date;?> </span>
						</div>
						<div class='summary'>
							<div class='summarytext'>
							<?php echo $data->summary;?>
							</div>
						</div>
					</div>
					</a>
					<?php
						}
					}
					closedir($handle);
				}
				?>
				</div>
			</div>
		</div>

		<?php include('scroller.php');?>


	</div>
	<?php include("../footer.html"); ?>



</body>
</html>
