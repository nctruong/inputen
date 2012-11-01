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
    
    <?php $this->widget('lichhoc'); ?>
    
    <div class='span3' id='challenger'>
        <div class='img-cup'>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/themes/default/assets/img/img-cup.png' />
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
                                <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/themes/default/assets/img/icon-cup.png' />
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
                                <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/themes/default/assets/img/icon-cup.png' />
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
                                <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/themes/default/assets/img/icon-cup.png' />
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
        <!--  login widgets -->
        <?php $this->widget('login') ?>
        <!-- end login widgets -->

    </div>
</div><!-- end .block-home-1 --> 
<div class='hr clearfix'></div>
<div class='row-fluid block-home-2'>
    <div class='span6'>
        <?php $this->widget('tienganhphothong'); ?>
        <?php $this->widget('tienganhtreem'); ?>
        <?php $this->widget('tienganhgiaotiepcoban'); ?>
    </div><!-- end right box block 1 -->
    <div class='span3'>
        <?php $this->widget('luyentaptienganh'); ?>
    </div><!-- end mid box block 1 -->
    <div class='span3 ' style="width:200px">
        <?php $this->widget('support') ?>
        <?php $this->widget('support2') ?>
    </div>
</div><!-- end .block-home-2 -->
<div class='ads row-fluid'>
    <div class='span6 ctv'>
        <a href='#'>Tuyển CTV và đại lý phân phối thẻ trên toàn quốc</a>
    </div>
    <div class='span6 ctv-img'>
        <a href='#'><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/themes/default/assets/img/chat-room.png' /></a>
    </div>
</div><!-- end ads -->
<div class='hr clearfix'></div>
<div class='row-fluid block-home-3'>
    <?php $this->widget('news_lession_comment'); ?>

    <?php $this->widget('buy_card'); ?>

    <?php $this->widget('newsletter_exam'); ?>
</div><!-- end block-home-3 -->
<div class='hr clearfix'></div>
<div class='row-fluid block-home-4'>
    <?php $this->widget('study_by_clip'); ?>
    <!-- tieng anh hoc qua video clip -->
    <?php $this->widget('study_by_cnn'); ?>

    <?php $this->widget('study_by_music'); ?>
    <!-- hoc tieng anh qua bai hat -->
</div><!-- end block-home-4 -->
<div class='hr clearfix'></div>
<div class='row-fluid block-home-5'>
    <?php $this->widget('study_by_film'); ?>
    <!-- end hoc qua phim -->
    <?php $this->widget('danhngon'); ?>
    <!-- end danh ngon tieng anh -->
    <?php $this->widget('box_game'); ?>
    <!-- end tro cho tieng anh -->
</div><!-- end block home 5 -->
<div class='hr clearfix'></div>
<div class='row-fluid block-home-6'>
    <div class='span9 block-member'>
        <?php $this->widget('top_member'); ?>

        <?php $this->widget('bottom_logos'); ?>
        <!-- end list box 123 -->
    </div>
    <!-- end list box member -->
    <?php $this->widget('member_question'); ?>
    <!-- end cau hoi va cau tra loi cua thanh vien -->
</div><!-- end block member  -->


