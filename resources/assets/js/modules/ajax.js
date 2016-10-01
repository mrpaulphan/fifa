var $ = require('jquery');

module.exports = (function() {
    var storeButton = $('[data-ajax]');
    var form = $('[data-form]');

    return {

        init: function() {

            storeButton.click(function() {
                var id = $(this).attr('data-ajax');
                var seasonValue = $('[data-season-value]').val();

                if (id == 'postTeam') {
                    var url = $('[data-form="' + id + '"]').attr('action');
                    var form = '[data-form="' + id + '"]';
                    var season = seasonValue;
                    var token = $(form + ' input[name="_token"]').val();
                    var name = $(form + ' input[name="name"]').val();
                    var domestic_objective = $(form + ' select[name="domestic_objective"]').val();
                    var continental_objective = $(form + ' select[name="continental_objective"]').val();
                    var brand_objective = $(form + ' select[name="brand_objective"]').val();
                    var financial_objective = $(form + ' select[name="financial_objective"]').val();
                    var youth_objective = $(form + ' select[name="youth_objective"]').val();
                    var club_worth = $(form + ' input[name="club_worth"]').val();
                    var transfer_budget = $(form + ' input[name="transfer_budget"]').val();
                    var save_id = $(form + ' input[name="save_id"]').val();
                    var manager_popularity = $(form + ' input[name="manager_popularity"]').val();
                    var expenses = $(form + ' input[name="expenses"]').val();
                    var earnings = $(form + ' input[name="earnings"]').val();
                    var color = $('input[name=color]:checked').val();
                    if (color === undefined) {
                        var color = "default";
                    }
                    var data = {
                        'save_id': save_id,
                        'season': season,
                        'name': name,
                        'color': color,
                        'manager_popularity': manager_popularity,
                        'domestic_objective': domestic_objective,
                        'continental_objective': continental_objective,
                        'brand_objective': brand_objective,
                        'financial_objective': financial_objective,
                        'youth_objective': youth_objective,
                        'club_worth': club_worth,
                        'transfer_budget': transfer_budget,
                        'earnings': earnings,
                        'expenses': expenses
                    };
                    console.log(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: url,
                        type: "PUT",
                        data: data,
                        success: function(data) {
                            console.log(data);
                            var currentCompetitionID = data.id;
                            var idInput = '<input type="hidden" name="id" value="' + currentCompetitionID + '">';
                            $('[data-row="competition"]').last().after(row);
                            $(form).prepend(idInput);

                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });


                }
                if (id == 'updateCompetition') {
                    var url = $('[data-form="' + id + '"]').attr('action');
                    var form = '[data-form="' + id + '"]';
                    var row = $('[data-row="' + id + '"]');
                    var count = $('[data-row="updateCompetition"]').length;
                    $('[data-form="updateCompetition"]').on('submit', function(e) {
                        e.preventDefault();
                        var data = $(this).serialize();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: url,
                            type: "put",
                            data: data,
                            success: function(data) {
                                var currentCompetitionID = data.id;
                                var idInput = '<input type="hidden" name="id" value="' + currentCompetitionID + '">'
                                $('[data-row="competition"]').last().after(row);
                                $(form).prepend(idInput);

                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });
                    })

                }

            });

        }
    }
})();
