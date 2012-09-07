<?php
echo "<?php\n";
echo "\$arrParams = array(
    'modules' => Yii::app()->controller->module->id,
    'controller' => Yii::app()->controller->id,
    'action' => Yii::app()->controller->action->id
);";
echo "\n?>\n";
?>
<form name="adminForm" id="adminForm" action="<?php echo "<?php echo Yii::app()->createUrl(MiisHelper::url(\$arrParams)); ?>"; ?>" method="post">
    <?php
    $columns = '';
    foreach ($this->tableSchema->columns as $column) {
        $columns .= "\t\t array('name' => '" . $column->name . "', 'header' => '" . $column->name . "'),\n";
    }
    echo "<?php\n";
    echo "\$this->widget('bootstrap.widgets.TbGridView', array(
        'id' => '" . $this->modelClass . "-grid',
        'type' => 'striped bordered condensed',
        'dataProvider' => \$model->search(),
        'selectableRows' => 2, // multiple rows can be selected
        'template' => \"{items}{summary}{pager}\",
        'columns' => array(
            array(
                'class' => 'CCheckBoxColumn',
                'id' => 'cid',
                'value' => '\$data->id',
                'headerHtmlOptions' => array(
                    'style' => 'width:25px;',
		),
            ),
            " . $columns . "
        ),
    ));";
    echo "\n?>\n";
    ?>
</form>