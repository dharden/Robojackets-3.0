$('#carousel').carousel({
  interval: 5000
});

// Adds class names that match Twitter Bootstrap defaults. This theme expects a menu named nav.
$("#menu-nav").addClass("nav").find("li.current_page_item").addClass("active");
$("ul.sub-menu").addClass("dropdown-menu");
var parents = $("#menu-nav li").has("ul");
parents.addClass("dropdown");
$('#menu-nav li.dropdown > a').append(' <b class="caret"></b>');
