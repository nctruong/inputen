<div class='span4'>
    <div class='span3'>
        <div class='row-fluid block-home-4-title'>
            <a href='#'>học qua phim</a>
        </div>
        <div class='box-ul box-ul-video'>
            <ul class='ul3 list_video_trailer'>
                <li class='active'><a href='tab'>Phim trailer</a></li>
                <li><a href='tab1'>VOA Video</a></li>
            </ul>
            <div class='box-ul-body-video list_video_trailer_component' style='float:left'>
                <div id="tab" class="_tab">
                    <div>
                    <ul id='sty-video'>
                        <?php $i=0; foreach ($trailer as $k){
                            $i++;
                            $class = '';
                            if($i==count($trailer)){
                                $class = 'last';
                            }?>
                            <li <?php echo 'class="'.$class.'"';?>>
                                <?php
                                $img = $k->image;
                                if ($img == '') {
                                    $img = Yii::app()->getBaseUrl(true) . '/uploads/Image/no_image.gif';
                                }
                                $cat = $k->category;
                                ?>

                                <img src='<?php echo $img ?>' title="<?php echo $k->title ?>" />
                                <a href='<?php echo Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "-" . $cat->id . "/" . $k->slug . "-" . $k->id . ".html" ?>' title="<?php echo $k->title ?>">
                                    <?php echo $k->title ?>
                                </a>
                                <p class='v-desc'>
                                    <?php echo $k->desc ?>
                                </p>
                            </li>
                        <?php } ?>
                    </ul>
                          <div class="clear"></div>
                </div>
                    <?php
                    if ($count_tl > count($trailer)) {
                        echo '<center><div class="pagination">';
                        echo '<ul class="yiiPager pagin_home_n1">';
                        for ($i = 1; $i <= ceil($count_tl / 5); $i++) {
                            echo "<li class='".$class."'><a href='" . Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "/" . $cat->id . "/five' name='5' rel='" . $i . "'>" . $i . "</a></li>";
                        }

                        echo '</ul>';
                        echo '</div></center>';
                    }
                    ?>
                </div>
                <div id="tab1" class="_tab" style="display:none">
                    <div>
                    <ul id='sty-video'>
                        <?php $i=0; foreach ($voa as $k) { 
                            $i++;
                            $class = '';
                            if($i==count($trailer)){
                                $class = 'last';
                            }?>
                            <li <?php echo 'class="'.$class.'"';?>>
                            
                                <?php
                                $img = $k->image;
                                if ($img == '') {
                                    $img = Yii::app()->getBaseUrl(true) . '/uploads/Image/no_image.gif';
                                }
                                $cat = $k->category;
                                ?>

                                <img src='<?php echo $img ?>' title="<?php echo $k->title ?>" />
                                <a href='<?php echo Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "-" . $cat->id . "/" . $k->slug . "-" . $k->id . ".html" ?>' title="<?php echo $k->title ?>">
                                    <?php echo $k->title ?>
                                </a>
                                <p class='v-desc'>
                                    <?php echo $k->desc ?>
                                </p>
                            </li>
                        <?php } ?>
                    </ul>
                     <div class="clear"></div>
                </div>
                    <?php
                    if ($count_voa > count($voa)) {
                        echo '<center><div class="pagination">';
                        echo '<ul class="yiiPager pagin_home_n1">';
                        for ($i = 1; $i <= ceil($count_voa / 5); $i++) {
                            echo "<li class=''><a href='" . Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "/" . $cat->id . "/five' rel='" . $i . "'>" . $i . "</a></li>";
                        }

                        echo '</ul>';
                        echo '</div></center>';
                    }
                    ?>
                </div>
                
            </div>

        </div>
    </div>
</div>