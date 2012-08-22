<div class="row" id="login">
    <div class="span4">&nbsp;</div>
    <div class="span4">
        <div class="page-header">
            <h1>Login</h1>
        </div>
        <?php
        /** @var TbActiveForm $form */
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'sysLoginForm',
            'htmlOptions' => array('class' => 'well'),
                ));
        ?>
        <?php
        echo $form->textFieldRow($sysLoginForm, 'username', array('class' => 'span3'));
        echo $form->passwordFieldRow($sysLoginForm, 'password', array('class' => 'span3'));
        echo $form->checkboxRow($sysLoginForm, 'rememberMe');
        $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'icon' => 'arrow-right', 'label' => 'Đăng nhập'));
        $this->endWidget();
        ?>
    </div>
    <div class="span4">&nbsp;</div>
</div>

