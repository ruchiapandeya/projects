<!DOCTYPE html>

<!--
/*
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
-->
	
<%@ page session="true" %>	
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Invenio</title>
		<link rel="stylesheet" type="text/css" href="../css/grid.css" media="screen"/>
		<link rel="stylesheet" href="../css/css3-buttons.css" type="text/css" media="screen">
	<style>
            header{
                background-image: url(../images/header_bg.png);
                height: 80px;
                width: 100%;
                        padding:10px 0px 0px 0px;
                        color:#d4d3d3;
                        margin-bottom:20px;
                        
            }
           
            header p{
                    font-size:11px;
                    color:white;
                    padding-left:20px;
                    display:inline;
            }
	    #logo{
		font-size: 26px;
		letter-spacing: 5px;
		font-weight: bold;
		padding: 0px 0px 10px 0px;
		margin-top: -28px;
	    }
	    .welcome_mesg{
		width: 300px;
		height: 20px;
		font-size: 11px;
		letter-spacing: normal;
		font-weight: normal;
		padding: 2px;
		margin-left: 62%;
	    }
        </style>
        <%
    		String file = request.getServletPath();
			file = file.split("/")[(file.split("/").length)-1];
			String typeParam = request.getParameter("type");
			int type = (typeParam != null ? Integer.parseInt(typeParam) : 1);
			
			String activeClass = "active";
			String dashboard_class = "";
			String upload_dump_class = "";
			String admin_class = "";

			String selectedTab = "_green";
			String dashboard_tab = "";
			String upload_dump_tab = "";
			String admin_tab = "";
			if(file.equals("dashboard.jsp")) {
				dashboard_class = activeClass;
				dashboard_tab = selectedTab;
			} else if(file.equals("upload_dump.jsp")) {
				upload_dump_class = activeClass;
				upload_dump_tab = selectedTab;
			} else if(file.equals("admin.jsp")) {
				admin_class = activeClass;
				admin_tab = selectedTab;
			}
		%>
	</head>
<body>
	<header>
			
            <section>
		<div id="logo">INVENIO<p class="welcome_mesg"><img src="../images/welcome_pic.png";> &nbsp;${sessionScope.userid}! &nbsp;&nbsp;<a href="/invenio/loginvalidate?signout=true">Logout</a></p></div>
                <nav class="dark">
                    <ul class="clear">
                        <li class="<%= dashboard_class %>"><a href="dashboard.jsp"><img src="../images/dashboard<%= dashboard_tab %>.png" width=14px; height=14px; style="margin-right: 4px;"/>DASHBOARD</a></li>
						<li class="<%= upload_dump_class %>"><a href="upload_dump.jsp"><img src="../images/userInfo<%= upload_dump_tab %>.png" width=14px; height=14px; style="margin-right: 4px;"/>Upload Dump</a></li>
						<li class="<%= admin_class %>"><a href="admin.jsp"><img src="../images/admin<%= admin_tab %>.png" width=14px; height=14px; style="margin-right: 4px;"/>ADMINISTRATOR</a></li>
                        <li><a href="#"><img src="../images/userInfo.png" width=14px; height=14px; style="margin-right: 4px;"/>USER INFO</a></li>
                        <li><a href="#"><img src="../images/support.png" width=14px; height=14px; style="margin-right: 4px;"/>SUPPORT</a></li>
                        <li><a href="#"><img src="../images/settings.png" width=14px; height=14px; style="margin-right: 4px;"/>SETTINGS</a></li>
                    </ul>
                </nav>
            </section>
    </header>


</body>
</html>
