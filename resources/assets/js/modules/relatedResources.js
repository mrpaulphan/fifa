var $ = require('jquery');

module.exports = function() {
    var tab = $('[data-related-tab]');

    tab.click(function(e) {
        e.preventDefault();
        var type = 'GET',
            url = '/data/related-resources/',
            data = {
                'targetType': $(this).data('related-target'),
                'sourceType': $(this).closest('ul').data('related-source-type'),
                'sourceId': $(this).closest('ul').data('related-source-id')
            };
        $.ajax({
            type: type,
            url: url,
            data: data,
            cache: false,
            dataType: 'json',
            contentType: "application/json; charset=utf-8",
            success: function(json) {
                $('#related-resources').html(json.response);
            }
        });

    });

};
