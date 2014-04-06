<link href="css/style.css" rel="stylesheet" type="text/css" />

  <link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/map.js"></script>

<div align="center"> 
    
    
    <!--content starts from here-->
    
        
    	<div id="box" align="left"> 
         <!-- insert the page content here -->
        <div id="map-box">
        <div id="container-map">
          <img src="images/map.jpg" height="350" width="280" alt="rp" name="map1" border="0" usemap="#map1Map" id="map" />
           <map name="map1Map" id="map1Map">
                <area class="sw" href="#"  shape="poly" coords="156,340,164,322,167,316,166,300,145,301,154,296,154,300,136,303,130,317,105,343,125,334" alt="sw"  title="South(108)" /> 
             <area class="s" href="#"  shape="poly" coords="180,271,201,269,197,323,174,324,174,324,166,312,171,299" alt="s" title="South Jobs(108)" /> 
             <area class="se" href="#"  shape="poly" coords="200,319,253,315,275,299,268,287,261,279,255,279,202,266" alt="se" title="London & South East Jobs(108)" />
             <area class="e" href="#"  shape="poly" coords="231,271,255,279,270,267,276,241,256,225,246,238,240,240,232,248,221,264,223,265" alt="e" title="East Jobs(108)" />
             <area class="em" href="#"  shape="poly" coords="239,238,215,265,198,214,217,197,235,196,245,217" alt="em" title="East Midlands(208)" />
             <area class="wm" href="#"  shape="poly" coords="173,272,210,263,197,218,171,231" alt="wm" title="West Midlands Jobs(608)" />
             <area class="w" href="#"  shape="poly" coords="163,210,135,208,135,238,141,236,147,254,119,267,123,281,144,279,154,288,176,288" alt="w" title="Wales Jobs(108)" />
                <area class="yl" href="#"  shape="poly" coords="208,209,212,196,240,196,228,170,208,158,190,160,183,183,189,189,193,206" alt="yl"  title="Yorkshire & Lincolnshire Jobs(108)" />
                <area  class="nw" href="#"  shape="poly" coords="186,209,169,209,174,184,163,187,156,169,163,155,160,153,176,137,176,185,186,185" alt="nw" title="North West England Jobs(567)" class="vtip"/>     
                <area class="ne" href="#"  shape="poly" coords="190,157,207,154,211,157,202,124,198,113,178,139" alt="ne" title="North East England Jobs(870)"  />
             <area class="scot" href="#" shape="poly" coords="163,148,195,117,180,105,166,109,173,99,182,95,175,88,181,87,201,44,196,37,165,37,144,46,161,27,169,9,172,-4,147,2,128,-3,100,10,89,42,89,50,109,64,109,74,98,78,98,93,112,92,116,103,109,133,114,133,104,108,135,126,124,148,127,156,134,154,140,161" alt="Scot" title="Scotland Jobs(108)" />
                <area class="ni" href="#"  shape="poly" coords="122,167,107,183,101,184,93,181,89,170,80,173,81,178,79,179,65,165,68,156,82,149,90,138,101,134,109,134" alt="ni" title="Northern Ireland Jobs(108)" />
               
          <area class="ri" href="#"  shape="poly" coords="57,167,57,162,23,173,16,198,11,271,48,276,27,276,91,256,104,230,100,186"  alt="ri"  title="Republic of Ireland(99)"/>
          </map>
        </div> <!--#container-map-->

        <div id="areas">
           
            
            <div id="counties">
            
                <!--start-->
                <div id="st-c" class="counties-container">
                    <p class="tip"><strong>Please select the regions and/or counties you wish to cover either using the list to the left or the map.</strong></p>
                    <p class="tip">Tip: Double clicking a region will select all counties in that region.</p></p>
                   
                </div>
            
                <!--nw-->
                <div id="nw" class="counties-container">
                    <h2 style="color:#ffffff">North West</h2>
                     
                    <p class="select"><a class="selectall" title="Select All"  style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="nw-t" style="width:100%;">
                        <input type="checkbox" /><label>Greater Manchester <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>Lancashire <font color="#FF9900" style="font-size:9px"> (33)</font></label>
                        <input type="checkbox" /><label>Merseyside <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>Cheshire <font color="#FF9900" style="font-size:9px"> (132)</font></label>
                        <input type="checkbox" /><label>Cumbria <font color="#FF9900" style="font-size:9px"> (25)</font></label>
                        
                    </fieldset>
                    
                </div>
                
                
                <!--ne-->
                <div id="ne" class="counties-container">
                    <h2 style="color:#ffffff">North East</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FFFFFF">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="ne-t" style="width:100%;">
                        <input type="checkbox" /><label>County Durham <font color="#FF9900" style="font-size:9px"> (10)</font></label>
                        <input type="checkbox" /><label>Northumberland <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>Tyne and Wear <font color="#FF9900" style="font-size:9px"> (300)</font></label>
                        <input type="checkbox" /><label>Tees Valley <font color="#FF9900" style="font-size:9px"> (120)</font></label>
                    </fieldset>           
                </div>
                
                <!--yl-->
                <div id="yl" class="counties-container">
                    <h2 style="color:#ffffff">Yorkshire &amp; Lincolnshire</h2>
        <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="yl-t" style="width:100%;">
                        <input type="checkbox" /><label>Yorkshire and the Humber <font color="#FF9900" style="font-size:9px"> (33)</font></label>
                        <input type="checkbox" /><label>West Yorkshire <font color="#FF9900" style="font-size:9px"> (7)</font></label>
                        <input type="checkbox" /><label>South Yorkshire <font color="#FF9900" style="font-size:9px"> (9)</font></label>
                        <input type="checkbox" /><label>East Riding of Yorkshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>North Yorkshire <font color="#FF9900" style="font-size:9px"> (80)</font></label>
                        <input type="checkbox" /><label>North Lincolnshire <font color="#FF9900" style="font-size:9px"> (10)</font></label>
                        <input type="checkbox" /><label>North East Lincolnshire <font color="#FF9900" style="font-size:9px"> (0)</font></label>
                    </fieldset>
                </div>
                
                <!--wm-->
                <div id="wm" class="counties-container">
                    <h2 style="color:#ffffff">West Midlands</h2>
        <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="wm-t" style="width:100%;">
                        <input type="checkbox" /><label>Staffordshire <font color="#FF9900" style="font-size:9px"> (44)</font></label>
                        <input type="checkbox" /><label>Worcestershire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Warwickshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Shropshire <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Herefordshire <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                    </fieldset>
                </div>
                
                <!--em-->
                <div id="em" class="counties-container">
                    <h2 style="color:#ffffff">East Midlands</h2>
        <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="em-t" style="width:100%;">
                        <input type="checkbox" /><label>Derbyshire <font color="#FF9900" style="font-size:9px"> (0)</font></label>
                        <input type="checkbox" /><label>Nottinghamshire <font color="#FF9900" style="font-size:9px"> (4)</font></label>
                        <input type="checkbox" /><label>Lincolnshire <font color="#FF9900" style="font-size:9px"> (34)</font></label>
                        <input type="checkbox" /><label>Leicestershire <font color="#FF9900" style="font-size:9px"> (04)</font></label>
                        <input type="checkbox" /><label>Rutland <font color="#FF9900" style="font-size:11px"> (54)</font></label>
                        <input type="checkbox" /><label>Northamptonshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                    </fieldset>
                    
                </div>
                
                <!--sw-->
                <div id="sw" class="counties-container">
                    <h2 style="color:#ffffff">South West</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="sw-t" style="width:100%;">
                        <input type="checkbox" /><label>Somerset <font color="#FF9900" style="font-size:9px"> (54)</font></label>
                        <input type="checkbox" /><label>Bristol <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                        <input type="checkbox" /><label>Gloucestershire <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>Wiltshire <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Dorset <font color="#FF9900" style="font-size:9px"> (14)</font></label>
                        <input type="checkbox" /><label>Devon <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Cornwall <font color="#FF9900" style="font-size:9px"> (0)</font></label>
                    </fieldset>
                </div>
                
                <!--e-->
                <div id="e" class="counties-container">
                    <h2 style="color:#ffffff">East</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff" >Deselect All</a></p>
                    <fieldset class="e-t" style="width:100%;">
                        <input type="checkbox" /><label>Essex <font color="#FF9900" style="font-size:9px"> (15)</font></label>
                        <input type="checkbox" /><label>Hertfordshire <font color="#FF9900" style="font-size:9px"> (400)</font></label>
                        <input type="checkbox" /><label>Bedfordshire <font color="#FF9900" style="font-size:9px"> (14)</font></label>
                        <input type="checkbox" /><label>Cambridgeshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Norfolk <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Suffolk <font color="#FF9900" style="font-size:9px"> (10)</font></label>
                    </fieldset>
                    
                </div>
                
                <!--s-->
                <div id="s" class="counties-container">
                    <h2 style="color:#ffffff">South</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="s-t" style="width:100%;">
                        <input type="checkbox" /><label>Berkshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Hampshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Wiltshire <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Oxford <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                    </fieldset>
                </div>
                
                <!--se-->
                <div id="se" class="counties-container">
                    <h2 style="color:#ffffff">South East</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="se-t" style="width:100%;">
                        <input type="checkbox" /><label>Greater London <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Kent <font color="#FF9900" style="font-size:9px"> (32)</font></label>
                        <input type="checkbox" /><label>East Sussex <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>West Sussex <font color="#FF9900" style="font-size:9px"> (12)</font></label>
                        <input type="checkbox" /><label>Surrey <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Hampshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Buckinghamshire <font color="#FF9900" style="font-size:9px"> (33)</font></label>
                    </fieldset>
                </div>
                
                <!--scot-->
                <div id="scot" class="counties-container">
                    <h2 style="color:#ffffff">Scotland</h2>
                    <p class="select" ><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="scot-t" style="width:100%;">
                        <input type="checkbox" /><label>Angus &amp; Dundee <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Argyll <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Ayrshire <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Dumfries &amp; Galloway <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>Edinburgh &amp; Lothians <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Fife <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Glasgow &amp; Clyde Valley <font color="#FF9900" style="font-size:9px"> (3)</font></label>
                        <input type="checkbox" /><label>The Scottish Highlands <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>Orkney <font color="#FF9900" style="font-size:9px"> (1)</font></label>
                        <input type="checkbox" /><label>The Outer &amp; Inner Hebrides <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Perthshire <font color="#FF9900" style="font-size:9px"> (12)</font></label>
                        <input type="checkbox" /><label>The Scottish Borders <font color="#FF9900" style="font-size:9px"> (3)</font></label>
                        <input type="checkbox" /><label>The Shetland Islands <font color="#FF9900" style="font-size:9px"> (4)</font></label>
                        <input type="checkbox" /><label>Stirling &amp; Trossachs <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                    </fieldset>
                    
                </div>
                
                <!--ni-->
                <div id="ni" class="counties-container">
                    <h2 style="color:#ffffff">Northern Ireland</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="ni-t" style="width:100%;">
                        <input type="checkbox" /><label>County Antrim <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>County Armagh <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Down <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Fermanagh <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Londonderry <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Tyrone <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                    </fieldset>  
                </div>
                <!--ri-->
                <div id="ri" class="counties-container">
                    <h2 style="color:#ffffff">Republic of Ireland</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="ni-t" style="width:100%;">
                        <input type="checkbox" /><label>County Cork <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>County Dublin <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Galway <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Killarney <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Sligo <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Limerick <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                        <input type="checkbox" /><label>County Waterford <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                        <input type="checkbox" /><label>County New Ross <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                    </fieldset>  
                </div>
                
                <!--w-->
                <div id="w" class="counties-container">
                    <h2 style="color:#ffffff">West</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#ffffff">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#ffffff">Deselect All</a></p>
                    <fieldset class="w-t" style="width:100%;">
                        <input type="checkbox" /><label>Anglesey <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Conwy Valley <font color="#FF9900" style="font-size:9px"> (6)</font></label>
                        <input type="checkbox" /><label>Denbighshire <font color="#FF9900" style="font-size:9px"> (5)</font></label>
                        <input type="checkbox" /><label>Flint <font color="#FF9900" style="font-size:9px"> (5)</font></label>
                        <input type="checkbox" /><label>Wrexham <font color="#FF9900" style="font-size:9px"> (4)</font></label>
                        <input type="checkbox" /><label>Gwynedd <font color="#FF9900" style="font-size:9px"> (3)</font></label>
                        <input type="checkbox" /><label>Powys <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>Cardiganshire <font color="#FF9900" style="font-size:9px"> (12)</font></label>
                        <input type="checkbox" /><label>Pembrokshire <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Carmathenshire <font color="#FF9900" style="font-size:9px"> (130)</font></label>
                        <input type="checkbox" /><label>Glamorgan <font color="#FF9900" style="font-size:9px"> (130)</font></label>
                        <input type="checkbox" /><label>Monmouthshire <font color="#FF9900" style="font-size:9px"> (130)</font></label>
                        <input type="checkbox" /><label>Glamorgan <font color="FF9900" style="font-size:9px"> (30)</font></label>
                    </fieldset>
                </div>
                
            </div> <!--.counties-->
            
        </div> <!--.areas-->

<div class="clear"></div>
            
</div> <!--#map-box-->	
<!--<input class="submit" type="submit" value="Submit" onclick="alert('For a full description of this demo, please visit: http://www.ianlunn.co.uk/blog/bbc-news-jquery-map/');" />-->
            
        </div><br />
  <table style="width:100%; border-spacing:2px;" align="center">
          <tr ><th>Job Title</th><th>Job Title</th><th>Job Title</th></tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">Production Support Analyst</a>  <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Datastage Developer</a><font color="#FF6600" style="font-size:10px"> (44)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Senior Performance Engineer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          
		  <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">.NET Developer (ASP.NET/C#/WebForms)</a><font color="#FF6600" style="font-size:10px"> (43)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Senior Java Developer</a> <font color="#FF6600" style="font-size:10px"> (123)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Senior Project Manager</a> <font color="#FF6600" style="font-size:10px"> (44)</font></td>
          <
          <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">UNIX Engineer (Permanent)</a> <font color="#FF6600" style="font-size:10px"> (21)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Netbackup Administrator</a> <font color="#FF6600" style="font-size:10px"> (21)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Build Support Engineer</a> <font color="#FF6600" style="font-size:10px"> (3)</font></td>
          
          </tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">sap sd billing consultant</a> <font color="#FF6600" style="font-size:10px"> (44)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Manager, Digital Video Engineering</a> <font color="#FF6600" style="font-size:10px"> (55)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Web Systems Administrator</a> <font color="#FF6600" style="font-size:10px"> (66)</font></td>
          
          </tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">project manager</a> <font color="#FF6600" style="font-size:10px"> (980)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">web applications developer</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Webmethods Developer</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">Sr Java Developer</a> <font color="#FF6600" style="font-size:10px"> (80)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Technical Recruiter</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Healthcare IT Consultants</a> <font color="#FF6600" style="font-size:10px"> (47)</font></td>
          
          </tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">Drupal /PHP Developer</a> <font color="#FF6600" style="font-size:10px"> (44)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">SAP EHS Consultant</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">SAP CRM Functional Associate</a> <font color="#FF6600" style="font-size:10px"> (45)</font></td>
          
          </tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">Adobe Integration Architect- Manager</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Sr. Project Cost Estimator</a> <font color="#FF6600" style="font-size:10px"> (76)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Siebel Developer</a> <font color="#FF6600" style="font-size:10px"> (55)</font></td>
          
          </tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#01588d;">FUSE ESB Architect</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">DataStage Developer</a> <font color="#FF6600" style="font-size:10px"> (32)</font></td>
          <td><a href="#" style="font-size:10px; color:#01588d;">Software Engineer- Mainframe</a> <font color="#FF6600" style="font-size:10px"> (23)</font></td>
          
          </tr>         
        </table>       	



</div> 