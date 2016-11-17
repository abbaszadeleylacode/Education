$(document).ready(function() {
	$('.donenHisseler img')
	.on('mouseover',function(event) {
		$(this).animate({'opacity':'.5'}, 400);
		$(this).animate({'marginLeft': '-50px'}, 400);
	});
	$('.donenHisseler img')
	.on('mouseleave',function(event) {
		$(this).animate({'opacity':'1'}, 400);
		$(this).animate({'marginLeft': '0'}, 400);
	});


});