var define;
var apps = {
    url: function ($page, $id) {
        return 'apps/' + $page + ($.trim($id) ? '/' + $id : '');
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
    return apps;
});