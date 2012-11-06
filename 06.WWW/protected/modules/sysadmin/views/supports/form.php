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
            <?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

                <?php echo $form->textFieldRow($model,'nick',array('class'=>'span5','maxlength'=>255)); ?>
                <?php echo $form->dropDownListRow($model, 'type', array(0 => 'Yahoo', 1 => 'Skype', 2 => 'Phone')); ?>
                <?php echo $form->textFieldRow($model,'order',array('class'=>'span1')); ?>
                <?php echo $form->dropDownListRow($model, 'state', array(1 => 'Publish', 0 => 'UnPublish')); ?>

        </fieldset>
<?php $this->endWidget(); ?>
