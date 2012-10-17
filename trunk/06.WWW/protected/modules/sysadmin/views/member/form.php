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

    <?php echo $form->textFieldRow($model, 'username', array('class' => 'span5', 'maxlength' => 100)); ?>

    <?php echo $form->passwordFieldRow($model, 'password', array('class' => 'span5', 'maxlength' => 32)); ?>

    <?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 50)); ?>

    <?php echo $form->textFieldRow($model, 'fullname', array('class' => 'span5', 'maxlength' => 150)); ?>

    <div class="control-group ">
        <label for="Contents_dob" class="control-label">Dob </label>
        <div class="controls">
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'dob',
                // additional javascript options for the date picker plugin
                'options' => array(
                    'showAnim' => 'fold',
                ),
                'htmlOptions' => array(
                    'style' => 'height:20px;'
                ),
            ));
            ?>
        </div>
    </div>


    <?php echo $form->dropDownListRow($model, 'gender', array(1 => 'Male', 0 => 'Female')); ?>

    <?php echo $form->textFieldRow($model, 'address', array('class' => 'span5', 'maxlength' => 255)); ?>

    <?php echo $form->textFieldRow($model, 'school', array('class' => 'span5', 'maxlength' => 250)); ?>
    
    <?php echo $form->dropDownListRow($model, 'country', array(1 => 'Vĩnh Long', 0=>"Hồ Chí Minh")); ?>


</fieldset>
<?php $this->endWidget(); ?>
