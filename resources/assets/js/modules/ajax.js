var $ = require('jquery');

module.exports = (function() {
    var storeButton = $('[data-ajax]');
    var form = $('[data-form]');
    var submitForms = $('[data-submit-forms]');

    return {
        init: function() {
            submitForms.click(function() {
                var seasonValue = $('[data-season-value]').val();

                $('[data-form]').each(function() {
                    var formID = $(this).attr('data-form');
                    var formUrl = $('[data-form="' + formID + '"]').attr('action');
                    var form = '[data-form="' + formID + '"]';

                    if (formID == 'postTeam') {
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
                            color = "default";
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
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: formUrl,
                            type: "PUT",
                            data: data,
                            success: function(data) {
                                console.log(data);
                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });


                    } // ajax overview
                    if (formID == 'updateCompetition') {
                        var row = $('[data-row="' + formID + '"]');
                        var count = $('[data-row="updateCompetition"]').length;
                        var data = $(this).serialize();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: formUrl,
                            type: "post",
                            data: data,
                            success: function(data) {
                                console.log(data);

                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });
                    } // ajax updateCompetition
                    if (formID == 'updatePlayer') {
                        var row = $('[data-row="' + formID + '"]');
                        var count = $('[data-row="updatePlayer"]').length;
                        var data = $(this).serialize();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: formUrl,
                            type: "post",
                            data: data,
                            success: function(data) {
                                console.log(data);

                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });

                    }
                    if (formID == 'updatePlayerYouth') {
                        var row = $('[data-row="' + formID + '"]');
                        var count = $('[data-row="youth"]').length;
                        var data = $(this).serialize();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: formUrl,
                            type: "post",
                            data: data,
                            success: function(data) {
                                console.log(data);

                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });

                    }

                });
            });
        }
    };
})();
