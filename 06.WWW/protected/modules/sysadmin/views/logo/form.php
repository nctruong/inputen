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
                 <?php //echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>255)); ?>
    
    <div class="control-group "><label class="control-label required" for="Logo_name">Name <span class="required">*</span></label><div class="controls"><?php $this->widget('ext.finder.EImageFinder',array('fieldName'=>'image')); ?><span class="help-inline error" id="Logo_name_em_" style="display: none"></span></div></div>
                 <?php echo $form->dropDownListRow($model, 'location', array(0 => 'Banner trên', 1 => 'Logo quảng cáo')); ?>
                
                <?php echo $form->textFieldRow($model,'index',array('class'=>'span1')); ?>

                <?php echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>255)); ?>

                <?php echo $form->textFieldRow($model,'width',array('class'=>'span1')); ?>

                <?php echo $form->textFieldRow($model,'height',array('class'=>'span1')); ?>

        </fieldset>
<?php $this->endWidget(); ?>
