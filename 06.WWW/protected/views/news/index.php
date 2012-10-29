<?php
//
//Libraries::check($page['pages']);
//             $this->widget('CLinkPager', array(
//            'currentPage'=>'tin-tuc',
//            'itemCount'=>$page['item_count'],
//            'pageSize'=>$page['page_size'],
//            'maxButtonCount'=>5,
//            //'nextPageLabel'=>'My text >',
//            'header'=>'',
//        'htmlOptions'=>array('class'=>'pages'),
//        ));
//








?>

<div id='sub-nav' class='row-fluid'>
                <div id='title' class='span9'>
                    Tin tức
                </div>
                <div id='image-title' class='span3'>
                    <img src='<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/image-sub.png' />
                </div>
            </div><!-- end #sub-nav -->
            <div id='wrap-en' class='row-fluid'>
              
                <div id='en-left' class='span4'>
                      <?php
                    $i = 0 ;
                    foreach($category as $row){ 
                    if(Libraries::isEnable($row->id)){  $i++;?>

                        <div class='en-box row-fluid'>
                        <div class='row-fluid en-box-title'>
                           <a class='title_cate' href="<?php echo Yii::app()->getBaseUrl(true) ?>/tin-tuc/<?php echo $row->slug."-".$row->id.".html" ?>"><?php echo  $row->title; ?></a>
                        </div>
                        <div class='row-fluid en-box-feature'>
                            <div class='span3'>
                                <img class='en-box-img' title="<?php echo $row->title?>" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/img/image-1.png" />
                            </div>
                            <div class='span8 en-box-text-feature'>
                                <?php echo $row->desc ?>
                            </div>
                        </div>
                        <?php
                            $this->widget('sub_news',array('cat_id' => $row->id,'slug' => $row->slug))
                        ?>
                        
                     </div><!-- end .en-box //ngu phap -->       
                       <?php
                        if($i == round($total / 2)){
                            echo "</div>";
                            echo "<div id='en-mid' class='span5'>";
                        }
                        
                            
                       ?>
                    
                    <?php }
                    }
                ?>
                </div>
           
     <?php
     
   
                ?>
                <div id='en-right' class='span3'>
                    <?php $this->widget('search'); ?>
                    <?php $this->widget('login'); ?>
                    <?php $this->widget('support'); ?>
                    <?php $this->widget('support2'); ?>
                    <?php $this->widget('adv'); ?>
                    <?php $this->widget('statistics'); ?>                    
                </div><!-- end #end-right -->
            </div><!-- end #wrap-en -->
        
       