
<!-- ANIMATE AND EASING LIBRARIES -->
<script
	type="text/javascript" src="services-plugin/js/jquery.easing.1.3.js"></script>
<script
	type="text/javascript"
	src="services-plugin/js/jquery.cssAnimate.mini.js"></script>

<!-- TOUCH AND MOUSE WHEEL SETTINGS -->
<script
	type="text/javascript" src="services-plugin/js/jquery.touchwipe.min.js"></script>
<script
	type="text/javascript"
	src="services-plugin/js/jquery.mousewheel.min.js"></script>


<!-- jQuery SERVICES Slider  -->
<script
	type="text/javascript"
	src="services-plugin/js/jquery.themepunch.services.js"></script>
<link
	rel="stylesheet" type="text/css"
	href="services-plugin/css/settings.css" media="screen" />

<link rel="stylesheet"
	href="css/style.css" />
<!-- FONT IMPORT -->
<link
	href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700'
	rel='stylesheet' type='text/css'>
<div class="example-wrapper">
	<div id="services-example-1" class="theme1">
		<ul>
			 <?php include('banner.php');?>
		</ul>

		<!--	###############		-	TOOLBAR (LEFT/RIGHT) BUTTONS	-	###############	 -->
		<div class="toolbar">
			<div class="left"></div>
			<div class="right"></div>
		</div>
	</div>

</div>
<script type="text/javascript">

var tpj=jQuery;
tpj.noConflict();

tpj(document).ready(function() {

if (tpj.fn.cssOriginal!=undefined)
	tpj.fn.css = tpj.fn.cssOriginal;

	tpj('#services-example-1').services(
	{
	width:920,
	height:310,
	slideAmount:5,
	slideSpacing:30,
	carousel:"off",
	touchenabled:"on",
	mouseWheel:"on",
	hoverAlpha:"off",			// Turns Alpha Fade on/off by Hovering
	slideshow:0,				// 0 = No SlideShow, 1000 = 1 sec Slideshow (rotating automatically)
	hovereffect:"on",			// All Hovereffect on/off
	callBack:function() { }		//Callback any Function after loaded

	});

		

	});
	</script>
