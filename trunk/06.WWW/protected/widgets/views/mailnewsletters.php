<div class='row-fluid newsletter'>
    <div class='newsletter-title'>Nhận bài học mới qua email</div>
    <div class='newsletter-label'>Nhập điạ chỉ mail của bạn</div>
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'newsletters-form',
        'action' => Yii::app()->getBaseUrl(true) . '/site/newsletters.html',
        'method' => 'post',
        'enableClientValidation' => true,
        //'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>
     <?php echo $form->textField($mail, 'email', array('placeholder' => 'Nhập email', 'class' => 'span12')); ?>
    <?php echo $form->error($mail,'email'); ?>
    <button type='submit' class='btn-newsletters'>Đăng ký</button>
    <div class='count-newsletters'>116k/ listeners</div>
    <div class='help-newsletters'>
        Sau khi đăng ký, <br />
        Hãy mở email để kích hoạt
    </div>
<?php $this->endWidget(); ?>
</div>