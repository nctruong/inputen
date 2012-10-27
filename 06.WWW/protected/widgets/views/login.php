<div class="row-fluid margin_topbot10"> 
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'verticalForm',
        'action' => Yii::app()->getBaseUrl(true) . "/thanh-vien/dang-nhap.html",
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>

    <div class="top_login">
        <img style="float: left"  src="<?php echo Yii::app()->theme->GetBaseUrl() ?>/assets/img/people.png" alt="">
        <a href="#">Thành viên</a><br/>
        <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/thanh-vien/dang-ky.html">Đăng ký thành viên</a>
    </div><!--end .top_login-->
    <div class="body_login">
        <?php echo $form->textFieldRow($iUser, 'username', array('placeholder' => 'Tên đăng nhập', 'class' => 'span12')); ?>
        <?php echo $form->passwordFieldRow($iUser, 'password', array('placeholder' => '**********', 'class' => 'span12')); ?>

        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Đăng nhập', 'htmlOptions' => array('class' => 'btn btn-primary btn-small'))); ?>
        <div class="checkbox"> <?php echo $form->checkboxRow($iUser, 'rememberMe'); ?> <br/> <a href="#">Quên mật khẩu?</a>
        </div>
        <?php
        $this->widget('bootstrap.widgets.TbAlert', array(
            'block' => true, // display a larger alert block?
            'fade' => true, // use transitions?
            'closeText' => '&times;', // close link text - if set to false, no close link is displayed
            'alerts' => array(// configurations per alert type
                'error' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
            ),
        ));
        ?>
    </div><!--end .body_login-->
    <?php $this->endWidget(); ?>
</div><!--end.row-fluid-->