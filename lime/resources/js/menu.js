const { default: axios } = require("axios");

$(function(){
    $('.mask').on('click', function(){
        var obj = $(this).parent('div');
        var checkbox = $(obj).find('input');
        $(checkbox).trigger("click");
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
