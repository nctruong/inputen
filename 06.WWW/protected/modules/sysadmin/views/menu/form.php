<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'adminForm',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'method' => 'post',
    'htmlOptions' => array('class' => 'table-bordered form-horizontal well'),
        ));
?>
<fieldset>
    <?php echo $form->textFieldRow($model, 'name', array('class' => 'span5', 'maxlength' => 250)); ?>

    <?php echo $form->textAreaRow($model, 'description', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->dropDownListRow($model, 'state', array(1 => 'Publish', 0 => 'UnPublish')); ?>

</fieldset>
<?php $this->endWidget(); ?>
