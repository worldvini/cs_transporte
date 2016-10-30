
$(document).ready(function(){
	//carousel
	$('.carousel').carousel({
		interval: 3500,
		keyboard: true
	}); 
	//menu mobile bootstrap fechando ao click de um link
	$(function () {
        $('.navbar-collapse ul li a:not(.dropdown-toggle)').bind('click touchstart', function () {
        	$('.navbar-toggle:visible').click();
        });
	});
	//rolagem suave
	
	/*$('.scroll').click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	});*/

	
	function scrollSuave(element, speed){
		var href = element.attr('href');
		var top = $(href).offset().top;

		$("html , body").animate({scrollTop : top}, speed);
	}

	$(function(){
		$("#scroll a").click(function(e){
			e.preventDefault();

			scrollSuave($(this), 800);
		});
	});


});
