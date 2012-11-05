<div class='row-fluid span3 study-by-cnn relative'>
    <div class='row-fluid block-home-4-title'>
        <a href='#'>học tiếng anh qua CNN</a>
    </div>
    <div class='cnn'>
        <div>
        <div class='ul-type2'>
            <ul>
                <?php
                    foreach($cnn as $k){?>
                        <li>
                            <a title="<?php echo $k->title?>" href='<?php echo  Yii::app()->getBaseUrl(true)."/".$k->category->taxonomy->slug."/".$k->category->slug."-".$k->category->id."/".$k->slug."-".$k->id.".html" ?>'>
                                <?php
                                    $img = $k->image;
                                    $cat = $k->category;
                                    if($k->image == ''){
                                        $img = Yii::app()->getBaseUrl(true)."/uploads/Image/no_image.gif";
                                    }
                                ?>
                                
                        <img title="<?php echo $k->title?>" src='<?php echo $img?>' />
                        <p class="desc_block_video"><?php echo $k->title?></p>
                    </a>
                </li>
                <?php    }
                ?>
                
                
            </ul>
        </div>
          <?php
                if ($count > count($cnn)) {
                    echo '<center><div class="pagination">';
                    echo '<ul class="yiiPager pagin_home_n1">';
                    for ($i = 1; $i <= ceil($count / 6); $i++) {
                        echo "<li class=''><a href='" . Yii::app()->getBaseUrl(true) . "/" . $cat->taxonomy->slug . "/" . $cat->slug . "/" . $cat->id . "' rel='" . $i . "'>" . $i . "</a></li>";
                    }

                    echo '</ul>';
                    echo '</div></center>';
                }
                ?>
            <img class='ax_load' src="<?php echo Yii::app()->getBaseUrl(true) ?>/themes/default/assets/img/325.gif">
        </div>
        
    </div><!-- tieng anh hoc qua CNN-->
</div>