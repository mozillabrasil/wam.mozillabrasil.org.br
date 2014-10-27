var define;
var products = {
    url: function ($page, $id) {
        return 'products/' + $page + ($.trim($id) ? '/' + $id : '');
    },
    firefox: function () {
        var self = this;
        $.ajax({
            url: self.url('firefox'),
            success: function ($html) {
                $('#page-container').html($html);
            }
        });
    },
    webmaker: function () {
        var self = this;
        $.ajax({
            url: self.url('webmaker'),
            success: function ($html) {
                $('#page-container').html($html);
            }
        });
    },
    lightbeam: function () {
        var self = this;
        $.ajax({
            url: self.url('lightbeam'),
            success: function ($html) {
                $('#page-container').html($html);
            }
        });
    },
    firefoxos: function () {
        var self = this;
        $.ajax({
            url: self.url('firefoxos'),
            success: function ($html) {
                $('#page-container').html($html);
            }
        });
    },
    marketplace: function () {
        var self = this;
        $.ajax({
            url: self.url('marketplace'),
            success: function ($html) {
                $('#page-container').html($html);
            }
        });
    },
    init: function () {
        var self = this;
        $.ajax({
            url: self.url('index'),
            success: function ($html) {
                $('#page-container').html($html);
            }
        });
//    $('#browser #flexible-replay').click(function () {
//        $('#browser').removeClass('animate');
//        setTimeout(function () {
//            $('#browser .stage').addClass('resetting').removeClass('resetting');
//            $('#browser').addClass('animate');
//        }, 400);
//        return false;
//    }).click();      
        console.log("products.init");
    }
};
define(function () {
    return products;
});