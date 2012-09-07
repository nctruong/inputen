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
        'id' => 'CoreUsers-grid',
        'type' => 'striped bordered condensed',
        'dataProvider' => $model->search(),
        'selectableRows' => 2, // multiple rows can be selected
        'template' => "{items}{summary}{pager}",
        'columns' => array(
            array(
                'class' => 'CCheckBoxColumn',
                'id' => 'cid',
                'value' => '$data->id',
                'htmlOptions' => array('style' => 'width: 20px')
            ),
            		 array('name' => 'id', 'header' => 'id'),
		 array('name' => 'username', 'header' => 'username'),
		 array('name' => 'password', 'header' => 'password'),
		 array('name' => 'email', 'header' => 'email'),
		 array('name' => 'fullname', 'header' => 'fullname'),
		 array('name' => 'created_date', 'header' => 'created_date'),
		 array('name' => 'last_login', 'header' => 'last_login'),
		 array('name' => 'state', 'header' => 'state'),
		 array('name' => 'blocked', 'header' => 'blocked'),

        ),
    ));
?>
</form>