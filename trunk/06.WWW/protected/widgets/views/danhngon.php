<div class='span4'>
    <div class='box-title'>
        <a href='#'>danh ngôn tiếng anh</a>
    </div>
    <div class='box sty-idoms'>
        <div class='box-body idoms-scroll'>
            <ul class='idoms '>
                <?php
                foreach($danhngon as $k){ ?>
                <li>
                    <a class='danhngon_block' href="javascript:void(0)" title="<?php echo $k->dictionary?>"><?php echo $k->title?></a> <span class='vlum'><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/themes/default/assets/img/icon-volume.png' /></span>
                    <p><?php echo $k->author?></p>            
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div><!-- end .box -->
</div>