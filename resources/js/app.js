require('./bootstrap');
const $ = require("jquery");
$(document).ready(function(){
   $("input").change(function(){
       var age = $("input").val();
       $.ajax({
           url: "http://127.0.0.1:8000/api/students/age",
           method : "post",
           data : { age : age},
           success : function(data){
               console.log(data);
               
           },
           error : function(errore){
               alert ("errore e" + errore)
               
           }
           
              })
   })
    
});