const { default: axios } = require("axios");

$(function(){
  const getmenuitem=()=>{
    axios({      
      method: "POST",
      url: "menu/getmenuitem",
      data: {
       category:$("#menuselect").val(),
       text:$("#search").val(),
      },
      contentType: "application/json",
         dataType: "json"
  })
  .then(response => {
    $("#response").html(response.data);
    setevent();
  })
  .catch(error=>{
      
  })
  }
  getmenuitem();
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
         $("#menuselect").on("change",function(){
           getmenuitem();
         }); 
         $("#searchbtn").on("click",function(){
          getmenuitem();
        });      
        $("#menubtn").on("click",function(){
          $("#menuinput").fadeIn();
        });
        $("#background").on("click",function(){
          $("#menuinput").fadeOut();
        });
        const menuimageupload = (menuid)=>{
          var form=new FormData($("#menuform").get(0));
         axios({      
         method: "POST",
         url: "menu/menuimageupload?id="+menuid,
         data: form,
         contentType: false,
         dataType: "html"
     })
     .then(response => {
      $("#menuinput").fadeOut();
      getmenuitem();
     })
     .catch(error=>{
         
     })
        }
        $("#menuentry").on("click",function(){
          axios({      
            method: "POST",
            url: "menu/menuentry",
            data: {
             data:$("#menuform").serialize(),
            },
            contentType: "application/json",
               dataType: "json"
        })
        .then(response => {
          if($("#menuimage").val()!=""){
            menuimageupload(response.data.menuid);
          }else{
            $("#menuinput").fadeOut();
            getmenuitem();
          }
          
        })
        .catch(error=>{
            
        })
        });  
          //メニュー画像のプレビュー 
        $("#menuimage").on("change",function(e){
        var reader=new FileReader();
        reader.onload=function(e){
        $("#prev").attr("src",e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
        });
        
        function setevent(){
         //メニューの削除 
        $(".menudelete").on("click",function(){
          axios({      
            method: "POST",
            url: "menu/menudelete",
            data: {
            menuid:$(this).parent().find('input[data-type="menuid"]').val(),
            },
            contentType: "application/json",
               dataType: "json"
        })
        .then(response => {
          
          getmenuitem();
        })
        .catch(error=>{
            
        })
        });
        //メニューの編集 
      $(".menuupdata").on("click",function(){
        var menuid=$(this).parent().find('input[data-type="menuid"]').val();
        console.log($("#menuform"+menuid).serialize());
        axios({      
          method: "POST",
          url: "menu/menuupdata",
          data: {
          data:$("#menuform"+menuid).serialize(),
          },
          contentType: "application/json",
             dataType: "json"
      })
      .then(response => {
        
        getmenuitem();
      })
      .catch(error=>{
          
      })
      });
      }
      $("#templatebtn").on("click",function(){
        axios({      
          method: "POST",
          url: "menu/templateupdate",
          data: {
           name:$("#templatename").val(),
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
      $("#switchbtn").on("click",function(){
        axios({      
          method: "POST",
          url: "menu/templateswitch",
          data: {
           id:$("#tenpselect").val(),
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
    $("#copybtn").on("click",function(){
      axios({      
        method: "POST",
        url: "menu/templatescopy",
        data: {
         srcid:$("#tenpselect").val(), //コピー元
         distid:$("#tenpcopy").val(),　　//コピー先
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
  //カテゴリーの削除 
  $("#categorydeletebtn").on("click",function(){
    axios({      
      method: "POST",
      url: "menu/categorydelete",
      data: {
      categoryid:$("#categorydelete").val()
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
