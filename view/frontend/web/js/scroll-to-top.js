define(['jquery'], function ($) {
    'use strict';

    return function (config, element) {
        var $scrollButton = $(element);

        let backgroundColor = config.background_color ? config.background_color : false;
        let iconColor = config.icon_color ? config.icon_color : false;
        let sideMargin = config.side_margin ? config.side_margin : '30px';
        let bottomMargin = config.bottom_margin ? config.bottom_margin : '30px';
        let buttonType = config.button_type ? config.button_type : false;
        let position = config.position ? config.position : 'right';

        if (backgroundColor) {
            $scrollButton.css('background-color', backgroundColor);
        }

        if (iconColor) {
            $scrollButton.css('--arrow-color', iconColor);
        }

        if (buttonType === 'square') {
            $scrollButton.css({
                'border-radius': '10%'
            });
        }

        $scrollButton.css({
            'right': position === 'right' ? sideMargin : 'auto',
            'left': position === 'left' ? sideMargin : 'auto',
            'bottom': bottomMargin
        });

        let breakpoint = config.breakpoint ? config.breakpoint : 200;

        $(window).scroll(function () {
            if ($(this).scrollTop() > breakpoint) {
                $scrollButton.fadeIn();
            } else {
                $scrollButton.fadeOut();
            }
        });

        $scrollButton.click(function () {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    };
});
