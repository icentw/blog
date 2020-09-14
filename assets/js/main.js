// Section Navbar
$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '5px 25px')
    } else {
        $('#navbar').css('padding', '25px')
    }
})

$('.jarallax').jarallax();


//Check to see if the window is top if not then display button
$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.to-top').fadeIn();
    } else {
        $('.to-top').fadeOut();
    }
});
//Click event to scroll to top
$('.to-top').click(function (){
    $('html').animate({scrollTop: '0px'} ,300)
})


