var define;
var blog = {
    url: function ($page, $id) {
        return 'blog/' + $page + ($.trim($id) ? '/' + $id : '');
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
    return blog;
});