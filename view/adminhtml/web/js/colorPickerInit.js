require(['jquery', 'domReady!'], function ($) {
    'use strict';

    $('.magecondition-colpicker').colpick({
        /**
         * @param {String} hsb
         * @param {String} hex
         * @param {String} rgb
         * @param {String} el
         */
        onSubmit: function (hsb, hex, rgb, el) {
            $(el).val('#' + hex);
        }
    });
});
