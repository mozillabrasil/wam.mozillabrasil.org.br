var define;
var events = {
    url: function ($page, $id) {
        return 'events/' + $page + ($.trim($id) ? '/' + $id : '');
    },
    view: function ($id) {
        var self = this;
        $.ajax({
            url: self.url('view', $id),
            success: function ($html) {
                $('#page-container').html($html);
            }
        });
    },
    page: function ($page_number) {
        var self = this;
        $.ajax({
            url: self.url('page', $page_number),
            beforeSend: function () {
                $('#page-container .reset-pulse-sizing li').removeClass('current').addClass('inactive');
                $('#page-container .reset-pulse-sizing li a').removeClass('current').addClass('inactive');
                $('#page-container .reset-pulse-sizing .page_' + $page_number).removeClass('inactive').addClass('current');
                $('#page-container #list_events').html('<p class="text">Carregando</p>');
            },
            success: function ($html) {
                $('#page-container #list_events').html($html);
            }
        });
    },
    init: function () {
        var self = this;
        $.ajax({
            url: self.url('index'),
            success: function ($html) {
                $('#page-container').html($html).find('.reset-pulse-sizing li').click();
                self.page(1);
            }
        });
    }
};
define(function () {
    return events;
});