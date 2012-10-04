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
        'id' => 'Categories-grid',
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
            array('name' => 'title', 'header' => 'title'),
//            array('name' => 'parent', 'header' => 'parent',
//                'value' => '$data->parent ? Categories::model()->findByPk($data->parent)->title : ""',
//            ),
            array('name' => 'taxonomy_id', 'header' => 'taxonomy',
                'value' => '$data->taxonomy->name',
                'filter' => CHtml::activeDropDownList($model, 'taxonomy_id', CHtml::listData(Taxonomy::model()->findAll(), 'id', 'name'), array('empty' => 'None', 'class' => 'span2')),
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
            array('name' => 'created_date', 'header' => 'created_date',
                'filter' => CHtml::activeTextField($model, 'created_date', array('class' => 'span2')),
                'headerHtmlOptions' => array(
                    'class' => 'span2',
                ),
            ),
        ),
    ));
    ?>
</form>