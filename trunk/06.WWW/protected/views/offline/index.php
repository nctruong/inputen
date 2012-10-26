<div id="sub-nav" class="row-fluid">
                <div id="title" class="span9">
                    BÀI HỌC
                </div>
                <div id="image-title" class="span3">
                    <img src="<?php echo Yii::app()->getBaseUrl(true)?>/themes/default/assets/img/image-sub.png">
                </div>
</div>
<div id='wrap-en' class='row-fluid'>
    <div class="span9" id='wrap-body'>
        <div class='row-fluid header-at'>
        </div><!-- end header-at-->
        <div class='row-fluid body-at container'>	
            <div id="en-left" class="span6 pag2">
                <?php
                $total = count($category);
                $i = 0;
                foreach ($category as $row) {
                    $i++;
                    ?>
                    <div class="en-box row-fluid">
                        <div class="row-fluid en-box-title">
                            <?php echo "<a class='title_cate' href='" . Yii::app()->getBaseUrl(true) . "/hoc-offline/" . $row->slug . "-" . $row->id . ".html'>" . $row->title . "</a>" ?>
                        </div>
                        <?php
                        $this->widget('sub_news', array('cat_id' => $row->id, 'type' => 'listen', 'slug' => 'hoc-offline'))
                        ?>
                    </div><!-- end .en-box //ngu phap -->
                    <?php
                    if ($i == round($total / 2)) {
                        echo "</div>";
                        echo "<div id='en-mid' class='span6 pag2'>";
                    }
                }
                ?>
            </div>
        </div>
    </div><!-- end span 9 #wrap-body -->
    <div id='en-right' class='span3'>
        <?php $this->widget('search'); ?>
        <?php $this->widget('login'); ?>
        <?php $this->widget('support'); ?>
        <?php $this->widget('support2'); ?>
        <?php $this->widget('adv'); ?>
        <?php $this->widget('statistics'); ?>                    
    </div><!-- end #end-right -->
</div><!-- end #wrap-en -->