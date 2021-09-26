const { default: axios } = require("axios");

$(function(){
//新規登録とエラーの表示
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
               domain: $("#urlselect").val(),
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
    //パスワードの表示、非表示のボタン設定
    $(".toggle-pass").on("click", (e) => {
        $(e.target).toggleClass('fa-eye fa-eye-slash');
        var input = $(e.target).prev('input');
        if (input.attr('type') == 'text') {
          input.attr('type','password');
        } else {
          input.attr('type','text');
        }
    });
    //トップに戻るボタンの設定
    $(function(){
        var pagetop = $('#page_top');
        // ボタン非表示
        pagetop.hide();
        // 2500px スクロールしたらボタン表示
        $(window).scroll(function () {
           if ($(this).scrollTop() > 2500) {
                pagetop.fadeIn();
           } else {
                pagetop.fadeOut();
           }
        });
        pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
           return false;
        });
      });
      //ハンバーガーラインの作成
      $('.menu-trigger').on('click',function(){
        if($(this).hasClass('active')){
          $(this).removeClass('active');
          $('main').removeClass('open');
          $('nav').removeClass('open');
          $('.overlay').removeClass('open');
        } else {
          $(this).addClass('active');
          $('main').addClass('open');
          $('nav').addClass('open');
          $('.overlay').addClass('open');
        }
      });
      $('.overlay').on('click',function(){
        if($(this).hasClass('open')){
          $(this).removeClass('open');
          $('.menu-trigger').removeClass('active');
          $('main').removeClass('open');
          $('nav').removeClass('open');      
        }
      });
});