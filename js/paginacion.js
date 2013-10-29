$(document).ready(function () {
	$('#slides').slides({
		play: 0,
		pause: 0,
		hoverPause: false,
		generatePagination: false,
	});
	$(".prev").click(function(){
		$('html, body').animate({scrollTop:0}, 1500);
	});
	$(".next").click(function(){
		$('html, body').animate({scrollTop:0}, 1500);
	});
});