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
                <?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

                <?php echo $form->textFieldRow($model,'parent',array('class'=>'span5')); ?>  
   
                <div class="control-group ">
                    <label class="control-label" for="Mquestion_parent">Member</label>
                    <div class="controls">
                        <?php echo  CHtml::activeDropDownList($model, 'user_id',CHtml::listData(Member::model()->findAll(), 'id', 'username')) ?>
                    <span class="help-inline error" id="Mquestion_parent_em_" style="display: none"></span></div>
                </div>
 
                <?php echo $form->dropDownListRow($model, 'state', array(1 => 'Publish', 0 => 'UnPublish')); ?>


        </fieldset>
<?php $this->endWidget(); ?>
