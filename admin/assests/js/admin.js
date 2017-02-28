$(function() {
	$(document).ready(function(){
	    $("#userbox").click(function() {
	    	$(".dropdown-menu").toggleClass("dropdown-menu-open");
	    });
	});
});

$(document).ready(function(){
    $(".nav-parent").click(function(){
        $(".nav-children").toggleClass("nav-expanded");
    	});
});



