
<div class="row-fluid same-type type">
    <div class="span4"><span>PHẢN HỒI</span></div><div class="span8 align_right"><button class="btn btn-danger">Đăng phản hồi</button></div>
</div><!-- end .row-fluid -->

<div class="row-fluid  margin_topbot10 type">
    <div class="row-fluid align_right">
        <form class="form-inline">
            <label>Tùy chọn thành viên &nbsp;</label><input class="input-medium" type="text" /><select class="span2 input-mini"><option selected="selected">Mới nhất</option></select>&nbsp;<button class="btn">Tìm bài viết</button>
        </form>
    </div>    
    <div class="comment-item span10 margin_topbot10 offset2">
        <div class="row-fluid header-cmt">
            <div class="span6 offset1">
                <a href=""><b><i>tienganh123</i></b></a> <img src="<?php echo Yii::app()->theme->getBaseUrl() ?>/assets/img/vip.gif">
            </div>
            <div class="span3 offset2">
                00:00:00 21-12-2012
            </div>
        </div><!-- end .header -->
        <div class="row-fluid body-cmt">
            <div class="span7 offset1">
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
            </div><!-- end .span5 -->
            <div class="span10 margin_topbot10" style="margin-left:50px">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            </div><!-- end .span10 -->
        </div><!-- end body -->   
        <div class="avatar">
            <a href=""><img src="<?php echo Yii::app()->theme->getBaseUrl() ?>/assets/img/no-avt.png"></a>
        </div><!-- end avatar -->

    </div><!-- end .comment-item -->


    <div class="clearfix"></div>
    <div class='span10 offset2 align_right'>               
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
    </div>
</div><!-- end - ---- - -  -->
<div class="row-fluid" id="feedback">
    <div class="title">
        <span>ĐĂNG PHẢN HỒI</span> (Bạn chỉ có <b class='red'>01</b> lần phản hồi cho bài học này)
    </div>
    <?php
        if($login){
    ?>
    <form method="post">
    <div class="row-fluid emoticon_small">
        <!-- <img src='<?php echo Yii::app()->theme->getBaseUrl() ?>/assets/img/emo.png' /> -->
        <div  class="row-fluid">
            <?php
            $i = 0;
            foreach ($items[0] as $k) {
                $x = explode(".", $k);
                echo '<a href=":' . $x[0] . '"><img src="' . Yii::app()->getBaseUrl(true) . '/data/emoticon/' . $k . '" ></a>';

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
            <textarea rows="7" id="display_text" name="Comment[comment]" style="width:700px"></textarea>
        </div>
        <div class="row-fluid send">    
            Nội dung phản hồi ít nhất 10 kí tự. Mỗi lần đăng phản hồi cách nhau ít nhất 30 giây <button class="btn btn-danger floatR">Thêm phản hồi</button>
        </div>
        <input type="hidden" name="cmt_ajax" value="submit">
    </form>   
    
    <?php } else { ?>
     <div class="row-fluid margin_topbot10">
                        <div class="span9 offset4 red">
                            Bạn phải đăng nhập mới viết được phản hồi cho bài học này
                        </div>
                        <div class="span10 offset3 center">
                            <form>
                                <button class="btn btn-primary">Đăng nhập</button>
                                <button class="btn btn-primary">Đăng ký</button>
                            </form>
                        </div>
                    </div>
    <?php } ?>

</div>