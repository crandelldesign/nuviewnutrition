jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            //$('#back-to-top').fadeIn();
            $('#back-to-top').addClass('on-display');
        } else {
            //$('#back-to-top').fadeOut();
            $('#back-to-top').removeClass('on-display');
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
