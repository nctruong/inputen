<div class='row-fluid span5 study-by-video-clip'>
    <div class='row-fluid block-home-4-title'>
        <a href='#'>học tiếng anh qua video clip</a>
    </div>
    <div class='block-info'>
        <ul class='block-info-title' id='ul-study'>
            <li class='active ul-first'><a href='tab'>Tiếng anh giao tiếp</a></li>
            <li><a href='tab1'>Học với người nổi tiếng</a></li>
            <li class='ul-last'><a href='tab2'>Youtube</a></li>
        </ul>
        <div class="video_show_case">
        <!-- video 1 -->
        <div class='ul-type2 relative _tab' id="tab">
            <div class="info_video_1">
                <div class='info-by-video'>
                    <a href='#'>101 bài tiếng Anh giao tiếp cơ bản</a>
                </div>
                <div class="place_ajax_list_video">
                    <ul class="list_pagin_video">

                        <?php foreach ($giaotiep as $k) { ?>
                            <li>
                                <?php $cat = $k->category; ?>
                                <a href='<?php echo Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "-" . $cat->id . "/" . $k->slug . "-" . $k->id . ".html" ?>'>
                                    <?php
                                    $img = $k->image;
                                    if ($img == '') {
                                        $img = Yii::app()->getBaseUrl(true) . '/uploads/Image/no_image.gif';
                                    }
                                    ?>
                                    <img class="image_box_most_video" src='<?php echo $img ?>' />
                                    <center><p class="desc_block_video"><?php echo ($k->desc) ?></p></center>
                                </a>
                            </li>
                        <?php } ?> 

                    </ul>
                    <div class="clear"></div>
                </div>
                <?php
                if ($count_gt > count($giaotiep)) {
                    echo '<center><div class="pagination pt2">';
                    echo '<ul class="yiiPager pagin_home_n1" id="yw2">';
                    for ($i = 1; $i <= ceil($count_gt / 6); $i++) {
                        echo "<li class=''><a href='" . Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "/" . $cat->id . "' rel='" . $i . "'>" . $i . "</a></li>";
                    }

                    echo '</ul>';
                    echo '</div></center>';
                }
                ?>
            </div>
        </div>
        <!-- video 2 -->
         <div class='ul-type2 relative _tab' id="tab1" style="display: none">
            <div class="info_video_1">
                <div class='info-by-video'>
                    <a href='#'>Học tiếng Anh với người nổi tiếng</a>
                </div>
                <div class="place_ajax_list_video">
                    <ul class="list_pagin_video">

                        <?php foreach ($noitieng as $k) { ?>
                            <li>
                                <?php $cat = $k->category; ?>
                                <a href='<?php echo Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "-" . $cat->id . "/" . $k->slug . "-" . $k->id . ".html" ?>'>
                                    <?php
                                    $img = $k->image;
                                    if ($img == '') {
                                        $img = Yii::app()->getBaseUrl(true) . '/uploads/Image/no_image.gif';
                                    }
                                    ?>
                                    <img class="image_box_most_video" src='<?php echo $img ?>' />
                                    <center><p class="desc_block_video"><?php echo ($k->desc) ?></p></center>
                                </a>
                            </li>
                        <?php } ?> 

                    </ul>
                    <div class="clear"></div>
                </div>
                <?php
                if ($count_nt > count($noitieng)) {
                    echo '<center><div class="pagination pt2">';
                    echo '<ul class="yiiPager pagin_home_n1" id="yw2">';
                    for ($i = 1; $i <= ceil($count_nt / 6); $i++) {
                        echo "<li class=''><a href='" . Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "/" . $cat->id . "' rel='" . $i . "'>" . $i . "</a></li>";
                    }

                    echo '</ul>';
                    echo '</div></center>';
                }
                ?>
            </div>
        </div>

        
        
         <!-- video 3 -->
         <div class='ul-type2 relative _tab' id="tab2" style="display:none">
            <div class="info_video_1">
                <div class='info-by-video'>
                    <a href='#'>Học tiếng Anh qua Youtube</a>
                </div>
                <div class="place_ajax_list_video">
                    <ul class="list_pagin_video">

                        <?php foreach ($youtube as $k) { ?>
                            <li>
                                <?php $cat = $k->category; ?>
                                <a href='<?php echo Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "-" . $cat->id . "/" . $k->slug . "-" . $k->id . ".html" ?>'>
                                    <?php
                                    $img = $k->image;
                                    if ($img == '') {
                                        $img = Yii::app()->getBaseUrl(true) . '/uploads/Image/no_image.gif';
                                    }
                                    ?>
                                    <img class="image_box_most_video" src='<?php echo $img ?>' />
                                    <center><p class="desc_block_video"><?php echo ($k->desc) ?></p></center>
                                </a>
                            </li>
                        <?php } ?> 

                    </ul>
                    <div class="clear"></div>
                </div>
                <?php
                if ($count_ytb > count($youtube)) {
                    echo '<center><div class="pagination pt2">';
                    echo '<ul class="yiiPager pagin_home_n1" id="yw2">';
                    for ($i = 1; $i <= ceil($count_ytb / 6); $i++) {
                        echo "<li class=''><a href='" . Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "/" . $cat->id . "' rel='" . $i . "'>" . $i . "</a></li>";
                    }

                    echo '</ul>';
                    echo '</div></center>';
                }
                ?>
            </div>
        </div>
      
        
        <img class='ax_load' src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/default/assets/img/325.gif">
        <div class='clearfix'></div>
        </div>
    </div><!-- end block info -->
</div>