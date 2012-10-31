<div class='row-fluid en-box-desc'>
    <ul>
        <?php foreach($category as $row){ 
        echo "<li><a href='".Yii::app()->getBaseUrl(true)."/".$this->slug."/".$root->slug."-".$root->id."/lop/".$row->slug."-".$row->id.".html'>".  Libraries::cutString($row->title."&nbsp;".$row->desc,65)."</a></li>";
        }?>
    </ul>
</div>