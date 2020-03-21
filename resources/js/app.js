require('./bootstrap');
const $ = require("jquery");
const Handlebars = require("handlebars");

https: $(document).ready(function() {
    console.log(window.location.protocol + "//" + window.location.host);

    $("input").change(function() {
        var age = $("input").val();
        $.ajax({
            url:
                window.location.protocol +
                "//" +
                window.location.host +
                "/api/students/age",
            method: "post",
            data: { age: age },
           
            success: function(data) {
                $(".wrap-students").empty();
                console.log(data);
                 var source = $("#entry-template").html();
                 var template = Handlebars.compile(source);
                            
                 for (var i = 0; i < data.length; i++) {
                    // var element = data[i];
                    // console.log(data[i]);
                    // var html = template(element);
                    // $("#prova").append(html);
                     var context = data[i];
                    
                     
                     var html = template(context);
                     $("#prova").append(html);
                 };
               
            },
            error: function(errore) {
                alert("errore e" + errore);
            }
        });
    });
    //    $("select").change(function(){
    //        var name = $("select").val();

    //        $.ajax({
    //            url: window.location.protocol + "//" + window.location.host + "/api/students/age",
    //            method: "post",
    //            data: { name: name },
    //            success: function (data) {
    //                  console.log(data["response"]);
    //            },
    //            error: function (errore) {
    //                alert("errore e" + errore)

    //            }

    //        })
    //    });
});