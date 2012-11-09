<div id='sub-nav' class='row-fluid'>
    <div class='page3'>
        <div class='title_ab span4'>
            <span class="row-fluid span12 title_small">THỂ LOẠI</span>
            <span class="row-fluid span12 title_big">HỌC VÀ CHƠI</span>           
        </div>
        <div id='' class='span8 en-title-pg2'>
            <?php
            ?>
        </div>
    </div>
</div><!-- end #sub-nav -->
<div id='wrap-en' class='row-fluid'>

    <div class="span9" id='wrap-body'>
        <div class='row-fluid header-at'>
            <div class="row-fluid"><h2 style="text-transform: uppercase"><?php echo $root->title ?></h2></div>
            <div class="line2 row-fluid"></div>
            <div class="row-fluid content margin_topbot10">
                <?php echo $root->desc ?>
            </div><!-- end content -->
        </div><!-- end header-at-->
        <div class='row-fluid body-at container'>	
            <div class="span12" style="width:98%">
                <div class="en-box row-fluid">
                    <div class="row-fluid en-box-title">

                    </div>
                    <div class="row-fluid en-box-feature "><!-- .en-box-feature -->

                        <div class="row-fluid ">
                            <ul class="danh-ngon-list">
                                <?php foreach ($danhngon as $k) { ?>

                                    <li>
                                        <a class='danhngon_block' href="javascript:void(0)" title="<?php echo $k->dictionary ?>"><?php echo $k->title ?></a><span class='vlum' alt="<?php echo $k->audio ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/themes/default/assets/img/icon-volume.png' /></span>
                                        <p><?php echo $k->author ?></p>
                                        <div class="clearfix"></div>
                                    </li>
                                <?php }
                                ?>
                            </ul>
                        </div> 
                    </div><!-- end .en-box-feature -->
                </div><!-- end .en-box //ngu phap -->
                <?php
// }
                ?>
            </div>
            <!--            <div class="row-fluid center  " >               
                            <div class="pagination" style="padding:20px;">
            
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
                        </div>                            -->

        </div>







    </div><!-- end span 9 -->
    <div id='en-right' class='span3'>
        <?php $this->widget('search'); ?>
        <?php $this->widget('login'); ?>
        <?php $this->widget('support'); ?>
        <?php $this->widget('support2'); ?>
        <?php $this->widget('adv'); ?>
        <?php $this->widget('statistics'); ?>                    
    </div><!-- end #end-right -->
</div><!-- end #wrap-en -->