<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="vi" xml:lang="vi">
    <head>
        <title>E !@#</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
            <!--[if lte IE 7]>  
                <link href="css/ie.css" rel="stylesheet">
            <![endif]--> 
            <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet"/>
            <link href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/css/en-style.css" rel="stylesheet"/>
    </head>
    <body>

        <div class="container">
            <div id="top" class="row-fluid">
                <img class="logo" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo.png">
            </div><!-- end #top -->
            
            <?php $this->widget('home_menu_bar'); ?>

            <div id='sub-nav-header' class="row-fluid">
                <div class='span6 sub-nav-header-left'>
                    lịch khai giảng các lớp tiếng anh chất lượng cao tại tienganh123
                </div>
                <div class='span6 sub-nav-header-right'>
                    <div class='text-search'>Tìm kiếm bài học</div>
                    <div class='text-field'>
                        <form action='#' method='get'>
                            <input type="text" name="kw" />
                            <button type='submit'>Tìm kiếm</button>
                        </form>
                    </div>
                </div>
            </div><!-- end #sub-nav-header -->
            <div class='row-fluid block-home-1'>
                <div class='span6 box-course'>
                    <ul class='box-class' id='class' >
                        <li>
                            <div class='box-class-title'>
                                <a href='#'>1. Tiếng anh cơ sở - GV Việt</a>
                            </div>
                            <div class='box-class-info'>
                                <div class='box-class-open'>
                                    Khai giảng: Sáng 18/7, Tối 3/8/2012
                                </div>
                                <div class='box-class-date'>
                                    Lịch học: Sáng 9h-10h30 Thứ 2,4,6; tối 19h30 Thứ 2,4,6
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class='box-class-title'>
                                <a href='#'>2. Phát âm cơ bản - GV Việt</a>
                            </div>
                            <div class='box-class-info'>
                                <div class='box-class-open'>
                                    Khai giảng: Sáng 31/7/2012, Tối 1/8/2011 
                                </div>
                                <div class='box-class-date'>
                                    Lịch học: Sáng 9h-10h30 thứ 3,5,7; tối 19h30 Thứ 2,4,6
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class='box-class-title'>
                                <a href='#'>3. Ngữ pháp và từ vựng cơ bản - GV Việt</a>
                            </div>
                            <div class='box-class-info'>
                                <div class='box-class-open'>
                                    Khai giảng: Sáng 1/8, tối 11/8/2012 
                                </div>
                                <div class='box-class-date'>
                                    Lịch học: 9h-1Oh30 thứ 2,4,6 ; 19h30 Tối 3,5,7
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class='box-class-title'>
                                <a href='#'>4. Ngữ pháp và từ vựng cơ bản - GV Việt</a>
                            </div>
                            <div class='box-class-info'>
                                <div class='box-class-open'>
                                    Khai giảng: Sáng 1/8, tối 11/8/2012 
                                </div>
                                <div class='box-class-date'>
                                    Lịch học: 9h-1Oh30 thứ 2,4,6 ; 19h30 Tối 3,5,7
                                </div>
                            </div>
                        </li>
                    </ul><!-- end .box-class -->
                    <div class='child-study'>
                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/child-study.png' />
                    </div>
                </div>
                <div class='span3' id='challenger'>
                    <div class='img-cup'>
                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/img-cup.png' />
                    </div>
                    <div class='challenger'>
                        <div class='challenger-title'>
                            CHALLENGER TEST
                        </div>
                        <div class='challenger-info'>
                            <div class='challenger-info-title'>
                                Bảng xếp hạng lần 27
                            </div>
                            <ul class='chanllenger-info-body'>
                                <li>
                                    <div class='row-fluid challenger-row'>
                                        <div class='span3'>
                                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-cup.png' />
                                        </div>
                                        <div class='span9 in'>
                                            <div class='row grey name'><a href=''>Angle's Smile</a></div>
                                            <div class='row blue mark'>(+3)</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class='row-fluid challenger-row'>
                                        <div class='span3'>
                                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-cup.png' />
                                        </div>
                                        <div class='span9 in'>
                                            <div class='row grey name'><a href='#'>hMinh</a></div>
                                            <div class='row blue mark'>(+10)</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class='row-fluid challenger-row'>
                                        <div class='span3'>
                                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-cup.png' />
                                        </div>
                                        <div class='span9 in'>
                                            <div class='row grey name'><a href='#'>mTuan</a></div>
                                            <div class='row blue mark'>(+10)</div>
                                        </div>
                                    </div>
                                </li>
                            </ul><!-- end .chanllenger-info-body -->
                            <div class='challenger-info-title clearfix'>
                                Thi đấu lần 27
                            </div>                                        
                        </div>
                    </div>
                </div><!-- end #challenger -->
                <div class='span3'>
                    <form>
                        <div class="top_login">
                            <img style="float: left" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/people.png" alt="">
                                <a href="#">Thành viên</a><br/>
                                <a href="#">Đăng ký thành viên</a>
                        </div><!--end .top_login-->
                        <div class="body_login">
                            <label>Tên đăng nhập:</label>
                            <input type="text" class="input inputfix" title="Username" placeholder=""/>
                            <label>Mật khẩu:</label>
                            <input type="text" class="input inputfix" title="Password" placeholder="********"/>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                            <div class="checkbox"> <input type="checkbox"/> Ghi nhớ tài khoản <br/> <a href="#">Quên mật khẩu?</a>
                            </div>
                        </div><!--end .body_login-->
                    </form>
                </div>
            </div><!-- end .block-home-1 --> 
            <div class='hr clearfix'></div>
            <div class='row-fluid block-home-2'>
                <div class='span6'>
                    <div class='row-fluid box-item'>
                        <div class='span5'>
                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/img1-block2.png' width="200px" height='209px' />
                        </div>
                        <div class='span7 box-tapt'>
                            <div class='row-fluid'>
                                <div class='span7 box-tapt-title'>tiếng anh phổ thông</div>
                            </div><!-- end tienganhphothong -->
                            <div class='row-fluid'>
                                <div class='span8 number-class'>
                                    <ul>
                                        <li><a href='#'>6</a></li>
                                        <li><a href='#'>7</a></li>
                                        <li class='fix-class'><a href='#'>8</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href='#'>9</a></li>
                                        <li class='t'><a href='#'>10</a></li>
                                        <li class='t'><a href='#'>11</a></li>
                                        <li class='t'><a href='#'>12</a></li>
                                    </ul>
                                </div>
                                <div class='span4 fix-otdh'>
                                    <div class='row-fluid'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/img2-block.png' /></div>
                                    <div class='row-fluid otdh'><a href='#'>Ôn thi đại học</a></div>
                                </div>
                            </div><!-- end lop & image -->
                        </div>
                    </div>
                    <div class='row-fluid box-item'>
                        <div class='span4 tate'>
                            <a href='#'>tiếng anh trẻ em</a>
                        </div>
                        <div class='span4 block-2-img'>
                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/child-study-girl-1.png' />
                        </div>
                        <div class='span4 box-class-block-2'>
                            <ul class='ul1 os1'>
                                <li class='even'><a href='#'>Level 3</a></li>
                                <li class='odd'><a href='#'>Lớp 5</a></li>
                            </ul>
                            <ul class='ul1 offset1'>
                                <li class='even'><a href='#'>Level 2</a></li>
                                <li class='odd'><a href='#'>Lớp 4</a></li>
                            </ul>
                            <ul class='ul1 offset2'>
                                <li class='even'><a href='#'>Level 1</a></li>
                                <li class='odd'><a href='#'>Lớp 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='row-fluid box-item type2 '>
                        <div class="cb1"><a href='#'>1</a></div>
                        <div class='cb2'><a href='#'>2</a></div>
                        <div class='hear'><a href='#'>Nghe</a></div>
                        <div class='speak'><a href='#'>Nói</a></div>
                        <div class="span3 tate fix-state">
                            <a href='#'>tiếng anh cơ bản</a>
                        </div>
                        <div class='span6 we-en'>
                            <img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/we-english.png" width="225px">
                        </div>
                        <div class='span3 tate tagtcb'>
                            <a href='#'>tiếng anh giao tiếp cơ bản</a>
                        </div>
                    </div>
                </div><!-- end right box block 1 -->
                <div class='span3'>
                    <div class="row-fluid practise">
                        <div class='child-study-girl-2'>
                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/child-study-girl.png' />
                        </div>
                        <div class='text-head'>
                            <a href='#'>Luyện tập tiếng anh</a>
                        </div>
                        <div class='book-app'>
                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/book.png' />
                        </div>
                        <ul>
                            <li><a href='#'>Kiểm tra trình độ</a></li>
                            <li><a href='#'>Dịch Anh - Việt (dễ)</a></li>
                            <li><a href='#'>Dịch Anh - Việt (inter)</a></li>
                            <li><a href='#'>Dịch Việt-Anh (dễ)</a></li>
                            <li><a href='#'>Dịch Việt-Anh (inter) </a></li>
                            <li><a href='#'>Viết qua tranh (dễ) </a></li>
                            <li><a href='#'>Viết tiếng Anh qua tranh</a></li>
                            <li><a href='#'>Học viết luận ngắn</a></li>
                            <li><a href='#'>Viết Thư Phản Hồi</a></li>
                            <li><a href='#'>Luyện nói tiếng Anh</a></li>
                            <li><a href='#'>Luyện đọc đoạn văn</a></li>
                            <li><a href='#'>Nghe và viết (dễ)</a></li>
                            <li><a href='#'>Nghe và viết (khó)</a></li>
                            <li><a href='#'>Thi hát tiếng Anh</a></li>
                            <li><a href='#'>Phòng thi</a></li>
                        </ul>
                    </div>
                </div><!-- end mid box block 1 -->
                <div class='span3'>
                    <div class="support row-fluid margin_topbot10">
                        <div class="top_support">
                            <img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/support.jpg" style="margin-left: 45px">
                        </div><!--end. top_support-->
                        <div class="title_support">Hỗ trợ trực tuyến</div>
                        <div class="body_right">
                            <ul class="none_list_style">
                                <li>Giáo viên 1: <img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/yahoo.jpg"></li>
                                <li>Giáo viên 2: <img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/yahoo.jpg"></li>
                                <li>Giáo viên 3: <img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/yahoo.jpg"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box_ul margin_topbot10">
                        <ul class="none_list_style">
                            <li><img alt="" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon_thumnail1.jpg">» <a href="#">Cách đăng ký thành viên vip 1234</a></li>
                            <li><img alt="" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon_thumnail2.jpg">» <a href="#">Cách đăng ký thành viên vip 1234</a></li>
                            <li><img alt="" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon_thumnail3.jpg">» <a href="#">Cách đăng ký thành viên vip</a></li>
                            <li><img alt="" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon_thumnail4.jpg">» <a href="#">Cách đăng ký thành viên vip1234</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end .block-home-2 -->
            <div class='ads row-fluid'>
                <div class='span6 ctv'>
                    <a href='#'>Tuyển CTV và đại lý phân phối thẻ trên toàn quốc</a>
                </div>
                <div class='span6 ctv-img'>
                    <a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/chat-room.png' /></a>
                </div>
            </div><!-- end ads -->
            <div class='hr clearfix'></div>
            <div class='row-fluid block-home-3'>
                <div class='span6'>
                    <div class='block-info'>
                        <ul class='block-info-title'>
                            <li class='active'><a href='#'>Bài học mới</a></li>
                            <li><a href='#'>Phản hồi mới</a></li>
                            <li><a href='#'>Tin tức mới</a></li>
                        </ul>
                        <div class='block-info-body'>
                            <ul>
                                <li>
                                    <a href='#'>animal at play</a>
                                    <p>Animal</p>
                                </li>
                                <li>
                                    <a href='#'>Getting News From Around the World With Today’s Front Pages</a>
                                    <p>Luyện nghe tiếng Anh qua tin tức</p>
                                </li>
                                <li>
                                    <a href='#'>Rio+20 Brings Attention to Sustainable Development</a>
                                    <p>Luyện nghe tiếng Anh qua video VOA</p>
                                </li>
                                <li>
                                    <a href='#'>The award belongs to the winners.</a>
                                    <p>Học ngữ pháp qua phân tích câu</p>
                                </li>
                                <li>
                                    <a href='#'>14/07/2012: Your weekly address</a>
                                    <p>Tổng thống Mỹ Obamav</p>
                                </li>
                                <li>
                                    <a href='#'>LVE THE PUZZLE</a>
                                    <p>Funny Q & A</p>
                                </li>
                                <li>
                                    <a href='#'>Listening & Writing Advanced - 25</a>
                                    <p>Listening & Writing - Advanced</p>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end block info -->
                </div>
                <div class='span3'>
                    <div class='card'>
                        <div class='card-title'>
                            <A href='#'>đăng ký mua thẻ</a>
                        </div>
                        <a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/card-vip.png' /></a>
                        <a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/card-golded.png' /></a>
                    </div>
                </div>
                <div class='span3'>
                    <div class='row-fluid newsletter'>
                        <div class='newsletter-title'>Nhận bài học mới qua email</div>
                        <div class='newsletter-label'>Nhập điạ chỉ mail của bạn</div>
                        <form action='#' method='post'>
                            <input type='text' size='40' name='newsletters' />
                            <button type='submit' class='btn-newsletters'>Đăng ký</button>
                            <div class='count-newsletters'>116k/ listeners</div>
                            <div class='help-newsletters'>
                                Sau khi đăng ký, <br />
                                Hãy mở email để kích hoạt
                            </div>
                        </form>
                    </div><!-- nhan bai hoc qua email -->
                    <div class='row-fluid lt'>
                        <div class='item-toeic'><a href='#'>Luyện thi <span>TOICE</span></a></div>
                        <div class='item-ieltd'><a href='#'>Luyện thi <span>IELTS</span></a></div>
                        <div class='lt-img'>
                            <div class='span6'>
                                <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-book.png' />
                            </div>
                            <div class='span6'>
                                <div class='ttd'><a href='#'>Tra từ điển</a></div>
                                <div class='dic'><a href='#'>Dictionary</a></div>
                            </div>
                        </div>
                    </div><!-- luyện thi -->
                </div>
            </div><!-- end block-home-3 -->
            <div class='hr clearfix'></div>
            <div class='row-fluid block-home-4'>
                <div class='row-fluid span5 study-by-video-clip'>
                    <div class='row-fluid block-home-4-title'>
                        <a href='#'>học tiếng anh qua video clip</a>
                    </div>
                    <div class='block-info'>
                        <ul class='block-info-title' id='ul-study'>
                            <li class='active ul-first'><a href='#'>Tiếng anh giao tiếp</a></li>
                            <li><a href='#'>Học với người nổi tiếng</a></li>
                            <li class='ul-last'><a href='#'>Youtube</a></li>
                        </ul>
                        <div class='ul-type2'>
                            <div class='info-by-video'>
                                <a href='#'>101 bài tiếng anh giao tiếp cơ bản</a>
                            </div>
                            <ul>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 1: What are...</p>
                                    </a>
                                </li>
                                <li><a href='#'>
                                        <a href='#'>
                                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                            <p>Bài 2: What are...</p>
                                        </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 3: What did...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 3: What did...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 3: What did...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 3: What did...</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="pagination pt2">
                            <ul class="yiiPager" id="yw2">
                                <li class="previous disabled"><a href="/yii/card/index.php/sysadmin/categorycard/index.html">←</a></li>
                                <li class=" active"><a href="/yii/card/index.php/sysadmin/categorycard/index.html">1</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=2">2</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=3">3</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=4">4</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=5">5</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=6">6</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=7">7</a></li>
                                <li class="next"><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=2">→</a></li>
                            </ul>
                        </div>
                        <div class='clearfix'></div>
                    </div><!-- end block info -->
                </div><!-- tieng anh hoc qua video clip -->
                <div class='row-fluid span3 study-by-cnn'>
                    <div class='row-fluid block-home-4-title'>
                        <a href='#'>học tiếng anh qua CNN</a>
                    </div>
                    <div class='cnn'>
                        <div class='ul-type2'>
                            <ul>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 1: What are...</p>
                                    </a>
                                </li>
                                <li><a href='#'>
                                        <a href='#'>
                                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                            <p>Bài 2: What are...</p>
                                        </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 3: What did...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 3: What did...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 3: What did...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <p>Bài 3: What did...</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="pagination">
                            <ul class="yiiPager" id="yw2">
                                <li class="previous disabled"><a href="/yii/card/index.php/sysadmin/categorycard/index.html">←</a></li>
                                <li class=" active"><a href="/yii/card/index.php/sysadmin/categorycard/index.html">1</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=2">2</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=3">3</a></li>
                                <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=4">4</a></li>
                                <li class="next"><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=2">→</a></li>
                            </ul>
                        </div>
                    </div><!-- tieng anh hoc qua CNN-->
                </div>
                <div class='span3 study-by-music'>
                    <div class='row-fluid block-home-4-title'>
                        <a href='#'>học tiếng anh qua bài hát</a>
                    </div>
                    <div class='box-ul'>
                        <ul class='ul3'>
                            <li class='active'><a href='#'>Mới nhất</a></li>
                            <li><a href='#'>Nghe nhiều</a></li>
                        </ul>
                        <div class='box-ul-body '>
                            <ul id='sty-music'>
                                <li>
                                    <a href='#'>I Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>What the word</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>What your's jos</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>Where go?</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>Miss u</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>I Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>I Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>I Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>I Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>I Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>I Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                                <li>
                                    <a href='#'>I Love U</a>
                                    <p>Nghe: 98765</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- hoc tieng anh qua bai hat -->
            </div><!-- end block-home-4 -->
            <div class='hr clearfix'></div>
            <div class='row-fluid block-home-5'>
                <div class='span4'>
                    <div class='span3'>
                        <div class='row-fluid block-home-4-title'>
                            <a href='#'>học qua phim</a>
                        </div>
                        <div class='box-ul box-ul-video'>
                            <ul class='ul3'>
                                <li class='active'><a href='#'>Phim trailler</a></li>
                                <li><a href='#'>VOA Video</a></li>
                            </ul>
                            <div class='box-ul-body-video'>
                                <ul id='sty-video'>
                                    <li>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <a href='#'>
                                            Snow white and the huntsma (2012)
                                        </a>
                                        <p class='v-desc'>
                                            Chàng thợ săn được lệnh của hoàng hậu
                                        </p>
                                    </li>
                                    <li>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <a href='#'>
                                            Snow white and the huntsma (2012)
                                        </a>
                                        <p class='v-desc'>
                                            Chàng thợ săn được lệnh của hoàng hậu
                                        </p>
                                    </li>
                                    <li>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <a href='#'>
                                            Snow white and the huntsma (2012)
                                        </a>
                                        <p class='v-desc'>
                                            Chàng thợ săn được lệnh của hoàng hậu
                                        </p>
                                    </li>
                                    <li>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <a href='#'>
                                            Snow white and the huntsma (2012)
                                        </a>
                                        <p class='v-desc'>
                                            Chàng thợ săn được lệnh của hoàng hậu
                                        </p>
                                    </li>
                                    <li>
                                        <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/demo-video.png' />
                                        <a href='#'>
                                            Snow white and the huntsma (2012)
                                        </a>
                                        <p class='v-desc'>
                                            Chàng thợ săn được lệnh của hoàng hậu
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="pagination">
                                <ul class="yiiPager mt_10">
                                    <li class="previous disabled"><a href="/yii/card/index.php/sysadmin/categorycard/index.html">←</a></li>
                                    <li class=" active"><a href="/yii/card/index.php/sysadmin/categorycard/index.html">1</a></li>
                                    <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=2">2</a></li>
                                    <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=3">3</a></li>
                                    <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=4">4</a></li>
                                    <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=4">5</a></li>
                                    <li class=""><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=4">6</a></li>
                                    <li class="next"><a href="/yii/card/index.php/sysadmin/categorycard/index.html?CategoryCard_page=2">→</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- end hoc qua phim -->
                <div class='span4'>
                    <div class='box-title'>
                        <a href='#'>danh ngôn tiếng anh</a>
                    </div>
                    <div class='box sty-idoms'>
                        <div class='box-body idoms-scroll'>
                            <ul class='idoms'>
                                <li>
                                    Do not protect yourself by a fence, but rather by your friends.<span class='vlum'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-volume.png' /></span>
                                    <p>Czech Proverb</p>
                                </li>
                                <li>
                                    Lost time is never found again
                                    <p>Benjamin Franklin</p>
                                </li>
                                <li>
                                    Your intellect may be confused, but your emotions will never lie to you <span class='vlum'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-volume.png' /></span>
                                    <p>Benjamin Franklin</p>
                                </li>
                                <li>
                                    Your intellect may be confused, but your emotions will never lie to you <span class='vlum'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-volume.png' /></span>
                                    <p> Benjamin Franklin</p>
                                </li>
                                <li>
                                    Your intellect may be confused, but your emotions will never lie to you <span class='vlum'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-volume.png' /></span>
                                    <p> Benjamin Franklin</p>
                                </li>
                                <li>
                                    Your intellect may be confused, but your emotions will never lie to you <span class='vlum'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-volume.png' /></span>
                                    <p> Benjamin Franklin</p>
                                </li>
                                <li>
                                    Your intellect may be confused, but your emotions will never lie to you <span class='vlum'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-volume.png' /></span>
                                    <p> Benjamin Franklin</p>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end .box -->
                </div><!-- end danh ngon tieng anh -->
                <div class='span4 game'>
                    <div class='row-fluid game-title'>
                        <div class='span4'>
                            <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-game.png' />
                        </div>
                        <div class='span8 text-game'>
                            <a href='#'>trò chơi tiếng anh</a>
                        </div>
                    </div>
                    <div class='row-fluid game-body'>
                        <ul class='ul-game'>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/item-game.png' /><p>Building word</p></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-game-2.png' /><p>Building word</p></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/item-game.png' /><p>Building word</p></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-game-2.png' /><p>Building word</p></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/item-game.png' /><p>Building word</p></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-game-2.png' /><p>Building word</p></a></li>
                        </ul>
                    </div>
                </div><!-- end tro cho tieng anh -->
            </div><!-- end block home 5 -->
            <div class='hr clearfix'></div>
            <div class='row-fluid block-home-6'>
                <div class='span9 block-member'>
                    <div class='row-fluid block-home-4-title'>
                        <a href='#'>top thành viên</a>
                    </div>
                    <div class='row-fluid box-ul top-member'>
                        <ul class='ul3'>
                            <li class='active'><a href='#'>Nhiệt tình</a></li>
                            <li><a href='#'>Chuyên cần</a></li>
                            <li><a href='#'>Thành tích</a></li>
                        </ul>
                        <div class='row-fluid list-member'>
                            <ul>
                                <li>
                                    <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-member.png' />
                                    <div class='info-mem'>
                                        <span class='name'><a href='#'>Hoang_tu_co_don</a></span><br />
                                        - Danh hiệu: <font color='red'>Kiến chúa</font><br />
                                        - Bài viết: 1121
                                    </div>
                                </li>
                                <li>
                                    <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-member.png' />
                                    <div class='info-mem'>
                                        <span class='name'><a href='#'>Hoang_tu_co_don</a></span><br />
                                        - Danh hiệu: <font color='red'>Kiến chúa</font><br />
                                        - Bài viết: 1121
                                    </div>
                                </li>
                                <li>
                                    <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-member.png' />
                                    <div class='info-mem'>
                                        <span class='name'><a href='#'>Hoang_tu_co_don</a></span><br />
                                        - Danh hiệu: <font color='red'>Kiến chúa</font><br />
                                        - Bài viết: 1121
                                    </div>
                                </li>
                                <li>
                                    <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-member.png' />
                                    <div class='info-mem'>
                                        <span class='name'><a href='#'>Hoang_tu_co_don</a></span><br />
                                        - Danh hiệu: <font color='red'>Kiến chúa</font><br />
                                        - Bài viết: 1121
                                    </div>
                                </li>
                                <li>
                                    <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-member.png' />
                                    <div class='info-mem'>
                                        <span class='name'><a href='#'>Hoang_tu_co_don</a></span><br />
                                        - Danh hiệu: <font color='red'>Kiến chúa</font><br />
                                        - Bài viết: 1121
                                    </div>
                                </li>
                                <li>
                                    <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon-member.png' />
                                    <div class='info-mem'>
                                        <span class='name'><a href='#'>Hoang_tu_co_don</a></span><br />
                                        - Danh hiệu: <font color='red'>Kiến chúa</font><br />
                                        - Bài viết: 1121
                                    </div>
                                </li>                                            
                            </ul>
                        </div><!-- end .list member -->
                    </div>
                    <div class='row-fluid logo-footer'>
                        <ul>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo-123.png' /></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo-123.png' /></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo-123.png' /></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo-123.png' /></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo-123.png' /></a></li>
                            <li><a href='#'><img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/logo-123.png' /></a></li>
                        </ul>
                    </div><!-- end list box 123 -->
                </div><!-- end list box member -->
                <div class='span3'>
                    <div class='card fix-card'>
                        <div class='card-title'>
                            <A href='#'>Câu hỏi & trả lời của thành viên</a>
                        </div>
                        <div class='mem-body'>
                            <ul>
                                <li>
                                    <span class='name'>soccon43234</span>
                                    <p>năm nay mem lên lớp 6 cho mem hỏi THCS một này học sáng ,chiều hay sáng hay là chiều</p>
                                    <span class='answer'>Trả lời (2)</span>
                                </li>
                                <li>
                                    <span class='name'>soccon43234</span>
                                    <p>năm nay mem lên lớp 6 cho mem hỏi THCS một này học sáng ,chiều hay sáng hay là chiều</p>
                                    <span class='answer'>Trả lời (2)</span>
                                </li>
                                <li>
                                    <span class='name'>soccon43234</span>
                                    <p>năm nay mem lên lớp 6 cho mem hỏi THCS một này học sáng ,chiều hay sáng hay là chiều</p>
                                    <span class='answer'>Trả lời (2)</span>
                                </li>
                                <li>
                                    <span class='name'>soccon43234</span>
                                    <p>năm nay mem lên lớp 6 cho mem hỏi THCS một này học sáng ,chiều hay sáng hay là chiều</p>
                                    <span class='answer'>Trả lời (2)</span>
                                </li>
                                <li>
                                    <span class='name'>soccon43234</span>
                                    <p>năm nay mem lên lớp 6 cho mem hỏi THCS một này học sáng ,chiều hay sáng hay là chiều</p>
                                    <span class='answer'>Trả lời (2)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class='clearfix' style='margin-bottom: -4px!important'></div>
                    <div class='row-fluid'>
                        <div class="thongke margin_topbot10">
                            <div class="title_support">Thống Kê</div>
                            <div class="body_right">
                                <ul class="none_list_style">
                                    <li>Thành viên: <b>723926</b></li>
                                    <li>Thành viên mới: <a href="#">nga10</a> </li>
                                    <li>Đang trực tuyến: 1087</li>
                                    <li>Xem chi tiết <img alt="" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/icon_people.jpg"></li>
                                    <li><img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/visitercount.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end thong ke -->
                </div><!-- end cau hoi va cau tra loi cua thanh vien -->
            </div><!-- end block member  -->
        </div><!-- end .container -->
        <div class='container-fluid' id='footer-menu'>
            <div class='row-fluid' id='top-footer'>
                <div class='span2'></div>
                <div id='en-nav' class='row-fluid span9'>
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
    <script>
        $(document).ready(function(){
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
        });
    </script>
</html>