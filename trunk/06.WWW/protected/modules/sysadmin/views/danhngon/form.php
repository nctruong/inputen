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
<!--    <div class="control-group">
        <label class="control-label">Mô tả</label>-->
        <!-- <div class="controls">
             <?php
//                        $this->widget('ext.tinymce.TinyMce', array(
//                            'model' => $model,
//                            'attribute' => 'desc',                                           // Optional config
//                            'htmlOptions' => array(
//                                'rows' => 2,
//                                'cols' => 40,
//                            ),
//                        ));
                        ?>
            
        </div-->
<!--    </div>-->
    
    
    <div class="control-group">
        <div class="confirm" style="">
            <?php echo $form->textAreaRow($model, 'title', array('class' => 'span5', 'rows' => 3)); ?>
            <?php echo $form->textAreaRow($model, 'dictionary', array('class' => 'span5', 'rows' => 3)); ?>
            <?php echo $form->textFieldRow($model, 'author', array('class' => 'span5', 'maxlength' => 255)); ?>
            <div class="op_2 op_1 ctrl" style="">
                <div class="control-group ">        

                </div>
            </div>
        </div>


        <?php echo $form->dropDownListRow($model, 'state', array(1 => 'Publish', 0 => 'UnPublish')); ?>

</fieldset>
<?php $this->endWidget(); ?>
<?php
$this->widget('ext.TiiSlug.TiiSlug', array(
    'model' => $model,
    'source' => 'title',
    'target' => 'slug',
));
?>