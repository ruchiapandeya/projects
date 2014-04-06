<!DOCTYPE html>

<!--
/*
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
-->
	
	
 <html>
	 <head>
		 
		 <meta charset="UTF-8">
		 <link rel="stylesheet" href="../css/form.css?v=2">
		 <script src="../extensions/jquery/jquery.js"></script>
		 <script src="../extensions/jquery/jquery-ui-autocomplete.js"></script>
		 <script src="../extensions/jquery/jquery.select-to-autocomplete.min.js"></script>
		 <script type="text/javascript" src="../js/modernizr.custom.29473.js"></script>
		 <script type="text/javascript" charset="utf-8">
		       (function($){
			 $(function(){
			   $('.input-text').selectToAutocomplete();
			   $('form').submit(function(){
			     alert( $(this).serialize() );
			     return false;
			   });
			 });
		       })(jQuery);
	       </script>
	       <style type="text/css" media="screen">
		      .ui-autocomplete {
			padding: 0;
			list-style: none;
			background-color: #fff;
			width: 150px;
			border: 1px solid #B0BECA;
			max-height: 350px;
			overflow-y: scroll;
		      }
		      .ui-autocomplete .ui-menu-item a {
			border-top: 1px solid #B0BECA;
			display: block;
			padding: 4px 6px;
			color: #353D44;
			cursor: pointer;
		      }
		      .ui-autocomplete .ui-menu-item:first-child a {
			border-top: none;
		      }
		      .ui-autocomplete .ui-menu-item a.ui-state-hover {
			background-color: #D5E5F4;
			color: #161A1C;
	            }
	       </style>
		 
	 </head>
	 
	 <body>
			
			
				  
				<div  class="ac-container">
					<input id="ac-1" name="accordion-1" type="checkbox" hidden="hidden" />
					<label for="ac-1">Search Filter</label>
					<article class="ac-small">
						 <form id="filter_table">
				   <dl>
				       <dd>
				       <select name="Country" class="input-text" style="width: 150px;" id="country-selector" autofocus="autofocus" autocorrect="off" autocomplete="off">
					      <option value="" selected="selected">Select Product</option>
					      <option value="Abc" data-alternative-spellings="AF ?????????">Abc</option>
					      <option value="Ccc" data-alternative-spellings="AX Aaland Aland" data-relevancy-booster="0.5">Ccc</option>
					      <option value="Bbc" data-alternative-spellings="AL">Bbc</option>
					      <option value="Cba" data-alternative-spellings="DZ ???????">Cba</option>
					      <option value="American Samoa" data-alternative-spellings="AS" data-relevancy-booster="0.5">American Samoa</option>
					      <option value="Azerbaijan" data-alternative-spellings="AZ">Azerbaijan</option>
					      <option value="Bahamas" data-alternative-spellings="BS">Bahamas</option>
					      <option value="Bahrain" data-alternative-spellings="BH ???????">Bahrain</option>
					      <option value="Bangladesh" data-alternative-spellings="BD ????????" data-relevancy-booster="2">Bangladesh</option>
					      <option value="Bhutan" data-alternative-spellings="BT ?????">Bhutan</option>
				       </select>
				       <select name="Country" class="input-text" style="width: 150px;" id="country-selector" autocorrect="off" autocomplete="off">
					      <option value="" selected="selected">Select Product</option>
					      <option value="Abc" data-alternative-spellings="AF ?????????">Abc</option>
					      <option value="Ccc" data-alternative-spellings="AX Aaland Aland" data-relevancy-booster="0.5">Ccc</option>
					      <option value="Bbc" data-alternative-spellings="AL">Bbc</option>
					      <option value="Cba" data-alternative-spellings="DZ ???????">Cba</option>
					      <option value="American Samoa" data-alternative-spellings="AS" data-relevancy-booster="0.5">American Samoa</option>
					      <option value="Azerbaijan" data-alternative-spellings="AZ">Azerbaijan</option>
					      <option value="Bahamas" data-alternative-spellings="BS">Bahamas</option>
					      <option value="Bahrain" data-alternative-spellings="BH ???????">Bahrain</option>
					      <option value="Bangladesh" data-alternative-spellings="BD ????????" data-relevancy-booster="2">Bangladesh</option>
					      <option value="Bhutan" data-alternative-spellings="BT ?????">Bhutan</option>
				       </select>
				       <select name="Country" class="input-text" style="width: 150px;" id="country-selector" autocorrect="off" autocomplete="off">
					      <option value="" selected="selected">Select Product</option>
					      <option value="Abc" data-alternative-spellings="AF ?????????">Abc</option>
					      <option value="Ccc" data-alternative-spellings="AX Aaland Aland" data-relevancy-booster="0.5">Ccc</option>
					      <option value="Bbc" data-alternative-spellings="AL">Bbc</option>
					      <option value="Cba" data-alternative-spellings="DZ ???????">Cba</option>
					      <option value="American Samoa" data-alternative-spellings="AS" data-relevancy-booster="0.5">American Samoa</option>
					      <option value="Azerbaijan" data-alternative-spellings="AZ">Azerbaijan</option>
					      <option value="Bahamas" data-alternative-spellings="BS">Bahamas</option>
					      <option value="Bahrain" data-alternative-spellings="BH ???????">Bahrain</option>
					      <option value="Bangladesh" data-alternative-spellings="BD ????????" data-relevancy-booster="2">Bangladesh</option>
					      <option value="Bhutan" data-alternative-spellings="BT ?????">Bhutan</option>
				       </select>
				       </dd>
				   </dl>
				   <dl>
				       <dd>
				       <select name="Country" class="input-text" style="width: 150px;" id="country-selector"  autocorrect="off" autocomplete="off">
					      <option value="" selected="selected">Select Product</option>
					      <option value="Abc" data-alternative-spellings="AF ?????????">Abc</option>
					      <option value="Ccc" data-alternative-spellings="AX Aaland Aland" data-relevancy-booster="0.5">Ccc</option>
					      <option value="Bbc" data-alternative-spellings="AL">Bbc</option>
					      <option value="Cba" data-alternative-spellings="DZ ???????">Cba</option>
					      <option value="American Samoa" data-alternative-spellings="AS" data-relevancy-booster="0.5">American Samoa</option>
					      <option value="Azerbaijan" data-alternative-spellings="AZ">Azerbaijan</option>
					      <option value="Bahamas" data-alternative-spellings="BS">Bahamas</option>
					      <option value="Bahrain" data-alternative-spellings="BH ???????">Bahrain</option>
					      <option value="Bangladesh" data-alternative-spellings="BD ????????" data-relevancy-booster="2">Bangladesh</option>
					      <option value="Bhutan" data-alternative-spellings="BT ?????">Bhutan</option>
				       </select>
				       
				       <select class="select">
						<option value="">Choose One of Select Option </option>
						<option value="">Select Option Number 1</option>
						<option value="">Select Option Number 2</option>
						<option value="">Select Option Number 3</option>
					</select>
					<span class="select-arrow"></span>
				       </dd>
				       <dd>
					<input type="date" size="60" class="input-text" required/>
				       </dd>
				   </dl>
				   <dl>
				       <dd>
					     <p>Checkboxes</p>
					     <input type="checkbox" name="one" class="checkbox" checked="checked"/> zzz <span class="blank-space"></span>
					     <input type="checkbox" name="one" class="checkbox"/> yyy <span class="blank-space"></span>
					     <input type="checkbox" name="one" class="checkbox"/> xxx
				       </dd>
				       <dd>
					     <p>Radio Button</p>
					     <input type="radio" name="gender" class="radio"/> Male <span class="blank-space"></span>
					     <input type="radio" name="gender" class="radio" checked="checked"/> Female <span class="blank-space"></span>
				       </dd>
				   </dl>
				   <dl style="margin-left: 10%;">
					     <button class="button"><span class="label">Reset</span></button>
					     <button class="button"><span class="label">Filter</span></button><br>
				       
				   </dl>
					
					      
				 </form>
					</article>
				</div>
				
		
			 
			 
     
		 
		 <!-- GA -->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-2260508-2");
			pageTracker._trackPageview();
		} catch(err) {}</script>
	<!-- GA -->
	 </body>
 
 </html>
