var WAM = {
    support: Modernizr.csstransitions && Modernizr.csstransforms,
    language: null,
    onLocalized: function () {
        var $l10n = document.webL10n;
        $l10n.setLanguage(WAM.language);
    },
    onSubmitNewsletter: function () {
        var $email = $('#pm-footer-subscribe #email').val();
        if ($.trim($email)) {
            var $hash = '#subscribe/add/' + $email;
            window.location.hash = $hash;
        }
        return false;
    },
    onHashChange: function () {
        var hash = (window.location.hash).toString();
        hash = hash.replace('#', '');
        if (!$.trim(hash)) {
            window.location.hash = '#home';
            return false;
        }
        var $explode = hash.split('/');
        var $page = $explode[0];
        var $method = $.trim($explode[1]) ? $explode[1] : 'init';
        var $value = $.trim($explode[2]) ? $explode[2] : '';
        require(['pages/' + $page], function ($object) {
            if ($.isFunction($object[$method])) {
                $object[$method]($value);
                if ($('body').hasClass('menu-opened')) {
                    WAM.onToggleMenu();
                }
            } else {
                console.log($object);
                console.log($method);
                console.log($value);
            }
        });
    },
    onScroll: function () {
        if ($(window).width() > 991) {
            if ($(this).scrollTop() > 47) {
                $('header').addClass('fixed');
            } else {
                $('header').removeClass('fixed');
            }
        }
    },
    onDropDownMenu: function (e) {
        var body = $(this).find('> :last-child');
        var head = $(this).find('> :first-child');
        if (e.type === 'mouseover') {
            body.fadeIn(100);
        } else {
            body.fadeOut(100);
        }
    },
    onToggleMenu: function () {
        $('#pm-mobile-menu-trigger i').toggleClass('fa-bars fa-close');
        $('body').toggleClass('menu-opened menu-collapsed');
    },
    init: function () {
        var self = this;
        window.onhashchange = self.onHashChange;
        window.onhashchange();
        $(window).scroll(self.onScroll);
        $('.pm-dropdown.pm-language-selector-menu .pm-dropmenu-active a').click(function () {
            WAM.language = $(this).data('l10n');
            self.onLocalized();
        });
        $('.pm-dropdown.pm-language-selector-menu .pm-dropmenu-active a:first').click();
        $('#pm-footer-subscribe').submit(self.onSubmitNewsletter);
        $('#fox-loading #fox').sprite({fps: 12, no_of_frames: 44, rewind: true});
        $('.pm-dropdown.pm-language-selector-menu').on('mouseover', self.onDropDownMenu).on('mouseleave', self.onDropDownMenu);
        $('#pm-mobile-menu-trigger').click(self.onToggleMenu);
        $('.pm-mobile-global-menu').css({
            'height': $('#pm_layout_wrapper').height()
        });
        require.config({
            urlArgs: (new Date()).getTime()
        });
        $.ajaxSetup({
            beforeSend: function () {
                $('body').addClass('blur');
            },
            complete: function () {
                $('body').removeClass('blur');
                self.onLocalized();
            }
        });
    }
};
WAM.init();