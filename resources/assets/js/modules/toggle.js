var $ = require('jquery');

module.exports = (function() {
    return {
        init: function() {
            var toggle = $('[data-toggle]');
            var toggleAttr = 'data-toggle';
            var target = $('[data-target]');
            var duration = 200;
            var easing = 'swing';

            toggle.click(function(e) {
                e.stopPropagation;
                var toggleId = $(this).attr('data-toggle');
                var thisTarget = $('[data-target="' + toggleId + '"]');
                var thisText = $('[data-toggle-text="' + toggleId + '"]');
                var currentText = thisText.text();

                switch (toggleId) {
                    case 'contributor':
                        thisTarget.slideToggle(duration, easing);
                        break;
                        case 'edit-save':
                            thisTarget.show();
                            break;
                    default:
                        thisTarget.toggle();
                }
            });
        },
        closeAll: function() {
            console.log('closeall');
        }
    }
})();
