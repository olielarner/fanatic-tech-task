import $ from 'jquery';

$('#main-menu li').hover(function () {
	var isHovered = $(this).is(':hover');
	if (isHovered) {
		$(this).children('ul').stop().slideDown(300);
	} else {
		$(this).children('ul').stop().slideUp(300);
	}
});

$('.nav-burger').on('click', function () {
	$('.menu-links').toggleClass('h-screen h-0');
	$('.hamburger-line-three').toggleClass('rotate-45 bottom-1');
	$('.hamburger-line-two').toggleClass('-rotate-45 top-1');
	$('.hamburger-line-one').toggleClass('opacity-100 opacity-0');
});
