$('document').ready(function() {
	
	$('#carousel').carousel({
  	interval: 5000
	});

	$("#menu-nav li").has("ul").addClass("dropdown");
	$('#menu-nav li.dropdown > a').append(' <b class="caret"></b>');

	}
)
