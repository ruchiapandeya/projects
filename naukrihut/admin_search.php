<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>quickSearch jQuery plug-in</title>
		
		<link rel="stylesheet" href="css/admin.css" type="text/css" media="all" title="" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.quicksearch.js"></script>
		<script type="text/javascript">
			$(function () {
				/*
				Example 1
				*/
				$('input#id_search').quicksearch('table tbody tr');
				
				/*
				Example 2 
				*/
				$('input#id_search2').quicksearch('table#table_example2 tbody tr', {
					'delay': 300,
					'selector': 'th',
					'stripeRows': ['odd', 'even'],
					'loader': 'span.loading',
					'bind': 'keyup click',
					'show': function () {
						this.style.color = '';
					},
					'hide': function () {
						this.style.color = '#ccc';
					},
					'prepareQuery': function (val) {
						return new RegExp(val, "i");
					},
					'testQuery': function (query, txt, _row) {
						return query.test(txt);
					}
				});
				
				/*
				Example 3
				*/
				var qs = $('input#id_search_list').quicksearch('ul#list_example li');
				
				$.ajax({
					'url': 'example.json',
					'type': 'GET',
					'dataType': 'json',
					'success': function (data) {
						for (i in data['list_items']) {
							$('ul#list_example').append('<li>' + data['list_items'][i] + '</li>');
						}
						qs.cache();
					}
				});
				
				$('input#add_to_list').click(function () {
					$('ul#list_example').append('<li>Added on click</li>');
					qs.cache();
				});
				
			});
		</script>
<style>
#header {
	width: 800px;
	height: 81px;
	margin: 0 auto;
	margin-top:57px;
	background:url(images/img04.png) no-repeat left top;
	margin-left:70px;
}
.ie7 #header {
	width: 800px;
	height: 81px;
	margin: 0 auto;
	margin-top:57px;
	background:url(images/img04.png) no-repeat left top;
	margin-left:68px;
}
/* Menu */
.ie7 #vertical_line{ background-color:#996699; width:auto; height:2px; margin-left:-170px; margin-top:-6px;}
#menu {
	float: left;
	width: 800px;
	height: 51px;
}

#menu ul {
	margin: 0;
	padding: 33px 0 0 10px;
	list-style: none;
	line-height: normal;
}

#menu li {
	display: block;
	float: left;
}

#menu a {

    height:25px;
	display: block;
	float: left;
	padding: 10px 20px 5px 20px;
	margin-top:-36px;
	text-decoration: none;
	background: url(images/img05.gif) no-repeat right 50%; 
	font: 14px;
	color:#FFFFFF;
}
.ie7 #menu a {

    height:25px;
	display: block;
	float: left;
	padding: 10px 20px 5px 20px;
	margin-top:-27px;
	text-decoration: none;
	background: url(images/img05.gif) no-repeat right 50%; 
	font: 14px;
	color:#FFFFFF;
}
#menu a:hover { text-decoration:none; background-image:url(images/navi_hover.png); padding:-3px; }

#menu .current_page_item a {
	padding-left: -0px;
	
}
#logo
{
 width:300px;
 height:60px;
 background-image:url(images/logo.png);
 float:left;
 margin-left:-10px;
 padding-bottom:10px;
 margin-top:-62px;
}
.ie7 #logo
{
 width:300px;
 height:57px;
 background-image:url(images/logo.png);
 float:left;
 margin-top:-10px;
}
		</style>
	</head>
	<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<div id="headers">
    <!-- Top Add. strats from here -->
    <a href="#"><div id="logo" style="margin-left:60px;"></div></a>
   
    <!-- Top Add. ends here -->
    
    <!-- Navigation starts from here -->
    <div id="header">
	<div id="menu">
		<ul>
			
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Job Seeker</a></li>
			<li><a href="#">Employer</a></li>
			<li><a href="#">Operation</a></li>
			<li><a href="">Banners</a></li>
            <li><a href="">Online Markiting</a></li>
            <li><a href="">General</a></li>
            <li><a href="#" style="background-image:none;"></a></li>
		</ul>
        <div id="vertical_line" style="width:1350px; margin-left:-290px;"></div>
	</div>
	</div>
</div>
<!--header ends here-->

    <div align="center" style="background:#FFFFFF;">
		<h3 style="margin-right:630px; color:#663399; margin-top:-20px;">Search Consultant</h3>
        <a href="consultant_info.html" style="margin-left:600px;"><img src="images/add_record.png" border="none"></a>
		<form action="#" style="width:800px;">
			<fieldset style="height:40px; padding-top:10px;">
			<input type="text" name="search" value="" id="id_search" placeholder="Search" autofocus style="margin-right:590px;" />
			<p align="right" style="margin-top:-29px;
            padding:5px 5px 5px 0px; color:#663399;">Total Count: (20)</p>
			</fieldset>
		</form>
			
		<table id="table_example">
			<thead>
				<tr>
					
					<th width="3%">S.NO.</th>
                    <th width="20%">Company Name</th>
                    <th width="15%">Contact Person</th>
					<th width="10%">Contact No.</th>
					<th width="6%">Extension</th>
					<th width="8%">Location</th>
					<th width="2%">Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                	<td>1</td>
					<td align="left"><a href="consultantinfo_display.html">Global PVT. LTD.</a></td>
                    <td align="left">Mr. Rakesh Sinha</td>
					<td>941-964-8535</td>
					<td>024</td>
					<td>Delhi</td>

					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>2</td>
					<td align="left"><a href="#">Sigma Consultancy Services</a></td>
                    <td align="left">Mr. Gaurav Kansal</td>
					<td>941-964-9543</td>
					<td>09</td>
					<td>Mumbai</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>3</td>
					<td align="left"><a href="#">Social Network</a></td>
                    <td align="left">Mr. Siddharth Sinha</td>
					<td>941-964-5617</td>

					<td>743</td>
					<td>Delhi</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>4</td>
					<td align="left"><a href="#">Network PVT. LTD.</a></td>
                    <td align="left">Mr. Gurpal Singh Sachdeva</td>
					<td>941-964-9511</td>
					<td>2998</td>

					<td>Delhi</td>

					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>5</td>
					<td align="left"><a href="#">webnet consultancy</a></td>
                    <td align="left">Mrs. Ruchi Sinha</td>
					<td>941-964-2757</td>
					<td>1836</td>
					<td>Noida</td>

					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
					<td>6</td>
					<td align="left"><a href="#">get job Consultancy</a></td>
                    <td align="left">Mr. Pankaj Gupta</td>
					<td>941-964-2575</td>

					<td>N/A</td>
					<td>Gurgaon</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>7</td>
					<td align="left"><a href="#">Global PVT. LTD.</a></td>
                    <td align="left">Mr. Salil Pandeya</td>
					<td>941-964-4967</td>
					<td>N/A</td>
					<td>ghaziabad</td>

					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>8</td>
					<td align="left"><a href="#">Vibha job search</a></td>
                    <td align="left">Mr. Abhishek Yadav</td>
					<td>941-964-7453</td>
					<td>N/A</td>
					<td>ghaziabad</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>9</td>
					<td align="left"><a href="#">Perfect Consolidate Pvt. Ltd.</a></td>
                    <td align="left">Mrs. Komal Yadav</td>
					<td>941-964-6302</td>
					<td>949</td>
					<td>Noida</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>10</td>
					<td align="left"><a href="#">Shobha PVT. LTD.</a></td>
                    <td align="left">Mr. Dhruv Srivastava</td>
					<td>941-964-1234</td>
					<td>102</td>

					<td>Dehradun</td>

					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>


				<tr>
                	<td>11</td>
					<td align="left"><a href="#">reliance copnsultancy</a></td>
                    <td align="left">Mr. Rakesh Sinha</td>
					<td>941-964-4856</td>
					<td>N/A</td>
					<td>Agra</td>

					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
					<td>12</td>
					<td align="left"><a href="#">Global PVT. LTD.</a></td>
                    <td align="left">Mr. Lokesh Sinha</td>
					<td>941-964-2686</td>

					<td>N/A</td>
					<td>ghaziabad</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>

				<tr>
                	<td>13</td>
					<td align="left"><a href="#">Aalil PVT. LTD.</a></td>
                    <td align="left">Mr. Rakesh Sinha</td>
					<td>941-964-5792</td>
					<td>387</td>
					<td>Delhi</td>

					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>

				</tr>

				<tr>
                	<td>14</td>
					<td align="left"><a href="#">professional Consultant</a></td>
                    <td align="left">Mr. Rakesh Sinha</td>
					<td>941-964-1599</td>
					<td>176</td>
					<td>Punjab</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
	
				</tr>
                <tr>
                	<td>15</td>
					<td align="left"><a href="#">Perfect PVT. LTD.</a></td>
                    <td align="left">Mr. Rakesh Sinha</td>
					<td>941-964-1599</td>
					<td>N/A</td>
					<td>Noida</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>

				</tr>
                <tr>
                	<td>16</td>
					<td align="left"><a href="#">Loerm Ipsum</a></td>
                    <td align="left">Mr. Rakesh Sinha</td>
					<td>941-964-1599</td>
					<td>N/A</td>
					<td>ghaziabad</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>
                <tr>
                	<td>17</td>
					<td align="left"><a href="#">Ruchi PVT. LTD.</a></td>
                    <td align="left">Mr. Rakesh Sinha</td>
					<td>941-964-1599</td>
					<td>176</td>
					<td>Delhi</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>
                <tr>
                	<td>18</td>
					<td align="left"><a href="#">Siddarth PVT. LTD.</a></td>
                    <td align="left">Mrs. Gunjan Sharma</td>
					<td>941-964-1599</td>
					<td>N/A</td>
					<td>ghaziabad</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
>
				</tr>
                <tr>
                	<td>19</td>
					<td align="left"><a href="#">Sai Consultancy</a></td>
                    <td align="left">Mr. Rati Srivastava</td>
					<td>941-964-1599</td>
					<td>N/A</td>
					<td>ghaziabad</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>
                <tr>
                	<td>20</td>
					<td align="left"><a href="#">Shobhit PVT. LTD.</a></td>
                    <td align="left">Mr. Rakesh Sinha</td>
					<td>941-964-1599</td>
					<td>176</td>
					<td>ghaziabad</td>
					<td><img src="images/delete.png" title="Delete" align="absmiddle" style="padding-left:10px;"></td>
				</tr>
			</table>
            

</div>



	    
	</body>
</html>