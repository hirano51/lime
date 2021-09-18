const { default: axios } = require("axios");

$(function(){

    $("#btn1Text").on("click",()=>{

       $("#loginmailtext").text(""); 
       $("#loginpwtext").text("");
       axios({
           method: "POST",
           url: "login/check",
           data: {
               mail: $("#loginmail").val(),
               pw: $("#loginpw").val(),
           },
           contentType: "application/json",
           dataType: "json"
       })
       .then(response => {
        window.location.href="./menu";
       })
       .catch(error=>{
           $("#loginmailtext").text(error.response.data.error.mail);
           $("#loginpwtext").text(error.response.data.error.pw);

       })
    });
    $("#btn2Text").on("click",()=>{

        $("#matext").text(""); 
        $("#pwtext").text("");
        $("#urltext").text("");
        axios({
            method: "POST",
            url: "login/entrycheck",
            data: {
                mail: $("#mail").val(),
                pw: $("#pw").val(),
                url: $("#url").val(),
            },
            contentType: "application/json",
            dataType: "json"
        })
        .then(response => {
            window.location.href="./menu";
        })
        .catch(error=>{
            $("#matext").text(error.response.data.error.mail);
            $("#pwtext").text(error.response.data.error.pw);
            $("#urltext").text(error.response.data.error.url);
 
        })
     });
});