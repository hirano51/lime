const { default: axios } = require("axios");

$(function(){
    $('.mask').on('click', function(){
        var obj = $(this).parent('div');
        var checkbox = $(obj).find('input');
        $(checkbox).trigger("click");
    });
                                                                
 });                                                                                                              
