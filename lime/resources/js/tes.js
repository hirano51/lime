const { default: axios } = require("axios");

$(function(){

    $("#btnText").on("click",()=>{

       $("#matext").text(""); 
       $("#pwtext").text("");
       $("#urltext").text("");
       axios({
           method: "POST",
           url: "tes/check",
           data: {
               user: $("#user").val(),
               pw: $("#pw").val(),
               shopcode: $("#shopcode").val(),
           },
           contentType: "application/json",
           dataType: "json"
       })
       .then(response => {

       })
       .catch(error=>{
           $("#usertext").text(error.response.data.error.user);
           $("#pwtext").text(error.response.data.error.pw);
           $("#shopcodetext").text(error.response.data.error.shopcode);

       })
    });
});