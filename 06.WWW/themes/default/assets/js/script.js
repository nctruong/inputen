Cufon.replace('.header-at h2,.title_big,.title_small, .cufon,.sub-nav-header-left,.box-tapt-title, .tate');
$().ready(function(){
    $('.login_btn').click(function(){
   $("#myModal").bind("show", function() {    // wire up the OK button to dismiss the modal when shown
    $("#myModal a.btn").on("click", function(e) {
        console.log("button pressed");   // just as an example...
        $("#myModal").modal('hide');     // dismiss the dialog
    });
});


$("#myModal").modal({                    // finally, wire up the actual modal functionality and show the dialog
  "backdrop"  : "static",
  "keyboard"  : true,
  "show"      : true                     // ensure the modal is shown immediately
});
return false;
})
    
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