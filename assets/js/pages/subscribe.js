var define;
var subscribe = {
    url: function ($page, $id) {
        return 'subscribe/' + $page + ($.trim($id) ? '/' + $id : '');
    },
    add: function ($email) {
        var self = this;
        $.ajax({
            url: self.url('add'),
            data :{
                'email' : $email
            },
            method : 'POST',
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
    }
};
define(function () {
    return subscribe;
});