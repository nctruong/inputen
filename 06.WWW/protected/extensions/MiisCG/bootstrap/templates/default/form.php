<?php
echo "<?php\n";
/** @var BootActiveForm $form */
echo "\$form = \$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'adminForm',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'method' => 'post',
    'htmlOptions' => array('class' => 'table-bordered form-horizontal well'),
        ));";
echo "\n?>\n";
?>
<fieldset>
    <?php
    foreach ($this->tableSchema->columns as $column) {
        if ($column->autoIncrement)
            continue;
        ?>
        <?php echo "<?php echo " . $this->generateActiveRow($this->modelClass, $column) . "; ?>\n"; ?>

        <?php
    }
    ?>
</fieldset>
<?php echo "<?php \$this->endWidget(); ?>\n"; ?>