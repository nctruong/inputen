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
        'id' => 'Advertisement-grid',
        'type' => 'striped bordered condensed',
        'filter' => $model,
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
            array('name' => 'id', 'header' => 'id','headerHtmlOptions' => array(
                    'class' => 'span1','style'=>'width:20px'
                )),
             array('name' => 'title', 'header' => 'title'),
                 
		
		 array('name' => 'date_create', 'header' => 'date_create'),
		 array('name' => 'date_end', 'header' => 'date_end'),
		
             array(
                'name' => 'state',
                'header' => 'state',
                'value' => '@$data->state ? "Publish" : "Unpublish"',
                'filter' => CHtml::activeDropDownList($model, 'state', array(1 => 'Publish', 0 => 'Unpublish'), array('empty' => 'None', 'class' => 'span2')),
                'headerHtmlOptions' => array(
                    'class' => 'span1',
                ),
            ),

        ),
    ));
?>
</form>