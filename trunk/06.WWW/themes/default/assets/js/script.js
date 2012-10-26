Cufon.replace('.header-at h2,.title_big,.title_small, .cufon');
$().ready(function(){
    $(".emoticon_small a").click(function(){
        var nd = $(this).attr("href");
        var curr = $("#display_text").val();
        $("#display_text").val(curr + nd);
        return false;
    })
    $("#class").mCustomScrollbar({
        scrollButtons:{
            enable:true
        },
        scrollInertia:900,
        scrollEasing:"easeOutQuint"
    });
                        
    $(".box-ul-body").mCustomScrollbar({
        scrollButtons:{
            enable:true
        },
        scrollInertia:900,
        scrollEasing:"easeOutQuint"
    });
                        
    $(".sty-idoms").mCustomScrollbar({
        scrollButtons:{
            enable:true
        },
        scrollInertia:900,
        scrollEasing:"easeOutQuint"
    });
                        
    $(".mem-body").mCustomScrollbar({
        scrollButtons:{
            enable:true
        },
        scrollInertia:900,
        scrollEasing:"easeOutQuint"
    });
    var i = 0;
    $('.en-box .en-box-feature').each(function(){
        i++;
        if(i%3 == 0){
            $(this).css("border","0");
        }
    })
    
})