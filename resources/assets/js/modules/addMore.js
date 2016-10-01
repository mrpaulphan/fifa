var $ = require('jquery');

module.exports = (function() {
    var addMoreButtonCompetition = $('[data-row-add="competition"]');
    var addMoreButtonPlayers = $('[data-row-add]');
    return {

        init: function() {
            addMoreButtonCompetition.on('click', function() {
                var id = $(this).attr('data-row-add');
                console.log(id);
                var count = $('[data-row="' + id + '"]').length;
                var row = '<tr class="" data-row="competition" data-delete-row="competition"><td class=""><input type="text" name="row[' + count + '][name]" value="" required="required"></td><td class=""><select type="number" name="row[' + count + '][type]" value="" required="required"><option value="League">League</option><option value="Cup">Cup</option><option value="International">International</option></select></td><td class=""><input type="number" name="row[' + count + '][played]" value="" required="required"></td><td class=""><input type="number" name="row[' + count + '][won]" value="" required="required"></td><td class=""><input type="number" name="row[' + count + '][tied]" value="" required="required"></td><td class=""><input type="number" name="row[' + count + '][lost]" value="" required="required"></td><td class=""><input type="text" name="row[' + count + '][result]" value="" required="required"></td><td class="" data-delete="competition">X</td></tr>';
                $('[data-row="' + id + '"]').last().after(row);
            });

            addMoreButtonPlayers.on('click', function() {
                var id = $(this).attr('data-row-add');
                console.log(id);
                var count = $('[data-row="' + id + '"]').length;
                var row = '<tr class="" data-row="players" data-delete-row="players"><td class=""><input type="text" name="row[0][position]" value=""></td><td class=""><input type="text" name="row[0][name]" value=""></td><td class=""><input type="number" name="row[0][age]" value=""></td><td class=""><input type="number" name="row[0][overall]" value=""></td><td class="" data-delete="players">X</td></tr>';
                $('[data-row="' + id + '"]').last().after(row);
            });


        }
    };
})();
