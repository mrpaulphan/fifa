var $ = require('jquery');
var chart = require('chart.js');

module.exports = (function() {
    return {
        init: function() {
            var ctx = $('#overview-data');
            var playedValue = $('[data-overview-played]').attr('data-overview-played');
            var wonValue = $('[data-overview-won]').attr('data-overview-won');
            var tiedValue = $('[data-overview-tied]').attr('data-overview-tied');
            var lostValue = $('[data-overview-lost]').attr('data-overview-lost');

            var data = {
                labels: [
                    "Played",
                    "Won",
                    "Tied",
                    "Lost"
                ],
                datasets: [{
                    data: [playedValue, wonValue, tiedValue, lostValue],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56",
                        "#FFCE56"

                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56",
                        "#FFCE56"
                    ]
                }]
            };
            var options = {
                legend: {
                    labels: {
                        generateLabels: function(chart) {
                            return false;
                        }
                    }
                },
                animation:{
                     animateScale:true,
                     animateRotate: true
                 }
            };

            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options
            });
        }
    }
})();
