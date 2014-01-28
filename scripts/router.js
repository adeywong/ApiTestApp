define(function (require) {
    "use strict";

    var $         = require('jquery'),
        Backbone  = require('backbone'),
        AppView   = require('views/AppView'),
        
        $body = $('#appContainer'),
        appView = new AppView({el: $body}).render();
        
    return Backbone.Router.extend({
    });

});