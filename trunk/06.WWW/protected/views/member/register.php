<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'user-form',
        'htmlOptions' => array('class' => 'form-horizontal'),
        'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
            ));
    ?>

<div id='sub-nav' class='row-fluid'>
    <div id='title' class='span9 cufon' style='font-size:28px'>
        ĐĂNG KÝ THÀNH VIÊN
    </div>
    <div id='image-title' class='span3'>
        <img src='<?php echo Yii::app()->getBaseUrl() ?>/themes/default/assets/img/image-sub.png' />
    </div>
</div><!-- end #sub-nav -->

<div id='wrap-en' class='row-fluid register_form'>
    <div class="span9" id='wrap-body'>
        <div class='row-fluid header-at'>
            <div class="row-fluid relative"><img src="<?php echo Yii::app()->getBaseUrl() ?>/themes/default/assets/img/dangki.png" class='dangky-icon' title="Đăng ký thành viên"><h2 class='offset1'>THÔNG TIN TÀI KHOẢN</h2></div>
            <div class="row-fluid margin_topbot10">
                <b>Các mục có dấu <span class='red'>*</span> là bắt buộc phải điền</b>
            </div><!-- end content -->
        </div><!-- end header-at-->
        <div class='row-fluid'>
                <div class="control-group">
                    <label class="control-label" for="username">Họ và tên</label>
                    <div class="controls">
                        <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 128 ,'class'=>
        'span9','placeholder' =>'Họ tên')); ?>
                        <?php echo $form->error($model, 'username'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Ngày sinh</label>
                    <div class="controls">
                        <input type="text" id="" size="5" class="input-mini" name="day" placeholder="Ngày">&nbsp;<input type="text" id="" size="5" class="input-mini" name="month" placeholder="Tháng">&nbsp;<input name="year" type="text" id="" size="5" class="input-mini" placeholder="Năm">
                    </div>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value="">
                            Ẩn ngày sinh với mọi người
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="">Giới tính</label>
                    <div class="controls ">
                        <label class="radio inline">
                            <?php echo $form->radioButton($model,'gender',array('0'=>'Nam')); ?>
                        </label>
                        <label class="radio inline">
                            <?php echo $form->radioButton($model,'gender',array('1'=>'Nữ')); ?>
                        </label>
                        <label class="radio inline">
                            <?php echo $form->radioButton($model,'gender',array('2'=>'Khác')); ?>
                        </label>
                         <?php echo $form->error($model, 'gender'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="location">Quốc gia</label>
                    <div class="controls">
                        <label class="select">
                              <?php echo $form->dropDownListRow($model, 'country',array('1'=>'Việt Nam','2'=>'American'), array('prompt' => '-- Chọn --', 'class' => 'span4')); ?>
                         
                        </label>
                        <?php echo $form->error($model,'country') ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputAddress">Địa chỉ</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'address',array('class'=>'span9')) ?>
                        <?php echo $form->error($model,'address') ?>
                    </div>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value="">
                            Ẩn ngày sinh với mọi người
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputCpn">Nơi công tác / trường</label>
                    <div class="controls">
                      <?php echo $form->textField($model,'school',array('class'=>'span9')) ?>
                      <?php echo $form->error($model,'school') ?>
                    </div>
                </div>
                <div class="row-fluid margin20">
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputUser">Tên đăng nhập</label>
                    <div class="controls">
                      <?php echo $form->textField($model,'username',array('class'=>'span9')) ?>
                      <?php echo $form->error($model,'username') ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPwd">Mật khẩu</label>
                    <div class="controls">
                      <?php echo $form->passwordField($model,'password',array('class'=>'span9')) ?>
                      <?php echo $form->error($model,'password') ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputRpwd">Xác nhận mật khẩu</label>
                    <div class="controls">
                        <input type="password" class="span9" id="inputRpwd" placeholder="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Địa chỉ e-mail</label>
                    <div class="controls">
                        <?php echo $form->textField($model,'email',array('class'=>'span9')) ?>
                      <?php echo $form->error($model,'email') ?>
                    </div>
                    <div class="controls red span7 margin_topbot10">
                        Email đăng ký phải là email thật để bạn có thể có được những quyền lợi về sau như đổi nhật khẩu ...
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox"> Tôi đồng ý với <a href="#">điều khoản và quy định</a> tại TiengAnh123
                        </label>
                    </div>
                </div>
                <div class="span9 offset2">
                   <input type="submit" class="btn btn-info" value="Đăng ký" name="action">&nbsp;&nbsp;
                    <input type="submit" class="btn btn-info" value="Hủy" name="action">
                </div>
            <?php $this->endWidget() ?>
        </div>
    </div><!-- end .span-9 #wrap-body -->
    <div id='en-right' class='span3'>
        <?php $this->widget('search'); ?>
        <?php $this->widget('login'); ?>
        <?php $this->widget('support'); ?>
        <?php $this->widget('support2'); ?>
        <?php $this->widget('adv'); ?>
        <?php $this->widget('statistics'); ?>                    
    </div><!-- end #end-right -->

</div>







