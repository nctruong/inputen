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
    <?php echo $form->checkBoxRow($model, 'premium', array('disabled' => false)); ?>

    <?php echo $form->textFieldRow($model, 'title', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'slug', array('class' => 'span5', 'maxlength' => 255)); ?>

    <div class="control-group ">
        <label for="Contents_content" class="control-label required">content <span class="required">*</span></label>
        <div class="controls">
            <?php
            $this->widget('ext.ckeditor.CKEditorWidget', array(
                'model' => $model,
                'attribute' => 'content',
                'toolbar' => 'Full',
                'isNeedUpload' => true
            ));
            ?>
        </div>
    </div>

    
    <?php echo $form->dropDownListRow($model, 'category_id', CHtml::listData(Category::model()->findAll(), 'id', 'title'), array('prompt' => '-- Chọn --', 'class' => 'span4')); ?>
<?php echo $form->dropDownListRow($model, 'state', array(1 => 'Publish', 0 => 'UnPublish')); ?>

</fieldset>
<?php $this->endWidget(); ?>
