$(document).on("mousemove", function(e) {
	$(".rocket").css({
		left: e.pageX - 90,
		top: e.pageY - 25
	});
});

$(document).mouseleave(function() {
	$(".rocket").addClass("center");
});
$(document).mouseenter(function() {
	$(".rocket").removeClass("center");
});