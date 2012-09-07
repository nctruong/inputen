<?php
$this->widget('ext.ckeditor.CKEditor', array(
    'model' => $model, # Data-Model (form model)
    'attribute' => 'content', # Attribute in the Data-Model
    'height' => '400px',
    'width' => '100%',
    'toolbarSet' => 'Basic', # EXISTING(!) Toolbar (see: ckeditor.js)
    'ckeditor' => Yii::app()->basePath . '/../ckeditor/ckeditor.php',
    # Path to ckeditor.php
    'ckBasePath' => Yii::app()->baseUrl . '/ckeditor/',
    # Relative Path to the Editor (from Web-Root)
    'css' => Yii::app()->baseUrl . '/css/index.css',
        # Additional Parameters
));
?>
<?php
/** @var BootActiveForm $form */
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
    <?php echo $form->textFieldRow($model, 'title'); ?>
    <?php echo $form->dropDownListRow($model, 'category_id', array('Something ...', '1', '2', '3', '4', '5')); ?>
    <?php echo $form->textAreaRow($model, 'content', array('class' => 'span8', 'rows' => 5)); ?>
    <?php
    echo $form->radioButtonListInlineRow($model, 'premium', array(
        'Yes',
        'No',
    ));
    ?>
</fieldset>
<?php $this->endWidget(); ?>