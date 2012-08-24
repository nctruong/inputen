<?php
/** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'bai-hoc-form',
    'type' => 'horizontal',
    'htmlOptions' => array('class' => 'table-bordered form-horizontal well'),
        ));
?>
<fieldset>
    <?php echo $form->textFieldRow($model, 'title', array('hint' => 'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
    <?php echo $form->textFieldRow($model, 'slug', array('hint' => 'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
<?php echo $form->textAreaRow($model, 'content', array('class' => 'span8', 'rows' => 5)); ?>
<?php echo $form->checkBoxListInlineRow($model, 'premium', array('1', '2', '3')); ?>
</fieldset>
<?php $this->endWidget(); ?>