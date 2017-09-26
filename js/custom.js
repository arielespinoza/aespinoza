$(document).on('click', 'a.soft', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});

$('body').scrollspy({ target: '#sidebar', offset:80 });
/*
$('#mynav').affix({
    offset: {
      top: $('#mynav').offset().top
    , bottom: function () {
        return (this.bottom = $('.bs-footer').outerHeight(true))
      }
    }
  });
 */
/*
var clicked = false;
$('#mynav li a').click(
function(){
	$('#mycontent > div > h2').css('padding-top',0);
	$($( this ).attr('href') + ' > h2').css('padding-top','50px');
	clicked = true;
	}
);
*/
/*
$('body').on('activate.bs.scrollspy', function () {
  if(!clicked)$('#mycontent > div > h2').css('padding-top',0);
  clicked = false;
})
*/