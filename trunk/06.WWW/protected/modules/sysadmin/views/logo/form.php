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

                <?php echo $form->textFieldRow($model,'location',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'index',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>255)); ?>

                <?php echo $form->textFieldRow($model,'width',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'height',array('class'=>'span5')); ?>

        </fieldset>
<?php $this->endWidget(); ?>
