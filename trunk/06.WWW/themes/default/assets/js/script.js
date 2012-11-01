Cufon.replace('.header-at h2,.title_big,.title_small, .cufon,.sub-nav-header-left,.box-tapt-title, .tate');
var  DIC = new Array();
function remove_title(){
    i=0;
    $("div.stranslate_div a,a.tip").each(function(){  
        tam_tit = $(this).attr("title");
        DIC[i] = tam_tit;
        $(this).attr('title','');
        i++;
    })
}
$().ready(function(){
    $('.block-info ul.block-info-title a').click(function(){
        id = $(this).attr("href");
        $(".block-info-body div._tab").fadeOut();
        $(".block-info-body div#"+id).fadeIn();
        $('.block-info ul.block-info-title li').each(function(){
            $(this).removeClass("active");
        })
        $(this).parent().addClass('active');
        return false;
    }); 
    $(".stranslate_div").mCustomScrollbar({
        scrollInertia:0
    });
    remove_title();
    $(".enab_tip").click(function(){
        if($(this).text()=='Tắt lời dịch'){
            $(this).text("Bật lời dịch");
            $("div.stranslate_div a,a.tip").unbind("hover");
            remove_title();
        }else{
            j=0;
            $("div.stranslate_div a,a.tip").each(function(){
                $(this).attr('title',DIC[j])
                j++;
            })
            $(this).text("Tắt lời dịch");
            if($.base64.decode(LOG) == 1){
                $("div.stranslate_div a,a.tip").ChillTip().hover(function(){
                    $(this).css("background","#FCD116");
                },function(){
                    $(this).css("background","none");
                });
            } else {
                $("div.stranslate_div a,a.tip").ChillTip().hover(function(){
                    $(this).css("background","#FCD116");
                },function(){
                    $(this).css("background","none");
                });
                $("div.stranslate_div a").each(function(){
                    $(this).attr("title",'Bạn phải là thành viên VIP mới xem được lời dịch này');
                })
            }
        }
    }) 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $('.login_btn').click(function(){
        $("#myModal").bind("show", function() {    // wire up the OK button to dismiss the modal when shown
            $("#myModal a.primary").on("click", function(e) {
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
            scrollSpeed: 10
        }
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
})