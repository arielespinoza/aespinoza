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
//wow
var ancho = $(window).width();
  if(ancho > 900){
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
  }
//precarga imágenes
$(document).ready(function(){
  var ancho = $(window).width();
  if(ancho < 1440){
    $(".precarga").append("<img src='img/back-homeapp-md.jpg' alt='img'><img src='img/back-seguro-md.jpg' alt='img'><img src='img/back-altainmediata-md.jpg' alt='img'><img src='img/back-bnamericas-md.jpg' alt='img'><img src='img/back-altoincendios-md.jpg' alt='img'><img src='img/back-levitar-md.jpg' alt='img'>");
  }
  else{
    $(".precarga").append("<img src='img/back-homeapp.jpg' alt='img'><img src='img/back-seguro.jpg' alt='img'><img src='img/back-altainmediata.jpg' alt='img'><img src='img/back-bnamericas.jpg' alt='img'><img src='img/back-altoincendios.jpg' alt='img'><img src='img/back-levitar.jpg' alt='img'>")
  }
});
//Loader
$(window).load(function() {
  $(".loader").fadeOut("slow");
  $("body").removeClass("fixed");
  $(".precarga img").hide();
});
//Cover box
var ancho = $(window).width();
if(ancho > 900){
  $(".item").hover(function(){
    $(this).find(".cover").fadeIn("fast");
    $(this).addClass("byn");
  },function(){
    $(this).find(".cover").fadeOut("fast");
    $(this).removeClass("byn");
  });
}