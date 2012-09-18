
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
    <?php echo $form->textFieldRow($model, 'title', array('class' => 'span5', 'maxlength' => 255)); ?>

    <?php echo $form->textFieldRow($model, 'slug', array('class' => 'span5', 'maxlength' => 255)); ?>

    <?php echo $form->textFieldRow($model, 'premium', array('class' => 'span5')); ?>
    <div class="control-group ">
        <label for="Contents_content" class="control-label required">content <span class="required">*</span></label>
        <div class="controls">
            <?php
            $this->widget('ext.ckeditor.CKEditorWidget', array(
                'model' => $model,
                'attribute' => 'content',
            ));
            ?>
        </div>
    </div>

    <?php echo $form->textFieldRow($model, 'created_date', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'category_id', array('class' => 'span5')); ?>

</fieldset>
<?php $this->endWidget(); ?>


