<div class='row-fluid logo-footer'>
    <ul>
        <?php
            foreach($adv as $k){
                echo "<li><a href='".$k->link."' title='".$k->title."'><img src='".Yii::app()->getBaseUrl(true).$k->image."' /></a></li>";
            }   
        ?>
    </ul>
</div>