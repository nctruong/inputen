<div class="row-fluid margin_topbot10"> 
    <div class="top_login">
        <img style="float: left"  src="<?php echo Yii::app()->theme->GetBaseUrl() ?>/assets/img/people.png" alt="">
        <a href="#">Thành viên</a><br/>
       <?php if(count($user) == 0 ) {?> <a href="<?php echo Yii::app()->getBaseUrl(true) ?>/thanh-vien/dang-ky.html">Đăng ký thành viên</a> <?php } else { echo '<p>&nbsp</p>'; }?>
    </div><!--end .top_login-->
    <div class="body_login">
        <?php if (count($user) > 0) { ?>
            <div class="row-fluid align_center">Thành viên <?php
        if ($user->premium == 1) {
            echo "<b class='red'>VIP</b>";
        }
        ?>  </div>
            <div class="row-fluid align_center"><?php $avt = ($user->avatar == '') ? 'no-avt.png' : $user->avatar ?><img src="<?php echo Yii::app()->getBaseUrl(true) ?>/data/avatar/<?php echo $avt ?>"></div>
            <div class="row-fluid align_center"><b><?php echo $user->username ?></b></div>
            <div class="row-fluid align_center"><a href="<?php echo Yii::app()->getBaseUrl(true)?>/thanh-vien/<?php echo $user->id?>">Vào trang cá nhân</a>&nbsp;|&nbsp;<a href="<?php echo Yii::app()->getBaseUrl(true) ?>/member/logout.html">Thoát</div>    
            <div class="row-fluid margin20"></div>
        <?php } else { ?>
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
            <?php echo $form->textFieldRow($iUser, 'username', array('placeholder' => 'Tên đăng nhập', 'class' => 'span12')); ?>
            <?php echo $form->passwordFieldRow($iUser, 'password', array('placeholder' => '**********', 'class' => 'span12')); ?>

            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Đăng nhập', 'htmlOptions' => array('class' => 'btn btn-primary btn-small'))); ?>
            <div class="checkbox"> <?php echo $form->checkboxRow($iUser, 'rememberMe'); ?> <br/> <a href="#">Quên mật khẩu?</a>
            </div>
            <?php $this->endWidget(); ?>
            <?php
            $this->widget('bootstrap.widgets.TbAlert', array(
                'block' => true, // display a larger alert block?
                'fade' => true, // use transitions?
                'closeText' => '&times;', // close link text - if set to false, no close link is displayed
                'alerts' => array(// configurations per alert type
                    'error' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
                ),
            ));
        }
        ?>
    </div><!--end .body_login-->
</div><!--end.row-fluid-->