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
            <?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

                <?php echo $form->textFieldRow($model,'slug',array('class'=>'span5','maxlength'=>255)); ?>

                <?php echo $form->textAreaRow($model,'desc',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

                <?php echo $form->textFieldRow($model,'state',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'order',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'parent',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'taxonomy_id',array('class'=>'span5')); ?>

        </fieldset>
<?php $this->endWidget(); ?>
