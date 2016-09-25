var $ = require('jquery');

module.exports = (function() {
    var directionModalButton = $('#showTeamModal');
    return {

        init: function() {
            directionModalButton.click(function() {
                console.log('hey');

            })


        }
    }
})();
