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
                    var form = '[data-form="'+id+'"]';
                    var token = $(form + ' input[name="_token"]').val()
                    var name = $(form + ' input[name="name"]').val()
                    var domestic_objective = $(form + ' input[name="domestic_objective"]').val()
                    var continental_objective = $(form + ' input[name="continental_objective"]').val()
                    var brand_objective = $(form + ' input[name="brand_objective"]').val()
                    var financial_objective = $(form + ' input[name="financial_objective"]').val()
                    var youth_objective = $(form + ' input[name="youth_objective"]').val()
                    var club_worth = $(form + ' input[name="club_worth"]').val()
                    var transfer_budget = $(form + ' input[name="transfer_budget"]').val()
                    var color = $(form + ' input[name="color"]').val()
                    console.log(token);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: url,
                        type:"POST",
                        data: {
                            'name': name,
                            'color': color,
                            'domestic_objective': domestic_objective,
                            'continental_objective': continental_objective,
                            'brand_objective': brand_objective,
                            'financial_objective': financial_objective,
                            'youth_objective': youth_objective,
                            'club_worth': club_worth,
                            'transfer_budget': transfer_budget
                        },
                        success:function(data){
                            console.log('DATA');
                            console.log(data);
                        },error:function(xhr, b, c){
                            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
                        }
                    });


                }

            });

        }
    }
})();
