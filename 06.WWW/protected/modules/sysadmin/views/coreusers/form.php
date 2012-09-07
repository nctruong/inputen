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
            <?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>150)); ?>

                <?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>64)); ?>

                <?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>50)); ?>

                <?php echo $form->textFieldRow($model,'fullname',array('class'=>'span5','maxlength'=>150)); ?>

                <?php echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'last_login',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'state',array('class'=>'span5')); ?>

                <?php echo $form->textFieldRow($model,'blocked',array('class'=>'span5')); ?>

        </fieldset>
<?php $this->endWidget(); ?>
