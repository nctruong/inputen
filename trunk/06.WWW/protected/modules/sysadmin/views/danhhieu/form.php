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
            <?php echo $form->textFieldRow($model,'point',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($model, 'type', array('1'=>'Điểm danh hiệu','2'=>'Điểm học bạ','3'=>'Điểm thành tích')); ?>
        </fieldset>
<?php $this->endWidget(); ?>