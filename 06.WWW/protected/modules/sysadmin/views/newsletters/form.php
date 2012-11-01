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
    <?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 255)); ?>

    <?php echo $form->textFieldRow($model, 'update_date', array('class' => 'span5')); ?>

    <?php echo $form->dropDownListRow($model, 'published', array('1' => 'Mở', '0' => 'Khóa'), array('options' => array('2' => array('selected' => true)))); ?>

</fieldset>
<?php $this->endWidget(); ?>
