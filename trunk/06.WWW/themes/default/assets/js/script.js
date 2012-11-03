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









function showLoader(){
    
}
//hide loading bar
function hideLoader1(){
//$('.list_pagin_video').fadeOut(200);
    
}	
$(".pagin_home_n1 li a").click(function(){
    
    //show the loading bar
    showLoader();

    url = $(this).attr("href");
    
    page_num = $(this).attr("rel");
    x = $(this).parent().parent().parent().parent().prev().find("ul");
    x.load(url+"/page/"+page_num);
    return false;
    //;
    
//$("#resn").load("data1.php?page=" + this.className, hideLoader1);
});
	
// by default first time this will execute
function tab(control,source){
    $(control+' a').click(function(){
        
        id = $(this).attr("href");
        
        if($(source+" div#"+id).css("display")=='none'){
            $(source+' div._tab').hide();
            $(source+" div#"+id).fadeIn();
            $(this).parent().parent().find("li").each(function(){
                $(this).removeClass("active");
            })
            $(this).parent().addClass('active');
        }
        return false;
    }); 
    
    
    
}
$().ready(function(){
       
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $("a").each(function(){
        if($(this).attr("href")=='#'){
            $(this).click(function(){
                //alert("Phần này đang hoàn thành");
                return false;
            })
        }
    })
    
    
    
    tab('ul.music_block_tab_control','.music_block_tab');
    tab('ul.block_listen_news_comment','.block-info-body');
    tab('ul#ul-study','.video_show_case');
    
    
    //    $('ul.music_block_tab_control a').click(function(){
    //        id = $(this).attr("href");
    //        $(".music_block_tab div._tab").hide();
    //        $(".music_block_tab div#"+id).fadeIn();
    //        $(this).parent().parent().find("li").each(function(){
    //            $(this).removeClass("active");
    //        })
    //        $(this).parent().addClass('active');
    //        return false;
    //    }); 
    //    
    //    
    //    
    //    
    //    
    //    
    //    $('ul.block_listen_news_comment a').click(function(){
    //        id = $(this).attr("href");
    //        $(".block-info-body div._tab").hide();
    //        $(".block-info-body div#"+id).fadeIn();
    //        $(this).parent().parent().find("li").each(function(){
    //            $(this).removeClass("active");
    //        })
    //        $(this).parent().addClass('active');
    //        return false;
    //    }); 
    $(".stranslate_div,.scroll_over").mCustomScrollbar({
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