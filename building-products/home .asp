<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Building-Products</title>
	<!--#include file="header.html"-->
    <script type="text/javascript">
	$(window).load(function() {
	$('#slider').nivoSlider ({
	effect:'fold', 
	slices:15,
	boxCols: 8,
	boxRows: 4,				
	animSpeed:500,
	pauseTime:5000,
	startSlide:0, //Set starting Slide (0 index)
	directionNav:true, //Next & Prev
	directionNavHide:true, //Only show on hover
	controlNav:true, //1,2,3...
	controlNavThumbs:false, //Use thumbnails for Control Nav
	controlNavThumbsFromRel:false, //Use image rel for thumbs
	controlNavThumbsSearch: '.jpg', //Replace this with...
	controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
	keyboardNav:true, //Use left & right arrows
	pauseOnHover:true, //Stop animation while hovering
	manualAdvance:false, //Force manual transitions
	captionOpacity:0.8, //Universal caption opacity
	beforeChange: function(){
	$('.nivo-caption').fadeOut(800);
	},
	afterChange: function(){
	$('.nivo-caption').fadeIn(800);
	},
	slideshowEnd: function(){}, //Triggers after all slides have been shown
	prevText: 'Prev',
	nextText: 'Next'
	});
	});
	</script>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<body>

<p id="back-top" style="display:block;"><a href="#top"><span></span>Back to Top</a></p>

<!-- bodyWrapper 

<div id="bodyWrapper" class="bg_body">

  	<div class="wrapper-padd"> -->

    	

<div class="wrapper_botttom"> 
<!--right-hand side banners-->
	<ul class="banner_set"> 
		<li style="border:1px solid #CCCCCC; padding:2px 2px 2px 2px;">
        	<a href="#" target="_self">
            	<img src="images/banners/banner_02_1.jpg"alt="Banner1 for Banner Set"title=" Banner1 for Banner Set"width="194"height="180" />
            </a>
        </li>
		<li style="border:1px solid #CCCCCC; padding:2px 2px 2px 2px;">
        	<a href="#" target="_self">
            <img src="images/banners/banner_03_1.jpg" alt="Banner1 for Banner Set" title=" Banner1 for Banner Set " width="194" height="180" />
            </a>
        </li>
		<div>
			<ul><br>
                <li style="list-style:none;"><a href="#"><img src="images/banners/brand1.png"></a></li><br>
                <li style="list-style:none;"><a href="#"><img src="images/banners/brand2.png"></a></li><br>
                <li style="list-style:none;"><a href="#"><img src="images/banners/brand3.png"></a></li><br>
                <li style="list-style:none;"><a href="#"><img src="images/banners/brand4.png"></a></li><br>
                <li style="list-style:none;"><a href="#"><img src="images/banners/brand5.png"></a></li><br>
                <li style="list-style:none;"><a href="#"><img src="images/banners/brand6.png"></a></li><br>
                <li style="list-style:none;"><a href="#"><img src="images/banners/brand1.png"></a></li><br>
                <li style="list-style:none;"><a href="#"><img src="images/banners/brand5.png"></a></li><br>
			</ul>
		</div>
   </ul>
<!--//-->
	<div class="row_3 ofh">  
		<div id="bodyContent" > 
			<div class="contentContainer">
				<div class="contentPadd sub">
					<div class="prods_content">
						<ul class="sub_categories row2">
							<div class="nivoSlider_wrapper">
                                	<div id="slider" class="nivoSlider">
                                    	<img src="images/banners/banner1.jpg" >
                                        <img src="images/banners/banner2.jpg"  width="550" height="200" /> 
        							</div>
        					</div>	
						</ul>
					</div>      
				</div>
			</div>   
			
            <div class="result result1_top">
            	<div class="result1_bottom">
					<div class="cl_both result_top_padd ofh">
						<div class="fl_left result_left" style="color:#ffffff">
                        	<strong>Displaying</strong> <strong>1</strong> to <strong>4</strong></span> (of <strong>20</strong> Products)
                        </div>
						<div class="fl_right result_right" style="color:#ffffff">Result Pages: &nbsp;<b>1</b>&nbsp;&nbsp;
                            <a href="#" class="pageResults" title=" Page 2 "><u>2</u></a>&nbsp;&nbsp;
                            <a href="#" class="pageResults" title=" Page 3 "><u>3</u></a>&nbsp;&nbsp;
                            <a href="#" class="pageResults" title=" Page 4 "><u>4</u></a>&nbsp;&nbsp;
                            <a href="#" class="pageResults" title=" Page 5 "><u>5</u></a>&nbsp;
                            <a href="#" class="pageResults next" title=" Next Set of 5 Pages ">...</a>&nbsp;&nbsp;
                            <a href="#" class="pageResults next" title=" Next Page ">
                            <u>[&nbsp;<span>Next</span>&nbsp;<small>&gt;&gt;</small>&nbsp;]</u></a>&nbsp;
                        </div>
					</div>
				</div>
			</div> 

			<div class="contentContainer">
				<div class="contentPadd">
					<div class="contentInfoText un">
						<div class="prods_info">
							<ol class="masthead">
								<li class="port_side left_side4">
                                	<div class="pic_padd wrapper_pic_div" style="width:160px;height:160px;">
                                    	<a class="prods_pic_bg" href="#" style="width:160px;height:160px;">
                                        	<img src="images/products/048.png" alt="Lorem Ipsume Product Name" 
                                            title=" Lorem Ipsume Product Name " width="160" height="160"  
                                            style="width:160px;height:160px;margin:0px 0px 0px 0px;" />
                                        </a>
                                    </div>
                                </li>

			  					<li class="starboard_side bak4">
									<div class="info">
										<div class="data data_padd">
                                        	<font color="#000000">By:</font><a href="#"> Company Name &nbsp;&nbsp;</a>
                                            <span>Category: </span> <a href="#"> Main Category Name</a> > <a href="#">Sub Category Name</a>
                                        </div>
											<h2 class="name name2_padd"><span><a href="#">Lorem Ipsume Product Name</a></span> </h2>
										<div class="link"><a href="#">Link1</a> - <a href="#">Link2</a> 
                                        - <a href="#">Link3</a> - <a href="#">Link4</a> - <a href="#">Link5</a>
                                        </div>
										<div class="desc desc_padd add">Nam pulvinar consectetur interdum. Cras et metus lacus, non porta quam.	 										</div>
									</div>
								</li>
							</ol>
						</div>	
					</div>  
		
					<div class="contentInfoText un">
						<div class="prods_info">
							<ol class="masthead">
								<li class="port_side left_side4">
                            		<div class="pic_padd wrapper_pic_div" style="width:160px;height:160px;">
                            			<a class="prods_pic_bg" href="#" style="width:160px;height:160px;">
                                		<img src="images/products/051.jpg" alt="Lorem Ipsume Product Name" title=" Lorem Ipsume Product Name " 
                                    	width="160" height="160"  style="width:160px;height:160px;margin:0px 0px 0px 0px;" />
                                		</a>
                                	</div>
                            	</li>

			  					<li class="starboard_side bak4">
									<div class="info">
										<div class="data data_padd"><font color="#000000">By:</font>
                                    		<a href="#"> Company Name &nbsp;&nbsp;</a><span>Category: </span> 
                                        	<a href="#"> Main Category Name</a> > <a href="#">Sub Category Name</a>
                                    	</div>
											<h2 class="name name2_padd"><span><a href="#">Lorem Ipsume Product Name</a></span> </h2>
										<div class="link">
                                    		<a href="#">Link1</a> - <a href="#">Link2</a> - <a href="#">Link3</a> - <a href="#">Link4</a> - 
                                    		<a href="#">Link5</a>
                                    	</div>
										<div class="desc desc_padd add">
                                    	Curabitur a justo id elit gravida tincidunt ac sit amet elit. Fusce at sem lacus, vel luctus 
                                        dolor. ...
                                    	</div>
									</div>
								</li>
							</ol>
						</div>	
					</div>  
					<div class="contentInfoText un">
						<div class="prods_info">
							<ol class="masthead">
			  					<li class="port_side left_side4">
                            		<div class="pic_padd wrapper_pic_div" style="width:160px;height:160px;">
                                		<a class="prods_pic_bg" href="#" style="width:160px;height:160px;">
                                    	<img src="images/products/047.png" alt="Lorem Ipsume Product Name" 
                                    	title=" Lorem Ipsume Product Name " width="160" height="160"  
                                    	style="width:160px;height:160px;margin:0px 0px 0px 0px;" />
                                    	</a>
                                	</div>
								</li>
							
                            	<li class="starboard_side bak4">
									<div class="info">
										<div class="data data_padd">
                                    		<font color="#000000">By:</font>
                                    		<a href="#"> Company Name &nbsp;&nbsp;</a><span>Category: </span> 
                                    		<a href="#"> Main Category Name</a> > <a href="#">Sub Category Name</a>
                                    	</div>
											<h2 class="name name2_padd"><span><a href="#">Lorem Ipsume Product Name</a></span> </h2>
										<div class="link">
                                    		<a href="#">Link1</a> - <a href="#">Link2</a> - <a href="#">Link3</a> - <a href="#">Link4</a> - 
                                    		<a href="#">Link5</a>
                                    	</div>
                                    	<div class="desc desc_padd add">
                                    	Nam pulvinar consectetur interdum. Cras et metus lacus, non porta quam.
                                    	</div>
									</div>
								</li>
							</ol>
						</div>	
					</div> 
                    <div class="contentInfoText un">
                        <div class="prods_info">
                            <ol class="masthead">
                                <li class="starboard_side bak4">
                                    <div class="info">
                                        <div class="data data_padd">
                                        <font color="#000000">By:</font>
                                        <a href="#"> Company Name &nbsp;&nbsp;</a><span>Category: </span> 
                                        <a href="#"> Main Category Name</a> > <a href="#">Sub Category Name</a>
                                        </div>
                                            <h2 class="name name2_padd"><span><a href="#">Lorem Ipsume Product Name</a></span> </h2>
                                        <div class="link">
                                        <a href="#">Link1</a> - <a href="#">Link2</a> - <a href="#">Link3</a> - <a href="#">Link4</a> 
                                        - <a href="#">Link5</a>
                                        </div>
                                        <div class="desc desc_padd add">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non 
                                        elit ut nulla ultrices adipiscing ...
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>	
                    </div>
                </div>
			</div>

			<div class="result result2_top">
            	<div class="result2_bottom">
					<div class="cl_both result_bottom_padd ofh">
						<div class="fl_left result_left" style="color:#ffffff;">
                        	<span style="color:#ffffff;">Displaying <strong>1</strong> to <strong>4</strong></span> (of <strong>20</strong> Products)
                        </div>
						<div class="fl_right result_right" style="color:#ffffff">Result Pages: &nbsp;<b>1</b>&nbsp;&nbsp;<a href="#" class="pageResults" title=" Page 2 "><u>2</u></a>&nbsp;&nbsp;<a href="#" class="pageResults" title=" Page 3 "><u>3</u></a>&nbsp;&nbsp;<a href="#" class="pageResults" title=" Page 4 "><u>4</u></a>&nbsp;&nbsp;<a href="#" class="pageResults" title=" Page 5 "><u>5</u></a>&nbsp;<a href="#" class="pageResults next" title=" Next Set of 5 Pages ">...</a>&nbsp;&nbsp;<a href="#" class="pageResults next" title=" Next Page "><u>[&nbsp;<span>Next</span>&nbsp;<small>&gt;&gt;</small>&nbsp;]</u></a>&nbsp;
                    	</div>
					</div>
				</div>
			</div>




<script type="text/javascript">

        $(document).ready(function(){ 			

			 var row_list = $('.row');

			 row_list.each(function(){

				 new equalHeights($('#' + $(this).attr("id")));

			  });			 			 			  			  			  			  			   

			 var row_list2 = $('.row2');

			 row_list2.each(function(){

				// console.log($(this))

				 new equalHeights2($('.sub_categories'));

			  });			 			 			  			  			  			  			   

			 var row_list3 = $('.row3');

			 row_list3.each(function(){

				 new equalHeights3($('#' + $(this).attr("id")));

			  });

			 var row_list5 = $('.row5');

			 row_list5.each(function(){

				 new equalHeights5($('.bestsellers_slider'));

			  });			 			 			  			  			  			  			   			 

			  			 			 			  			  			  			  			   

        })

</script>

		</div>  <!-- bodyContent //-->
            
		<div class="shadow">
          <h3 class="shadow_box">Building Projects</h3> 
		</div> 
		
                 <div class="menus">
					<ul class="the_menu">
						<li class="sub"><a href="#nogo"><strong>Bathrooms</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li class="sub"><a href="#nogo"><strong>Pivot Doors</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
									<ul>
                                    	<li><a href="#nogo"> <strong>Staching Doors</strong></a> </li>
										<li><a href="#nogo"><strong>Slidding Doors</strong></a></li>
										<li><a href="#nogo"> <strong>Hinges</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
											
										</li>
									</ul>
								</li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Bricks</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Doors and Locks</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li class="sub"><a href="#nogo"><strong>Pivot Doors</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
									<ul>
                                    	<li><a href="#nogo"> <strong>Staching Doors</strong></a> </li>
										<li><a href="#nogo"><strong>Slidding Doors</strong></a></li>
										<li><a href="#nogo"> <strong>Hinges</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
											
										</li>
									</ul>
								</li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
                        <li class="sub"><a href="#nogo"><strong>Floor Coverings</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li><a href="#nogo"><strong>Garage Doors</strong></a></li>
						<li class="sub"><a href="#nogo"><strong>Heating & Cooling</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Hot Water</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Insulation</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Kitchen | Laundry</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li><a href="#nogo"><strong>Kitchen | Laundry Appliances</strong></a></li>
						<li class="sub"><a href="#nogo"><strong>Landscaping & Outdoors</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Lighting</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Paint</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Roofing</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li><a href="#nogo"><strong>Sheds and Garages</strong></a></li>		
                        <li><a href="#nogo"><strong>Solar Electricity</strong></a></li>
						<li class="sub"><a href="#nogo"><strong>Water Tanks</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Window Furnishing</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li class="sub"><a href="#nogo"><strong>Windows</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						<li><a href="#nogo"><strong>Render | External Cladding</strong></a></li>
						<li class="sub"><a href="#nogo"><strong>External Cladding</strong><!--[if gte IE 7]><!--></a><!--<![endif]-->
							<ul>
								<li><a href="#nogo"><strong>Bi-Fold Doors</strong></a></li>
								<li><a href="#nogo"><strong>Door Closers</strong></a></li>
    							<li><a href="#nogo"><strong>Door Locks</strong></a></li>
    							<li><a href="#nogo"><strong>Door Handles</strong></a></li>
    							<li><a href="#nogo"><strong>Door Stops</strong></a></li>
								<li><a href="#nogo"><strong>Pivot Doors</strong></a></li>
								<li><a href="#nogo"><strong>External Doors</strong></a></li>
							</ul>
						</li>
						
					</ul>
				</div><br>
					<div>
                    	<ul><br>
                        <li style="list-style:none;"><a href="#"><img src="images/banners/brand1.png"></a></li><br>
                        <li style="list-style:none;"><a href="#"><img src="images/banners/brand2.png"></a></li><br>
                        <li style="list-style:none;"><a href="#"><img src="images/banners/brand3.png"></a></li><br>
                        <li style="list-style:none;"><a href="#"><img src="images/banners/brand4.png"></a></li><br>
                        <li style="list-style:none;"><a href="#"><img src="images/banners/brand5.png"></a></li><br>
                        <li style="list-style:none;"><a href="#"><img src="images/banners/brand6.png"></a></li><br>
                    	</ul>
                    </div>

	</div> 
</div>  <!--wrapper closed-->  
    <!--#include file="footer.html"-->
<script type="text/javascript">

$('.productListTable tr:nth-child(even)').addClass('alt');

</script>

<!-- </div>

</div>		 bodyWrapper //-->

</body>  

<!--[if IE]>

  <link href="css/ie_style.css" rel="stylesheet" type="text/css" />

<![endif]-->

  <script type="text/javascript" src="ext/js/imagepreloader.js"></script>

  <script type="text/javascript">

		preloadImages([

			'images/background.png']);

	</script>

</html> 

