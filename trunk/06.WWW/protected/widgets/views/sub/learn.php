<?php
$cat = 0;
if(count($data) == 0){
    $data = $cate;
    $cat = 1;
    
}
$i=1; foreach ($data as $row) { ?>

    <div class="row-fluid en-box-feature <?php if($i==count($data)) echo 'no_border'?>"><!-- .en-box-feature -->
        <?php
            if($row->image == '' & $cat == 0){
                $row->image = Libraries::getImage($row->content);
            }
        ?>
        <img class="en-box-img span4" title="<?php echo $row->title ?>"  src="<?php echo Libraries::validateURL($row->image); ?>">

        
          <!-- <?php echo  Yii::app()->createUrl('listen/view', array('slug' => 'tieu-de-bai-hoc', 'id' => 13)) ?> -->
          <span class="row-fluid"><a href="<?php echo Yii::app()->getBaseUrl(true)?>/<?php echo $this->slug ?>/<?php echo $root->slug ?>-<?php echo $this->cat_id ?>/<?php echo $row->slug."-".$row->id?>.html" title="<?php echo $row->title ?>"><?php echo Libraries::cutString($row->title,100) ?></a></span><br /> 
            <!-- <span class="row-fluid"><a href="<?php echo Yii::app()->getBaseUrl(true)?>/bai-hoc/view/<?php echo $row->id?>.html" title="<?php echo $row->title ?>"><?php echo $row->title ?></a></span><br /> -->
            <?php
               echo $row->desc;           
            ?>

        
        <div class="clearfix"></div>
        <div class="row-fluid iconx-container">
            
<!--            <div class="iconx-cmt"><?php //echo Libraries::getCmt($row->id) ?></div><div class="iconx-view"><?php //echo $row->view ?></div>-->
        </div>
    </div><!-- end .en-box-feature -->
    <?php if($i<count($data)) echo "<div class='margin_topbot10'></div>"; ?> 
<?php $i++; } ?>