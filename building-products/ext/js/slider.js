$(document).ready(function () {
    $('img.menu_class').click(function () {
	$('ul.the_menu').slideToggle('medium');
	$(this).toggleClass("active"); return false;
    });
});