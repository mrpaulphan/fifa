var $ = require('jquery');

module.exports = (function() {
    return {
        init: function() {
            var trigger = $('[data-trigger]');
            var triggerAttr = 'data-trigger';
            var toggle = $('[data-toggle]');
            var duration = 200;
            var easing = 'swing';

            trigger.click(function() {
                var triggerId = $(this).attr('data-trigger');
                var thisTarget = $('[data-toggle="' + triggerId + '"]');
                var thisTriggerParent = $('[data-trigger-parent="' + triggerId + '"]');
                var thisText = $('[data-trigger-text="' + triggerId + '"]');
                var currentText = thisText.text();
                console.log($(this).attr('data-toggle'));

                switch (triggerId) {
                    case 'dropdown-menu':
                        thisTarget.slideToggle(duration, easing);
                        break;
                    case 'edit-save':
                        thisTarget.show();
                        break;
                    case 'showCompetition':
                        thisTarget.toggle();
                        thisTriggerParent.toggle();
                        break;
                    default:
                        thisTarget.toggle();
                        thisTriggerParent.toggle();
                }
            });
        },
        closeAll: function() {
            console.log('closeall');
        }
    }
})();
