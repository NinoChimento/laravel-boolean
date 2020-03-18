require('./bootstrap');
const $ = require("jquery");
$(document).ready(function(){
    console.log(window.location.protocol+"//"+window.location.host);
    
   $("input").change(function(){
       var age = $("input").val();
       $.ajax({
           url: window.location.protocol + "//" + window.location.host+"/api/students/age",
           method : "post",
           data : { age : age},
           success : function(data){
               console.log(data);
               
               console.log(data["response"]);
               
           },
           error : function(errore){
               alert ("errore e" + errore)
               
           }
           
              })
   })
   $("select").change(function(){
       var name = $("select").val();
      
       $.ajax({
           url: window.location.protocol + "//" + window.location.host + "/api/students/age",
           method: "post",
           data: { name: name },
           success: function (data) {
                 console.log(data["response"]);
           },
           error: function (errore) {
               alert("errore e" + errore)

           }

       })
   });
    
});