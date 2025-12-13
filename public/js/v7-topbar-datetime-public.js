(function ($) {
    'use strict';

    $(function () {
        $('body').addClass('has-v7-topbar');
        var $topbar = $('#v7-topbar-datetime');
        var $time = $topbar.find('.v7-time');
        if ($time.length) {
            function updateTime() {
                var now = new Date();
                var timeStr = now.toLocaleTimeString('en-US', {
                    hour: 'numeric',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: true
                });
                $time.text(timeStr);
            }
            setInterval(updateTime, 1000);
        }
        if (v7_topbar_datetime_vars.hide_on_scroll) {
            var lastScrollTop = 0;
            $(window).scroll(function () {
                var scrollTop = $(this).scrollTop();
                if (scrollTop > lastScrollTop && scrollTop > 50) {
                    $topbar.addClass('hidden');
                } else {
                    $topbar.removeClass('hidden');
                }
                lastScrollTop = scrollTop;
            });
        }
    });

})(jQuery);