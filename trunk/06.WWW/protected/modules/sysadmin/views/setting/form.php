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
            <?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>250)); ?>

                <?php echo $form->textFieldRow($model,'key',array('class'=>'span5','maxlength'=>250)); ?>

                <?php echo $form->textAreaRow($model,'value',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

        </fieldset>
<?php $this->endWidget(); ?>
