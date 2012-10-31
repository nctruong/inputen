<div id='sub-nav' class='row-fluid'>
    <div class='page3'>
        <div class='title_ab span4'>
            <span class="row-fluid span12 title_small">THỂ LOẠI</span>
            <span class="row-fluid span12 title_big"><?php echo $sroot->name ?>-<?php echo $parent->title?></span>           
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
            <?php
                $total_item = count($items);
                echo "<div id='en-left' class='span6 pag7 pag2'>";
                $i = 0;
                foreach($items as $k=>$v){
                    
                    if($i == count($total_item/2) + 1){
                        echo '</div>';
                        echo '<div id="en-mid" class="span6 pag7 pag2">';
                    }
                    $i++;
                    ?>
                    <div class="en-box row-fluid">
                    <div class="row-fluid en-box-title">
                       <a class='title-listen' href="<?php echo Yii::app()->getBaseUrl(true)."/".$this->root_slug."/".$parent->slug."-".$parent->id."/".$root->slug."-".$root->id."/".$v->slug."-".$v->id.".html"?>" title="<?php echo $v->title ?>"><?php echo $v->title ?></a>
                    </div>
                    <div class="row-fluid en-box-feature "><!-- .en-box-feature -->
                        <div class="row-fluid">
                            <div class="span8 offset2" >
                                <a href="<?php echo Yii::app()->getBaseUrl(true)."/".$this->root_slug."/".$parent->slug."-".$parent->id."/".$root->slug."-".$root->id."/".$v->slug."-".$v->id.".html"?>" class="thumbnail" title="<?php echo $v->title ?>" ><img class="" src="<?php echo Libraries::getImage($v->content) ?>" /></a>
                            </div>
                        </div>
                        <div class="row-fluid box-feature">
                            <?php echo $v->desc ?>
                        </div> 
                    </div><!-- end .en-box-feature -->
                </div><!-- end .en-box //ngu phap -->
                <?php 
                }
            ?>
        </div>


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