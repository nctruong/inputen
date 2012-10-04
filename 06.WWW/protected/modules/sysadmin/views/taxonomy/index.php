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
        'filter' => $model,
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
            array('name' => 'id', 'header' => 'id',
                'filter' => CHtml::activeTextField($model, 'id', array('class' => 'span1')),
                'headerHtmlOptions' => array(
                    'class' => 'span1',
                ),
            ),
            array('name' => 'name', 'header' => 'name'),
            array('name' => 'description', 'header' => 'description'),
            array(
                'name' => 'type',
                'header' => 'type',
                'filter' => CHtml::activeDropDownList($model, 'type', CHtml::listData(Taxonomy::model()->findAll(), 'type', 'type'), array('empty' => 'None', 'class' => 'span3')),
                'headerHtmlOptions' => array(
                    'class' => 'span3',
                ),
            ),
            array(
                'name' => 'state',
                'header' => 'state',
                'value' => '@$data->state ? "Publish" : "Unpublish"',
                'filter' => CHtml::activeDropDownList($model, 'state', array(1 => 'Publish', 0 => 'Unpublish'), array('empty' => 'None', 'class' => 'span2')),
                'headerHtmlOptions' => array(
                    'class' => 'span2',
                ),
            ),
        ),
    ));
    ?>
</form>