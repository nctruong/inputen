<div class='span6'>
    <div class='block-info'>
        <ul class='block-info-title block_listen_news_comment'>
            <li class='active'><a href='tab1"'>Bài học mới</a></li>
            <li><a href='tab2'>Phản hồi mới</a></li>
            <li><a href='tab3'>Tin tức mới</a></li>
        </ul>
        <div class='block-info-body scroll_over'>
            <div class="_tab" id="tab1">
            <ul>
                <?php $i=0; foreach($listen as $k) {?>
                <?php
                 if($i==(count($listen) - 1)){
                            echo "<li style='boder:0px'>";
                        }else{
                            echo "<li>";
                        }
                ?>
                    <a href='<?php echo Yii::app()->getBaseUrl(true)?>/<?php echo $k->category->taxonomy->slug ?>/<?php echo $k->category->slug."-".$k->category->id."/".$k->slug."-".$k->id?>.html'><?php echo $k->title?></a>
                    <p><?php echo Libraries::Cutstring($k->desc, 65)?></p>
                </li>
                <?php $i++; } ?>
            </ul>
            </div>
            <div class="_tab emoticon_home" id="tab2" style="display:none">
                <ul>
                <?php
                    $i=0;
                    foreach($comments as $k){
                        $tax = $options[$i]['taxonomy'];
                        $category = $options[$i]['category'];
                        $parent = array();
                        $parent = $options[$i]['parent'];
                        $content = $options[$i]['content'];
                        $url = Yii::app()->getBaseUrl()."/".$tax->slug."/";                        
                        if(count($parent) > 0){                        // echo "<pre>";
                           // print_r($parent);
                        }
                        $url .= $category->slug."-".$category->id."/".$content->slug."-".$content->id.".html";
                        if($i==(count($comments) - 1)){
                            echo "<li style='boder:0px'>";
                        }else{
                            echo "<li>";
                        }
                        echo "<a href='".$url."' class='normal'>".($k->comment)."</a>";
                        echo "<p><a href=''>".$k->member->username."</a>(<i>".$k->created_date."</i>)</p></li>";
                        $i++;
                    }
                ?>
                </ul>
                <div class='clear'></div>
            </div>
             <div class="_tab" id="tab3" style="display: none">
            <ul>
                <?php $i=0; foreach($news as $k) {?>
                 <?php
                 if($i==(count($news) - 1)){
                            echo "<li style='boder:0px'>";
                        }else{
                            echo "<li>";
                        }
                ?>
                    <a href='<?php echo Yii::app()->getBaseUrl(true)?>/<?php echo $k->category->taxonomy->slug ?>/<?php echo $k->category->slug?>-<?php echo $k->category->id?>/<?php echo $k->slug."-".$k->id?>.html'><?php echo $k->title?></a>
                    <p><?php echo Libraries::Cutstring($k->desc, 65)?></p>
                </li>
                <?php $i++; } ?>
            </ul>
            </div>
            
        </div>
        
    </div><!-- end block info -->
</div>