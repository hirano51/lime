const { default: axios } = require("axios");

$(function(){

    $("#btn1Text").on("click",()=>{

       $("#matext").text(""); 
       $("#pwtext").text("");
       $("#urltext").text("");
       axios({
           method: "POST",
           url: "home/check",
           data: {
               mail: $("#mail1").val(),
               pw: $("#pw1").val(),
               url: $("#url1").val(),
           },
           contentType: "application/json",
           dataType: "json"
       })
       .then(response => {

       })
       .catch(error=>{
           $("#matext").text(error.response.data.error.mail);
           $("#pwtext").text(error.response.data.error.pw);
           $("#urltext").text(error.response.data.error.url);

       })
    });
});