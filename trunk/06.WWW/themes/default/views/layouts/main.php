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
                        
    </head>
    <body>

        <div class="container">
            <div id="top" class="row-fluid">
                <img class="logo" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo.png">
            </div><!-- end #top -->
            <div id='en-nav' class='row-fluid'>
                <ul>
                    <li><a href='<?php echo Yii::app()->getBaseUrl(true); ?>'>Home</a></li>
                    <li><a href='<?php echo Yii::app()->getBaseUrl(true) . '/tin-tuc.html'; ?>'>Tin tức</a></li>
                    <li><a href='<?php echo Yii::app()->getBaseUrl(true) . '/bai-hoc.html'; ?>'>Bài học</a></li>
                    <li><a href='<?php echo Yii::app()->getBaseUrl(true) . '/tham-khao.html'; ?>'>Tham khảo</a></li>
                    <li><a href='<?php echo Yii::app()->getBaseUrl(true) . '/hoc-qua-clip.html'; ?>'>Học qua clip</a></li>
                    <li><a href='<?php echo Yii::app()->getBaseUrl(true) . '/site/hocvachoi.html'; ?>'>Học và chơi</a></li>
                    <li><a href='#'>Bài test</a></li>
                    <li><a href='<?php echo Yii::app()->getBaseUrl(true) . '/hoc-offline.html'; ?>'>Học offline</a></li>
                    <li><a href='#'>Video</a></li>
                    <li><a href='#'>T.A Phổ thông</a></li>
                    <li><a href='#'>Chấm điểm</a></li>
                    <li><a href='#' class='li-last'>Diễn đàn</a></li>
                </ul>
            </div><!-- end #menu-bar -->

            
<?php echo $content ?>
            
            
        </div><!-- end #container -->            
 <div class='container-fluid' id='footer-menu'>
            <div class='row-fluid' id='top-footer'>
                <div class='span2'></div>
                <div id='en-nav' class='row-fluid span10'>
                    <ul>
                        <li><a href='#' class='li-first'>Home</a></li>
                        <li><a href='#'>Phát âm tiếng anh</a></li>
                        <li><a href='#'>Đọc tiếng anh</a></li>
                        <li><a href='#'>Luyện thi toiec</a></li>
                        <li><a href='#'>Từ vựng tiếng anh</a></li>
                        <li><a href='#'>Ngữ pháp tiếng anh</a></li>
                        <li><a href='#'>Nghe tiếng anh</a></li>
                        <li><a href='#'>Tiếng anh thương mại</a></li>
                        <li><a href='#' class='li-last'>Qui định sử dụng</a></li>
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

    </body>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery-ui-1.8.0.min.js" type='text/javascript'></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery.mousewheel.min.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/jquery.mCustomScrollbar.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/cufon-yui.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/League_Gothic_400.font.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/js/script.js"></script>    
</html>

