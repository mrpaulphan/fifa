var $ = require('jquery');
var Chart = require('chart.js');

// Modules Dependencies
var toggle = require('./modules/toggle');
var relatedResources = require('./modules/relatedResources');
var skipLink = require('./modules/skipLink');
var ajax = require('./modules/ajax');
var colorChange = require('./modules/colorChange');
var modal = require('./modules/modal');
var chart = require('./modules/chart');
var addMore = require('./modules/addMore');

/*-------------------------------------------
  DOCUMENT READY FUNCTIONS
  All functions to be called on
  doc ready
-------------------------------------------*/
$(document).ready(function() {
    toggle.init();
    relatedResources();
    skipLink.init();
    colorChange.init();
    ajax.init();
    modal.init();
    chart.init();
    addMore.init();
});
