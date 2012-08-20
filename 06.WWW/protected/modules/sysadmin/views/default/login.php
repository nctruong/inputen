<div class="container" style="margin-top:100px;">
    <div class="row-fluid">
        <div class="span4">&nbsp;</div>
        <div class="span4">
            <?php
            /** @var TbActiveForm $form */
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'sysLoginForm',
                'htmlOptions' => array('class' => 'well well-large'),
                    ));
            ?>
            <h1>Login</h1>
            <?php
            echo $form->textFieldRow($sysLoginForm, 'username', array('class' => 'span10'));
            echo $form->passwordFieldRow($sysLoginForm, 'password', array('class' => 'span10'));
            echo $form->checkboxRow($sysLoginForm, 'rememberMe');
            $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'icon' => 'ok', 'label' => 'Submit'));
            $this->endWidget();
            ?>
        </div>
        <div class="span4">&nbsp;</div>
    </div>

</div>

