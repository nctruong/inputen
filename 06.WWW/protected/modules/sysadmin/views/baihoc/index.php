<?php
$arrParams = array(
    'modules' => Yii::app()->controller->module->id,
    'controller' => Yii::app()->controller->id
);
?>
<form name="adminForm" id="adminForm" action="<?php echo Yii::app()->createUrl(MiisHelper::url($arrParams)) ?>" method="post">
    <?php
    $this->widget('bootstrap.widgets.TbGridView', array(
        'type' => 'bordered ',
        'dataProvider' => $dataProvider,
        'selectableRows' => 2, // multiple rows can be selected
        'template' => "{items}",
        'columns' => array(
            array(
                'class' => 'CCheckBoxColumn',
                'id' => 'cid',
                'value' => '$data->id',
                'htmlOptions' => array('style' => 'width: 20px')
            ),
            array('name' => 'title', 'header' => 'Title'),
            array('name' => 'content', 'header' => 'Content'),
            array('name' => 'created_date', 'header' => 'Created Date', 'htmlOptions' => array('style' => 'width: 150px')),
        ),
    ));
    ?>
</form>
