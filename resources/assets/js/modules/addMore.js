var $ = require('jquery');

module.exports = (function() {
    var addMoreButton = $('[data-row-add]');
    return {

        init: function() {
            addMoreButton.on('click', function() {
                var id = $(this).attr('data-row-add');
                console.log(id);
                var count = $('[data-row="'+id+'"]').length;
                var row = '<tr class="" data-row="'+id+'" data-row-value="'+count+'"><td class=""><input type="text" name="row['+count+'][name]" value="" required="required"></td><td class=""><input type="number" name="row['+count+'][result]" value="" required="required"></td><td class=""><input type="number" name="row['+count+'][played]" value="" required="required"></td><td class=""><input type="number" name="row['+count+'][won]" value="" required="required"></td><td class=""><input type="number" name="row['+count+'][tied]" value="" required="required"></td><td class=""><input type="number" name="row['+count+'][lost]" value="" required="required"></td><td class="" data-delete="'+id+'">X</td></tr>'
                $('[data-row="'+id+'"]').last().after(row);
            })


        }
    }
})();
