var $ = require('jquery');
var chart = require('chart.js');

module.exports = (function() {
    return {
        init: function() {
            // Any of the following formats may be used
            var ctx = document.getElementById("seasonChart");
            var ctx = document.getElementById("seasonChart").getContext("2d");
            var ctx = $("#seasonChart");

            var ctx = document.getElementById("seasonChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["3rd Grade", "US1", "Fancy"],
                    datasets: [{
                        animationDuration: 0,
                        data: [45, 110, 33],
                        backgroundColor: [
                            '#FF0000',
                            '#62BB46',
                            '#c8c8c8'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    hover: {
                        display: false
                    },
                    legend: {
                        display: false
                    }
                }
            });
        }
    }
})();
