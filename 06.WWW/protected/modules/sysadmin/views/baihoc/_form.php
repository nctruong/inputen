<?php
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'adminForm',
    'type' => 'horizontal',
    'htmlOptions' => array('class' => 'table-bordered form-horizontal well'),
        ));
?>
<fieldset>
    <?php echo $form->textFieldRow($model, 'title', array('hint' => 'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
    <?php echo $form->dropDownListRow($model, 'category_id', array('Something ...', '1', '2', '3', '4', '5')); ?>
    <?php echo $form->textAreaRow($model, 'content', array('class' => 'span8', 'rows' => 5)); ?>
    <?php
    echo $form->radioButtonListInlineRow($model, 'premium', array(
        'Yes',
        'No',
    ));
    ?>
</fieldset>
<?php $this->endWidget(); ?>