$(document).ready(function () {
	$('.carousel').carousel({
	  interval: 5000
	});

	// Adds class names that match Twitter Bootstrap defaults. This theme expects a menu named nav.
	$("ul#menu-nav li.current_page_item").addClass("active");
	$("ul#menu-nav").addClass("nav");
	$("ul.sub-menu").addClass("dropdown-menu");
	var parents = $("ul#menu-nav li").has("ul");
	parents.addClass("dropdown");
	$('.dropdown > a').append(' <b class="caret"></b>');

});