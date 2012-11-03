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
    <?php echo $form->textFieldRow($model, 'image', array('class' => 'span5', 'maxlength' => 255)); ?>
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
    
    <?php echo $form->textAreaRow($model, 'desc', array('rows' => 3, 'class' => 'span5')); ?>
    <div class="control-group">
        <label class="control-label"> Chọn trang </label>
        <div class='controls'>
            <select onchange="$('.ctrl').slideUp();$('div.op_'+$(this).val()).slideDown()" name="sl">
                <option value='0'>Chọn trang</option>
                <option value='1'>Tất cả</option>
                <option value='2'>Rút gọn</option>
            </select>
        </div>
        <Br>
        <div class="confirm" style="">
            <div class="op_1 ctrl" style="display:none">
                <div class="control-group ">        
                    <label for="Contents_content" class="control-label required">Video</label>
                    <div class="controls">
                        <?php
                        $this->widget('ext.tinymce.TinyMce', array(
                            'model' => $model,
                            'attribute' => 'video',
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

                <div class="control-group ">        


                    <label for="Contents_content" class="control-label required">Translate</label>
                    <div class="controls">
                        <?php
                        $this->widget('ext.tinymce.TinyMce', array(
                            'model' => $model,
                            'attribute' => 'translate',
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
            </div>
            <div class="op_2 op_1 ctrl" style="display:none">
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
            </div>
        </div>


        <?php echo $form->dropDownListRow($model, 'category_id', CHtml::listData(Category::model()->findAll(), 'id', 'title'), array('prompt' => '-- Chọn --', 'class' => 'span4')); ?>
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
