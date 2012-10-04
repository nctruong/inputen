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
        'id' => 'Users-grid',
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
            array('name' => 'id', 'header' => 'id',
                'filter' => CHtml::activeTextField($model, 'id', array('class' => 'span1')),
                'headerHtmlOptions' => array(
                    'class' => 'span1',
                ),
            ),
            array('name' => 'username', 'header' => 'username'),
            array('name' => 'email', 'header' => 'email'),
            array('name' => 'fullname', 'header' => 'fullname'),
            //('name' => 'dob', 'header' => 'dob'),
            //array('name' => 'gender', 'header' => 'gender'),
            //array('name' => 'address', 'header' => 'address'),
            //array('name' => 'school', 'header' => 'school'),
            //array('name' => 'country', 'header' => 'country'),
            array(
                'name' => 'blocked',
                'header' => 'Bblock',
                'value' => '@$data->blocked ? "Block" : "Unblock"',
                'filter' => CHtml::activeDropDownList($model, 'blocked', array(1 => 'Block', 0 => 'Unblock'), array('empty' => 'None', 'class' => 'span2')),
                'headerHtmlOptions' => array(
                    'class' => 'span2',
                ),
            ),
            //array('name' => 'premium', 'header' => 'premium'),
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