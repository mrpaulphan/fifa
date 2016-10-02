var $ = require('jquery');

module.exports = (function() {
    var addMoreButtonCompetition = $('[data-row-add="competition"]');
    var addMoreButtonPlayers = $('[data-row-add="players"]');
    var addMoreButtonYouth = $('[data-row-add="youth"]');
    return {

        init: function() {
            addMoreButtonCompetition.on('click', function() {
                var id = $(this).attr('data-row-add');
                var count = $('[data-row="' + id + '"]').length;
                var row = '<tr class="" data-row="competition" data-delete-row="competition"><td class=""><input type="text" name="row[' + count + '][name]" value="" required="required"></td><td class=""><select type="number" name="row[' + count + '][type]" value="" required="required"><option value="League">League</option><option value="Cup">Cup</option><option value="International">International</option></select></td><td class=""><input type="number" name="row[' + count + '][played]" value="" required="required"></td><td class=""><input type="number" name="row[' + count + '][won]" value="" required="required"></td><td class=""><input type="number" name="row[' + count + '][tied]" value="" required="required"></td><td class=""><input type="number" name="row[' + count + '][lost]" value="" required="required"></td><td class=""><input type="text" name="row[' + count + '][result]" value="" required="required"></td><td class="" data-delete="competition">X</td></tr>';
                $('[data-row="' + id + '"]').last().after(row);
            });

            addMoreButtonPlayers.on('click', function() {
                var id = $(this).attr('data-row-add');
                var count = $('[data-row="' + id + '"]').length;
                var row = '<tr class="" data-row="players" data-delete-row="players"><td class=""><input type="text" name="row[' + count + '][position]" value=""></td><td class=""><input type="text" name="row[' + count + '][name]" value=""></td><td class=""><input type="number" name="row[' + count + '][age]" value=""></td><td class=""><input type="number" name="row[' + count + '][overall]" value=""></td><td class="" data-delete="players">X</td></tr>';
                $('[data-row="' + id + '"]').last().after(row);
            });
            addMoreButtonYouth.on('click', function() {
                var id = $(this).attr('data-row-add');
                var count = $('[data-row="' + id + '"]').length;
                var row = '<tr class="" data-row="youth" data-delete-row="youth"><td class=""><input type="text" name="row[' + count + '][position]" value=""></td><td class=""><input type="text" name="row[' + count + '][name]" value=""></td><td class=""><input type="number" name="row[' + count + '][age]" value=""></td><td class=""><input type="number" name="row[' + count + '][overall]" value=""></td><td class="" data-delete="youth">X</td></tr>';
                $('[data-row="' + id + '"]').last().after(row);
            });


        }
    };
})();
