<?php
$arrParams = array(
    'modules' => Yii::app()->controller->module->id,
    'controller' => Yii::app()->controller->id,
    'action' => Yii::app()->controller->action->id
);
?>
<form name="adminForm" id="adminForm" action="<?php echo Yii::app()->createUrl(MiisHelper::url($arrParams)); ?>" method="post">
    <?php
    $this->widget('bootstrap.widgets.TbGridView', array(
        'id' => 'Taxonomy-grid',
        'type' => 'striped bordered condensed',
        'dataProvider' => $model->search(),
        'selectableRows' => 2, // multiple rows can be selected
        'template' => "{items}{summary}{pager}",
        'columns' => array(
            array(
                'class' => 'CCheckBoxColumn',
                'id' => 'cid',
                'value' => '$data->id',
                'headerHtmlOptions' => array(
                    'style' => 'width:25px;',
                ),
            ),
            array('name' => 'id', 'header' => 'id'),
            array('name' => 'name','type' => 'raw', 'header' => 'name','value'=>'CHtml::link($data->name,array("'.Yii::app()->controller->id.'/update","id"=>$data->id))'),
            array('name' => 'description', 'header' => 'description'),
            array('name' => 'type', 'header' => 'type'),
            array('name' => 'state', 'header' => 'state'),
        ),
    ));
    ?>
</form>