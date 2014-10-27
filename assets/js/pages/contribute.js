var define;
var contribute = {
    url: function ($page, $id) {
        return 'contribute/' + $page + ($.trim($id) ? '/' + $id : '');
    },
    init: function () {
        var self = this;
        $.ajax({
            url: self.url('index'),
            success: function ($html) {
                $('#page-container').html($html);
            }
        });
    }
};
define(function () {
    return contribute;
});