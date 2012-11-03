<form method="post">
    <div class="row-fluid same-type type">
        <div class="span4"><span>PHẢN HỒI</span></div><div class="span8 align_right"></div>
    </div><!-- end .row-fluid -->
    <div class="row-fluid  margin_topbot10 type">
        <div class="row-fluid align_right">
            <input class="input-medium" name="filter_name" type="text" value="<?php echo @$_POST['filter_name'] ?>" /><select class="span2 input-mini" name='filter_type'><option value="1" selected="selected">Mới nhất</option><option value="0" >Cũ hơn</option></select>&nbsp;<button class="btn" style="margin-bottom:9px" onclick="$('.cmt_').val('view')">Tìm bài viết</button>
        </div>   
        <?php
        if (count($comments_item) > 0) {
            foreach ($comments_item as $k => $v) {
                ?>
                <div class="comment-item span10 margin_topbot10 offset2">
                    <div class="row-fluid header-cmt">
                        <div class="span6 offset1">
                            <a href=""><b><i><?php echo $v->mem_username ?></i></b></a> <?php if (Libraries::get_vip($v->mem_id) !== 0) { ?> <img src="<?php echo Yii::app()->theme->getBaseUrl() ?>/assets/img/vip.gif"> <?php } ?>
                        </div>
                        <div class="span3 offset2">
        <?php echo $v->created_date ?>
                        </div>
                    </div><!-- end .header -->
                    <div class="row-fluid body-cmt">
                        <!--            <div class="span7 offset1">
                                        <a href="">Tiếng anh cơ bản sơ cấp</a><br>
                                        Ngày tham gia: 2012-09-26<br>
                                        Bài viết: 2
                                    </div>
                                    <div class="span4">
                                        <ul>
                                            <li>Danh hiệu: Kiến gỗ <button class="what_url"></button></li>
                                            <li>Số học bạ: Đang cố gắng</li>
                                            <li>Điểm thành tích: 0 <button class="what_url"></button></li>
                                            <li>Điểm học bạ: 2 <button class="what_url"></button></li>   
                                        </ul>
                                    </div> end .span5 -->
                        <div class="span11 margin_topbot10 cmt_side" style="margin-left:50px">
        <?php echo $v->comment ?>
                        </div><!-- end .span10 -->
                    </div><!-- end body -->   
                    <div class="avatar">
                        <a href=""><img src="<?php echo Yii::app()->theme->getBaseUrl() ?>/assets/img/no-avt.png"></a>
                    </div><!-- end avatar -->
                </div><!-- end .comment-item -->
            <?php }
        }
        ?>
        <div class="clearfix"></div>
        <!--    <div class='span10 offset2 align_right'>               
                <div class="pagination">
                    <ul class="yiiPager mt_10">
                        <li class="previous disabled"><a href="">←</a></li>
                        <li class=" active"><a href="">1</a></li>
                        <li class=""><a href="">2</a></li>
                        <li class=""><a href="">3</a></li>
                        <li class=""><a href="">4</a></li>
                        <li class=""><a href="">5</a></li>
                        <li class=""><a href="">6</a></li>
                        <li class="next"><a href="">→</a></li>
                    </ul>
                </div>
            </div>-->
    </div><!-- end - ---- - -  -->
    <div class="row-fluid" id="feedback">
        <div class="title">
            <span>ĐĂNG PHẢN HỒI</span> (Bạn chỉ có <b class='red'><?php if ($stt === 0) echo '01'; else echo '0' ?></b> lần phản hồi cho bài học này)
        </div>
        <?php
        if ($login) {
            ?>
            <div class="row-fluid emoticon_small">
                <div  class="row-fluid">
                    <?php
                    $i = 0;
                    foreach ($items as $k) {
                        $x = explode(".", $k);
                        echo '<a href="(:' . $x[0] . ':)"><img src="' . Yii::app()->getBaseUrl(true) . '/data/emoticon/' . $k . '" ></a>';
                        $i++;
                        if ($i == 40) {
                            ?>
                            <div class='hidden_ic' style="display:none">
                                <?php
                            }
                        }
                        echo "</div>";
                        ?>
                        <button onclick='$(".hidden_ic").slideToggle(300)' class="btn btn-mini btn-success pull-right pull-5 offset9 margin_topbot10" type="button">More emoticon</button>       
                    </div>
                </div>
                <div class="row-fluid editor">
                    <textarea rows="7"  <?php if ($stt != 0) echo 'readonly="readonly"' ?> id="display_text" name="Comment[comment]" style="width:700px"></textarea>
                </div>
                <div class="row-fluid send <?php echo @$class ?>">    
                    Nội dung phản hồi ít nhất 10 kí tự. Mỗi lần đăng phản hồi cách nhau ít nhất 30 giây <button <?php if ($stt != 0) echo "onclick='return false'"; ?> class="btn btn-danger floatR">Thêm phản hồi</button>
                </div>
                


<?php } else { ?>
                <div class="row-fluid margin_topbot10">
                    <div class="span9 offset4 red ">
                        Bạn phải đăng nhập mới viết được phản hồi cho bài học này
                    </div>
                    <div class="span10 offset3 center">
                        <form>
                            <button class="btn btn-primary login_btn">Đăng nhập</button>
                            <a class="btn btn-primary" href="<?php echo Yii::app()->getBaseUrl()?>/thanh-vien/dang-ky.html" >Đăng ký</a>
                        </form>
                    </div>
                </div>
<?php } ?>
                <input type="hidden" name="act" class="cmt_" value="submit">
        </div>
</form>   
<div id="myModal" class="modal hide fade" style="width:250px;margin-left:-80px">
    <!-- dialog contents -->
    
    <div class="body_login">
                    <form class="form-vertical" id="verticalForm" action="<?php echo Yii::app()->getBaseUrl()?>/thanh-vien/dang-nhap.html" method="post">            <label for="UserLoginForm_username" class="required">Username <span class="required">*</span></label><input placeholder="Tên đăng nhập" class="span12" name="UserLoginForm[username]" id="UserLoginForm_username" type="text"><span class="help-block error" id="UserLoginForm_username_em_" style="display: none"></span>            <label for="UserLoginForm_password" class="required">Password <span class="required">*</span></label><input placeholder="**********" class="span12" name="UserLoginForm[password]" id="UserLoginForm_password" type="password"><span class="help-block error" id="UserLoginForm_password_em_" style="display: none"></span>
            <button class="btn btn-primary btn-small btn" type="submit" name="yt0">Đăng nhập</button>            <div style="display:none" class="checkbox"> <label class="checkbox" for="UserLoginForm_rememberMe"><input id="ytUserLoginForm_rememberMe" type="hidden" value="0" name="UserLoginForm[rememberMe]"><input name="UserLoginForm[rememberMe]" id="UserLoginForm_rememberMe" value="1" type="checkbox">
Remember me<span class="help-block error" id="UserLoginForm_rememberMe_em_" style="display: none"></span></label> <br> <a href="#">Quên mật khẩu?</a>
            </div>
            </form>            <div id="yw0"></div>  <a href="javascript:void(0)" title="Close" class="primary icon-remove close_x" ></a>  </div><!--end .body_login-->

        

    <!-- dialog buttons -->
    
</div>
