var $ = require('jquery');

// Modules Dependencies
var toggle = require('./modules/toggle');
var relatedResources = require('./modules/relatedResources');
var skipLink = require('./modules/skipLink');

/*-------------------------------------------
  DOCUMENT READY FUNCTIONS
  All functions to be called on
  doc ready
-------------------------------------------*/
$(document).ready(function() {
    toggle.init();
    relatedResources();
    skipLink.init();
});
