<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="vi" xml:lang="vi">
    <head>
        <title><?php echo $this->title ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
            <!--[if lte IE 7]>  
                <link href="css/ie.css" rel="stylesheet">
            <![endif]--> 
            <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet"/>

            <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/en-style.css" rel="stylesheet"/>
            <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/page2.css" rel="stylesheet"/>            
            <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/row.css" rel="stylesheet"/>            
            <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/highslide/highslide.css" rel="stylesheet"/> 
            <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/highslide/jquery.cluetip.css" rel="stylesheet"/> 
            
            <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/highslide/highslide-with-html.min.js"></script>
            
            <style>
                .highslide-credits{display:none;}
            </style>



    </head>
    <body>

        <div class="container">
            <div id="top" class="row-fluid">
                <img class="logo" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo.png">
            </div><!-- end #top -->
            <?php
                $this->widget("wbanner");
            ?>
            <?php
            $this->widget("menus");
            ?>
            <?php
            $this->widget('bootstrap.widgets.TbAlert', array(
                'block' => true, // display a larger alert block?
                'fade' => true, // use transitions?
                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
                'alerts' => array(// configurations per alert type
                    'success' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
                ),
            ));
            ?>
            <?php
            $this->widget('bootstrap.widgets.TbAlert', array(
                'block' => true, // display a larger alert block?
                'fade' => true, // use transitions?
                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
                'alerts' => array(// configurations per alert type
                    'error' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
                ),
            ));
            ?>


            <?php echo $content ?>


        </div><!-- end #container -->            
        <div class='container-fluid' id='footer-menu'>
            <div class='row-fluid' id='top-footer'>
                <div class='span2'></div>
                <div id='en-nav' class='row-fluid span10'>
                    <ul>
                        <li><a href='#' class='li-first highslide'>Home</a></li>
                        <li><a href='#' class='highslide' >Phát âm tiếng anh</a></li>
                        <li><a class='highslide' href='#'>Đọc tiếng anh</a></li>
                        <li><a class='highslide' href='#'>Luyện thi toiec</a></li>
                        <li><a class='highslide' href='#'>Từ vựng tiếng anh</a></li>
                        <li><a class='highslide' href='#'>Ngữ pháp tiếng anh</a></li>
                        <li><a class='highslide'href='#'>Nghe tiếng anh</a></li>
                        <li><a class='highslide'href='#'>Tiếng anh thương mại</a></li>
                        <li><a class='highslide' href='#' class='li-last'>Qui định sử dụng</a></li>
                    </ul>
                </div><!-- end #menu-bar -->
            </div>
        </div><!-- end #footer-menu -->
        <div class='container-fluid' id='footer-info'>
            <div class='span2'>&nbsp;</div>
            <div class='row-fluid' id='top-footer'>
                <div id='footer-info-copy' class='span9'>
                    <p>
                        TiếngAnh123.Com - a product of BeOnline Co., Ltd.
                    </p>
                    <p>
                        Giấy phép ĐKKD số: 0102852740 cấp bởi Sở Kế hoạch và Đầu tư Hà Nội.
                    </p>
                    <p>
                        Giấy phép ĐKKD số: 0102852740 cấp bởi Sở Kế hoạch và Đầu tư Hà Nội.
                    </p>
                    <p>
                        Giấy xác nhận cung cấp dịch vụ mạng xã hội học tiếng Anh trực tuyến số: 36/GXN-TTĐT cấp bởi Bộ Thông tin & Truyền thông.
                    </p>
                    <p>
                        Địa chỉ: số nhà 15-23, ngõ 259/9 phố Vọng, Đồng Tâm, Hai Bà Trưng, Hà Nội. Tel: 0436628077. Email: lophoc@tienganh123.com
                    </p>
                </div>
            </div>
        </div><!-- end #footer-info -->
        <div class="highslide-html-content br" id="highslide-html">
            <div class="highslide-header">
                <ul>
                    <li class="highslide-move">
                        <a href="#" onclick="return false">Move</a>
                    </li>
                    <li class="highslide-close">
                        <span class="floatL">English 456</span><a href="#" onclick="return hs.close(this)"></a>
                    </li>
                </ul>
            </div>
            <div class="highslide-body">
                <b>Hiện tại trang web đang trong quá trình hoàn thiện, Vui lòng quay lại sau, Thanks.</b>
            </div>
            <div class="highslide-footer">
                <div>
                    <span class="highslide-resize" title="Resize">
                        <span></span>
                    </span>
                </div>
            </div>
        </div><!-- end hightlight -->

    </body>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery-ui-1.8.0.min.js" type='text/javascript'></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery.mousewheel.min.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery.mCustomScrollbar.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/cufon-yui.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/League_Gothic_400.font.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/script.js"></script>   
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/chilltip-packed.js"></script>   
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery.tinyscrollbar.min.js"></script>   
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/swfobject.js"></script>   
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/audio-player-uncompressed.js"></script>  
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery.cluetip.js"></script>  
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery.hoverIntent.js"></script>  
    
    
    <script>
        var base_url = "<?php echo Yii::app()->getBaseUrl(true)?>";
        $(document).ready(function(){
             AudioPlayer.setup("<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/player.swf", {  
                width: 250,
                initialvolume: 100,  
                transparentpagebg: "yes",  
                autostart: "yes"
            });  
            $('a.highslide').click(function(e){
                hs.graphicsDir = '<?php echo Yii::app()->getBaseUrl()?>/highslide/graphics/';
                hs.outlineType = 'rounded-white';
                hs.wrapperClassName = 'draggable-header';
                return hs.htmlExpand(this, { contentId: 'highslide-html' } );
               
               
            });
           $('a').cluetip({
  hoverIntent: {
    sensitivity:  1,
    interval:     750,
    timeout:      750
  }
});
            
        });
    </script>
</html>


