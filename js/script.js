$(document).ready(function () {
	$('.carousel').carousel({
	  interval: 5000
	});


	// Adds class names that match Twitter Bootstrap defaults. This theme expects a menu named nav.
	$("li.current_page_item").addClass("active");
	$("ul#menu-nav").addClass("nav");

});