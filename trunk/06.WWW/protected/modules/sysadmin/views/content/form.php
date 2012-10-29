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
<?php echo $form->textAreaRow($model, 'desc', array('rows' => 6, 'class' => 'span5')); ?>
    <div class="control-group ">        
               
        
        <label for="Contents_content" class="control-label required">content <span class="required">*</span></label>
        <div class="controls">
             <?php
            $this->widget('ext.tinymce.TinyMce', array(
                'model' => $model,
                'attribute' => 'content',
                // Optional config
                'compressorRoute' => 'tinyMce/compressor',
                'spellcheckerRoute' => 'tinyMce/spellchecker',
                'fileManager' => array(
                    'class' => 'ext.elFinder.TinyMceElFinder',
                    'connectorRoute' => 'sysadmin/elfinder/connector',
                ),
                'htmlOptions' => array(
                    'rows' => 6,
                    'cols' => 60,
                ),
            ));
            ?>
        </div>
    </div>

    
    <?php echo $form->dropDownListRow($model, 'category_id', CHtml::listData(Category::model()->findAll(), 'id', 'title'), array('prompt' => '-- Chọn --', 'class' => 'span4')); ?>
<?php echo $form->dropDownListRow($model, 'state', array(1 => 'Publish', 0 => 'UnPublish')); ?>

</fieldset>
<?php $this->endWidget(); ?>
<?php $this->widget('ext.TiiSlug.TiiSlug', array(
    'model' => $model,
    'source' => 'title',
    'target' => 'slug',
)); ?>
