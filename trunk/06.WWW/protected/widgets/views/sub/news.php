<div class='row-fluid en-box-desc'>
    <ul>
        <?php foreach($data as $row){ 
        echo "<li><a href='".Yii::app()->getBaseUrl(true)."/tin-tuc/".$this->slug."-".$root->id."/".$row->slug."-".$row->id.".html'>".  Libraries::cutString($row->title,60)."</a></li>";
        }?>
    </ul>
</div>