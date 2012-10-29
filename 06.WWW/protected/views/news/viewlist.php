<div id='sub-nav' class='row-fluid'>
    <div class='page3'>
        <div class='title_ab span4'>
            <span class="row-fluid span12 title_small">THỂ LOẠI</span>
            <span class="row-fluid span12 title_big">TIN TỨC</span>           
        </div>
        <div id='' class='span8 en-title-pg2'>
            <?php
                $total = count($listcat);
                echo "<div class='row-fluid'>";
                $i=0;
                foreach($listcat as $k=>$v){
                    
                    if($i==round($total/2)){
                        echo "</div>";
                        echo "<div class='row-fluid'>";
                    }
                    echo "<a  href='".Yii::app()->getBaseUrl(true)."/tin-tuc/".$v->slug."-".$v->id.".html'>".$v->title."</a>";
                    if($i < ($total-1)){
                        echo "&nbsp;/&nbsp;";
                    }
                    $i++;
                }
                echo "</div>";  
            ?>
        </div>
    </div>
</div><!-- end #sub-nav -->
 <div id='wrap-en' class='row-fluid'>

                                    <div class="span9" id='wrap-body'>
                                        <div class='row-fluid header-at'>
                                            <div class="row-fluid"><h2 class='upcase'><?php echo $root->title ?></h2></div>
                                            <div class="line2 row-fluid"></div>
                                            <div class="row-fluid content margin_topbot10">
                                                <?php echo $root->desc ?>
                                            </div><!-- end content -->
                                        </div><!-- end header-at-->
                                        <div class='row-fluid body-at container'>	







                                            <div id="page-wrapper" class="re_span9">





                                                

                                                <div id="page-obj">
                                                    <div id="en-left" class="page-wrapper-top">
                                                        <div class="row-fluid  ">
                                                        </div>   
                                                        <?php   foreach($items as $k=>$v){ ?>
                                                        <div class='crow-fluid relative margin_topbot10'>
                                                            <div class="span2" >
                                                                <img src="<?php echo Libraries::getImage($v->content) ?>" title="<?php echo $v->title?>"/>
                                                            </div><!-- end .span3 -->
                                                            <div class="span9">
                                                                <a title ="<?php echo $v->title ?>"href="<?php echo Yii::app()->getBaseUrl(true)."/tin-tuc/".$root->slug."-".$root->id."/".$v->slug."-".$v->id.".html"?>" title="<?php echo $v->title ?>"><h5><?php echo $v->title ?></h5></a>
                                                                <?php
                                                                            
                                                                ?>
                                                            </div><!-- end .span3 -->
                                                            <div class="span2 iconx-container row">
                                                                <div class="iconx-cmt"><?php echo Libraries::getCmt($v->id) ?></div><div class="iconx-view"><?php echo $v->view?></div>
                                                            </div>
                                                            <div class="row-fluid line"></div>     
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                </div><!-- end .page-wrapper-top-->    		












                                                <div class="clearfix"></div>
                                            
                                        </div>





                                    </div><!-- end body-at container -->


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