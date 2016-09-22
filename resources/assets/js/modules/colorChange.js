var $ = require('jquery');

module.exports = (function() {
    var blockColor = $('[data-block-color]');
    var colorPicker = $('[name="color"]');

    return {
        init: function() {
            colorPicker.change(function() {
                var color = $(this).val();
                blockColor.each(function() {
                    $(this).attr('data-block-color', color);
                })
            });
        }

    }
})();
