<div class='span6 box-course'>
    <ul class='box-class' id='class' >
        <?php
        if (count($lich_hoc) > 0) {
            $i = 0;
            foreach ($lich_hoc as $key) {
                $i++;
                ?>
                <li>
                    <div class='box-class-title'>
                        <a href='<?php echo Yii::app()->getBaseUrl() ?>/hoc-offline/lich-khai-giang-47/<?php echo $key->slug . '-' . $key->id ?>.html'><?php echo $i ?>. <?php echo $key->title ?></a>
                    </div>
                    <div class='box-class-info'>
                        <div class='box-class-open'>
                            <?php echo $key->desc ?>    

                        </div>
                    </div>
                </li>
                <?php
            }
        }
        ?>
    </ul><!-- end .box-class -->
    <div class='child-study'>
        <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/themes/default/assets/img/child-study.png' />
    </div>
</div>