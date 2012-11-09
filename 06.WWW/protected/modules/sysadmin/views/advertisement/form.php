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
    <div class="control-group">
        <label class="control-label">Image</label>
        <div class="controls">
            <?php
            $this->widget('ext.elFinder.ServerFileInput', array(
                'model' => $model,
                'attribute' => 'image',
                'connectorRoute' => 'sysadmin/elfinder/connector',
                    )
            );
            ?>
        </div>
    </div>

    <?php echo $form->textFieldRow($model, 'link', array('class' => 'span5', 'maxlength' => 255)); ?>
    <?php echo $form->textFieldRow($model, 'order', array('class' => 'span1')); ?>

    <div class="control-group ">
        <label for="Contents_dob" class="control-label">Date Create </label>
        <div class="controls">
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'Advertisement[date_create]',
                'value'=>$model->date_create,
                 'model' => $model,
                // additional javascript options for the date picker plugin
                'options' => array(
                    'mode'=>'focus',
                    'dateFormat'=>'dd/mm/yy',
                    'showAnim' => 'slideDown',
                ),
                'htmlOptions' => array(
                    'style' => 'height:20px;',
                    'value'=>date("d F, Y"),
                )       ,
            ));
            ?>
        </div>
    </div>





    <div class="control-group ">
        <label for="Contents_dob" class="control-label">Date End </label>
        <div class="controls">
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'Advertisement[date_end]',
                 'model' => $model,
                'value'=>$model->date_end,
                // additional javascript options for the date picker plugin
                'options' => array(
                    'mode'=>'focus',
                    'dateFormat'=>'dd/mm/yy',
                    'showAnim' => 'slideDown',
                ),
                'htmlOptions' => array(
                    'style' => 'height:20px;',
                    
                ),
            ));
            ?>
        </div>
    </div>


    <?php echo $form->dropDownListRow($model, 'state', array(1 => 'Publish', 0 => 'UnPublish')); ?>

</fieldset>
<?php $this->endWidget(); ?>
