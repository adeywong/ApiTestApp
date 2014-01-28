

define(function(require){

  "user strict";
   var $                    = require('jquery'),
        _                   = require('underscore'),
        Backbone            = require('backbone'),
        tpl                 = require('text!template/apiForm.html'),
        template            = _.template(tpl);

    var App = Backbone.View.extend({
        initialize: function() {
          console.log('Let"s go!');
        },
         render: function () {
            this.$el.html(template());
            return this;
        },
        events: {
          "click #btnSubmit" : "doSomething"
        },

        doSomething: function(evt)
        {
          evt.preventDefault();
          dto = getValues();
          console.log(dto);

          $.ajax({
            type: 'POST',
            contentType: 'application/json',
            url: 'http://localhost/api/exports',
            data: JSON.stringify(dto),
            beforeSend: function(xhr, settings)
            {
                xhr.setRequestHeader("Authorization", "Basic " + btoa(dto.username + ":" + dto.password)); 
            },
            success:  function(data)
            {
              $("input[name='username']").val(data);
            },
            error: function(jqXHR, textStatus, errorThrown){
            }
          });
        }

    });
   
      function getValues()
        {
           var data = {
                  username : this.$("input[name='username']").val(),
                  password : this.$("input[name='password']").val(),
                  jsonbody : this.$("#jsonBodyInput").val()
                 };
            return data;
        }
    return App;
  });
