$(document).on('click', 'a.soft', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top-0
    }, 500);
});

$('body').scrollspy({ target: '#sidebar', offset:80 });

$(document).ready(function() {
	$('.arrow-up').hide(0);
	$(window).scroll(function(){
		var windowHeight = $(window).scrollTop();
		var contenido2 = $("#contacto").offset();
		contenido2 = contenido2.top;
		    if(windowHeight >= contenido2  ){
			$('.arrow-up').fadeIn(500);
		    }else{
			$('.arrow-up').fadeOut(500);
		}
    });
});