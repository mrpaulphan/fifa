var $ = require('jquery');

module.exports = (function() {
    var storeButton = $('[data-ajax]');
    var form = $('[data-form]');

    return {

        init: function() {

            storeButton.click(function() {
                var id = $(this).attr('data-ajax');

                if (id == 'postTeam') {
                    var url = $('[data-form="' + id + '"]').attr('action');
                    var form = '[data-form="' + id + '"]';
                    var token = $(form + ' input[name="_token"]').val()
                    var name = $(form + ' input[name="name"]').val()
                    var domestic_objective = $(form + ' input[name="domestic_objective"]').val()
                    var continental_objective = $(form + ' input[name="continental_objective"]').val()
                    var brand_objective = $(form + ' input[name="brand_objective"]').val()
                    var financial_objective = $(form + ' input[name="financial_objective"]').val()
                    var youth_objective = $(form + ' input[name="youth_objective"]').val()
                    var club_worth = $(form + ' input[name="club_worth"]').val()
                    var transfer_budget = $(form + ' input[name="transfer_budget"]').val()
                    var save_id = $(form + ' input[name="save_id"]').val()
                    var color = $('input[name=color]:checked').val();
                    if (color == undefined) {
                        var color = "default";
                    }
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: url,
                        type: "PUT",
                        data: {
                            'save_id': save_id,
                            'name': name,
                            'color': color,
                            'domestic_objective': domestic_objective,
                            'continental_objective': continental_objective,
                            'brand_objective': brand_objective,
                            'financial_objective': financial_objective,
                            'youth_objective': youth_objective,
                            'transfer_budget': transfer_budget,
                            'club_worth': club_worth
                        },
                        success: function(data) {
                            console.log(data);
                            var name = data.name;
                            var color = data.color = '' ? '--' : data.color;
                            var domestic_objective = data.domestic_objective == '' ? '--' : data.domestic_objective;
                            var continental_objective = data.continental_objective == '' ? '--' : data.continental_objective;
                            var brand_objective = data.brand_objective == '' ? '--' : data.brand_objective;
                            var financial_objective = data.financial_objective == '' ? '--' : data.financial_objective;
                            var youth_objective = data.youth_objective == '' ? '--' : data.youth_objective;
                            var transfer_budget = data.transfer_budget == '' ? '--' : data.transfer_budget;
                            var club_worth = data.club_worth == '' ? '--' : data.club_worth;

                            // Update Page
                            $('[data-ajax-get="name"]').text(name);
                            $('[data-ajax-get="color"]').text(color);
                            $('[data-ajax-get="domestic_objective"]').text(domestic_objective);
                            $('[data-ajax-get="continental_objective"]').text(continental_objective);
                            $('[data-ajax-get="brand_objective"]').text(brand_objective);
                            $('[data-ajax-get="financial_objective"]').text(financial_objective);
                            $('[data-ajax-get="youth_objective"]').text(youth_objective);
                            $('[data-ajax-get="transfer_budget"]').text(transfer_budget);
                            $('[data-ajax-get="club_worth"]').text(club_worth);




                        },
                        error: function(xhr, b, c) {
                            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
                        }
                    });


                }

            });

        }
    }
})();
