const { default: axios } = require("axios");

$(function(){
//新規登録とエラーの表示1
    $("#btn1Text").on("click",()=>{
       // エラーメッセージの初期化
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
            //ログインに成功した場合
        window.location.href="./menu";
       })
       
       .catch(error=>{
           // エラー時、メッセージを表示
           $("#matext").text(error.response.data.error.mail);
           $("#pwtext").text(error.response.data.error.pw);
           $("#urltext").text(error.response.data.error.url);

       })
    });
    //新規登録とエラーの表示2
    $("#btn2Text").on("click",()=>{

        $("#ma2text").text(""); 
        $("#pw2text").text("");
        $("#url2text").text("");
        axios({
            method: "POST",
            url: "home/check",
            data: {
                mail: $("#mail2").val(),
                pw: $("#pw2").val(),
                url: $("#url2").val(),
                domain: $("#urlselect").val(),
            },
            contentType: "application/json",
            dataType: "json"
        })
        .then(response => {
         window.location.href="./menu";
        })
        .catch(error=>{
            $("#ma2text").text(error.response.data.error.mail);
            $("#pw2text").text(error.response.data.error.pw);
            $("#url2text").text(error.response.data.error.url);
 
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
        //  スクロールしたらボタン表示
        $(window).scroll(function () {
           if ($(this).scrollTop() > 500) {
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
      //ハンバーガーメニュー 
      $(function() {
        $('.btn-gNav').on("click", function(){
      
          $(this).toggleClass('open');
          $('#gNav').toggleClass('open');
        });
      
      });
      
      // メニューをクリックされたら、非表示にする
      $(function() {
        $('.gNav-menu li a').on("click", function(){
           $('#gNav').removeClass('open');
        });
      });
      setTimeout(function(){
		$('.start p').fadeIn(1600);
	},500); //0.5秒後にロゴをフェードイン
	setTimeout(function(){
		$('.start').fadeOut(500);
	},2500); //2.5秒後にロゴ含め真っ白背景をフェードアウト

});
