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
      $("#bgimgbtn").on("click",function(){
       var form=new FormData($("#imgform").get(0));
        axios({      
        method: "POST",
        url: "menu/bgimgupload",
        data: form,
        contentType: false,
        dataType: "html"
    })
    .then(response => {
      window.location.href="./menu";
    })
    .catch(error=>{
        
    })
      });
      $("#topimgbtn").on("click",function(){
        var form=new FormData($("#imgform").get(0));
         axios({      
         method: "POST",
         url: "menu/topimgupload",
         data: form,
         contentType: false,
         dataType: "html"
     })
     .then(response => {
       window.location.href="./menu";
     })
     .catch(error=>{
         
     })
       });
       $("#categorybtn").on("click",function(){
         axios({      
         method: "POST",
         url: "menu/addcategory",
         data: {
          category:$("#category").val(),
         },
         contentType: "application/json",
            dataType: "json"
     })
     .then(response => {
       window.location.href="./menu";
     })
     .catch(error=>{
         
     })
       });                                                                  
 });                                                                                                              
