var define;
var home = {
    url: function ($page, $id) {
        return 'home/' + $page + ($.trim($id) ? '/' + $id : '');
    },
    init: function () {
        var self = this;
        $.ajax({
            url: self.url('index'),
            success: function ($html) {
                $('#page-container').html($html).find('#pm-slider').PMSlider({
                    speed: 520,
                    easing: 'ease',
                    loop: true,
                    controlNav: true, //false = no bullets / true = bullets / 'thumbnails' activates thumbs
                    controlNavThumbs: true,
                    animation: 'fade',
                    fullScreen: false,
                    slideshow: true,
                    slideshowSpeed: 7000,
                    pauseOnHover: true,
                    arrows: true,
                    fixedHeight: true,
                    fixedHeightValue: 800,
                    touch: true,
                    progressBar: false
                });
            }
        });
    }
};
define(function () {
    return home;
});