require.config(
{
   paths: {
        "jquery": "lib/jquery/jquery",
      	"underscore": "lib/underscore-amd/underscore",
        "backbone": "lib/backbone-amd/backbone",
        "router" : "router"
    },
    shim: {
        'backbone': {
            deps: ['underscore', 'jquery'],
            exports: 'Backbone'
        },
        'underscore': {
        	deps: [] ,
            exports: '_'
        },
    }
});

define(['jquery','backbone', 'router'], function ($, Backbone, Router) {
    var router = new Router();
    Backbone.history.start();
});
