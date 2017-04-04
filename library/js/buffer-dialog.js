jQuery(function($) {
    $('a.button-buffer').click(function(e) {
        e.preventDefault();

        href = $(this).attr('href');

        window.open(href, 'Buffer', 'height=660,width=860');
    });
});
