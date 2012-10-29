<div class="span11 navigator">
    <div class="span6  align_left">
        <div class="row-fluid">
            <span>BÀI TRƯỚC:</span>
        </div>
        <div class="row-fluid">
            <?php
            $k = $this->own;
            ?>
            <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/<?php echo $this->r_slug ?>/<?php echo $cat->slug ?>-<?php echo $cat->id ?>/<?php echo $k->slug ?>-<?php echo $k->id ?>.html" title="Bài trước" class="nav-pre"></a><?php echo $k->title ?> 
        </div>
    </div><!-- end .span6 -->
    <div class="span6  align_right padleft20">
        <div class="row-fluid">
            <span>BÀI SAU:</span>
        </div>
        <div class="row-fluid ">
            <?php
            $l = $this->new;
            ?>
            <?php echo $l->title ?>  <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/<?php echo $this->r_slug ?>/<?php echo $cat->slug ?>-<?php echo $cat->id ?>/<?php echo $l->slug ?>-<?php echo $l->id ?>.html" title="Bài sau" class="nav-next"></a>
        </div>                    
    </div><!-- end .span6 -->                    
</div><!-- end .row-fluid -->
<div class="clearfix"></div>
<div id="bottom-page">
    <?php if(count($same_thread) > 0){  foreach($same_thread as $v => $k) { ?>
    <div class="row-fluid same-type type">
        <span>CÙNG THỂ LOẠI</span>
    </div><!-- end .row-fluid same-type -->
    
    <div class="row-fluid type-item type">
        <div class="span2">
            <a href="">
                <img src="<?php echo Yii::app()->getBaseUrl() ?>/data/img/type.jpg" />
            </a>
        </div>
        <div class="span10">
            <div class="row-fluid title">
                <a href="<?php echo Yii::app()->getBaseUrl(true)?>/<?php echo $this->r_slug ?>/<?php echo $category_[$k->category_id]."-".$k->category_id."/".$k->slug."-".$k->id?>.html"><?php echo $k->title ?></a>
            </div><!-- end .title -->
            <div class="row-fluid">
                Trong phần học này chúng ta sẽ được học các bài ngữ pháp tiếng Anh thường được sử dụng ...
            </div><!-- end .row-fluid -->                        
        </div>
    </div><!-- end .row-fluid -->
    <?php 
    }
 } ?>
    
</div>