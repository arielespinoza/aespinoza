$(document).on('click', 'a.soft', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});

$('body').scrollspy({ target: '#sidebar', offset:80 });
