/**
 * @author musings
 */
$(document).ready(function() 
{	
	
	$("#als-header").als({
		visible_items: 4,
		scrolling_items: 1,
		orientation: "horizontal",
		circular: "yes",
		autoscroll: "yes",
		interval: 4000,
		direction: "left"
	});
	
	
	$("#demo1").als({
		visible_items: 3,
		scrolling_items: 2,
		orientation: "horizontal",
		circular: "no",
		autoscroll: "no"
	});
	
	$("#demo2").als({
		visible_items: 4,
		scrolling_items: 1,
		orientation: "horizontal",
		circular: "yes",
		autoscroll: "no"
	});
	
	$("#demo3").als({
		visible_items: 4,
		scrolling_items: 2,
		orientation: "horizontal",
		circular: "yes",
		autoscroll: "yes",
		interval: 4000
	});
	
	$("#demo4").als({
		visible_items: 4,
		scrolling_items: 2,
		orientation: "horizontal",
		circular: "yes",
		autoscroll: "no",
		start_from: 2
	});
	
	//slide animato alle varie parti della pagina
	$("a[href^='#'],p.su").click(function(e){
		e.preventDefault();
		var chi = $(this).attr("href"),
		    dove = $(chi).offset(),
			scrollElem = 'html,body',
			menu = $("#menu").outerHeight(true);
		/**	
		if($.browser.opera)
		{
			scrollElem = 'html';
		}
		*/
		$("#menu").hide();
		
		if(chi == undefined || chi == "#logo")
		{
			$(scrollElem).animate({scrollTop:0},2500);	
		}
		else
		{
			$(scrollElem).animate({scrollTop:dove.top-menu},1500,function()
			{
				$("#menu").fadeIn(600);
			});
		}
	});
	
	//faccio sparire il menu se arrivo in cima alla pagina scrollando con il mouse
	$(document).scroll(function()
	{
		var scrollWin = 'html';
		/**
		if($.browser.webkit)
		{
			scrollWin = 'body';
		}
		*/
		if($(scrollWin).scrollTop() == 0)
		{
			$("#menu").hide();
		}
	});
	
	//premuto il tasto ctrl?
	$(document).keyup(function(e) {
	  if(e.which == 17)
	  {
	  	
	  }
	}); 
	
	//logo hover
	$("#logo_img").hover(function()
	{
		$(this).attr("src","images/als_logo_hover212x110.png");
	},function()
	{
		$(this).attr("src","images/als_logo212x110.png");
	});
	
	//logo click
	$("#logo_img").click(function()
	{
		location.href = "index.php";
	});
	
	//logo hover nel menu
	$("#logo_menu_img").hover(function()
	{
		$(this).attr("src","images/als_logo_hover96x50.png");
	},function()
	{
		$(this).attr("src","images/als_logo96x50.png");
	});
	
	
	$("a[href^='http://']").attr("target","_blank");
	$("a[href^='http://als']").attr("target","_self");
	
	//apertura codice demo
	
	$(".codice_trigger").click(function()
	{
		var demo_id = $(this).next(".codice_demo").attr("id");
		$("#" + demo_id).slideToggle(1500);
		
		$(this).toggleClass("codice_aperto");
		
		if($(this).hasClass("codice_aperto"))
		{
			$(this).html("Close the code for this demo <span><img src='images/zoom_out.png' alt='close' title='close the code' /></span>");
		}
		else
		{
			$(this).html("Look at the code for this demo <span><img src='images/zoom_in.png' alt='open' title='look at the code' /></span>");
		}
	});
	
	$('pre code').each(function(i, e) {hljs.highlightBlock(e)});
});