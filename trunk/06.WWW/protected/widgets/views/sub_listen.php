<?php foreach ($data as $row) { ?>
   
    <div class="row-fluid en-box-feature "><!-- .en-box-feature -->
        <div class="span3">
            <img class="en-box-img" title="<?php echo $row->title ?>"  src="<?php echo Libraries::getImage($row->content); ?>">
        </div>
        <div class="span8 en-box-text-feature">
          <!-- <?php echo  Yii::app()->createUrl('listen/view', array('slug' => 'tieu-de-bai-hoc', 'id' => 13)) ?> -->
          <span class="row-fluid"><a href="<?php echo Yii::app()->getBaseUrl(true)?>/<?php echo $this->slug ?>/<?php echo $root->slug ?>/<?php echo $row->slug."-".$row->id?>.html" title="<?php echo $row->title ?>"><?php echo Libraries::cutString($row->title,100) ?></a></span><br /> 
            <!-- <span class="row-fluid"><a href="<?php echo Yii::app()->getBaseUrl(true)?>/bai-hoc/view/<?php echo $row->id?>.html" title="<?php echo $row->title ?>"><?php echo $row->title ?></a></span><br /> -->
            -To be in a dog house<br />
            -The hair of the dog

        </div>
        <div class="clearfix"></div>
        <div class="row-fluid iconx-container">
            
            <div class="iconx-cmt"><?php echo Libraries::getCmt($row->id) ?></div><div class="iconx-view"><?php echo $row->view ?></div>
        </div>
    </div><!-- end .en-box-feature -->
<?php } ?>