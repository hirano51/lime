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
     //ログインボタンを押した時の処理
     $("#loginbtn").on("click",()=>{
     if($("#loginbox").css("display")=="block"){ //ログインの画面が表示している時
     $("#loginbox").show();  //ログインの画面を表示
     $("#newbox").hide();　　//新規登録の画面を非表示
     }
     if($("#newbox").css("display")=="block"){
        $("#loginbox").show();  //ログインの画面を表示
        $("#newbox").hide();　　//新規登録の画面を非表示
    }
    $("#newbtn").on("click",()=>{　//新規登録ボタンを押した時
        if($("#loginbox").css("display")=="block"){ //ログインの画面が表示している時
        $("#newbox").show();  //新規登録の画面を表示
        $("#loginbox").hide(); //ログインの画面を非表示
        }
       }); 
});
$(".toggle-pass").on("click", (e) => {
    $(e.target).toggleClass('fa-eye fa-eye-slash');
    var input = $(e.target).prev('input');
    if (input.attr('type') == 'text') {
      input.attr('type','password');
    } else {
      input.attr('type','text');
    }
});
});