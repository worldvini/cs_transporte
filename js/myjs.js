
$(document).ready(function(){
	$('.carousel').carousel({
		interval: 3500,
		keyboard: true
	});

	$(function () {
        $('.navbar-collapse ul li a:not(.dropdown-toggle)').bind('click touchstart', function () {
        	$('.navbar-toggle:visible').click();
        });
	});

	$('.scroll').click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	});
});
