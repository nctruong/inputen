<div id="wrapper" class="login">		
    <div id="right">
        <div id="main">
            <div class="section">
                <div class="box">
                    <div class="title">
                        <h2>Sysadmin Cpanel</h2>
                        <div class="hide"></div>
                    </div>
                    <div class="content nopadding">
                        <div class="tabs">
                            <div class="tabmenu">
                                <ul> 
                                    <li><a href="#tabs-1">Login</a></li> 
                                    <!--                                    <li><a href="#tabs-2">Password forgotten?</a></li> -->
                                </ul>
                            </div>
                            <div class="tab nopadding" id="tabs-1">
                                <?php
                                $form = $this->beginWidget('CActiveForm', array(
                                    'id' => 'sysLoginForm',
                                    'focus' => array($sysLoginForm, 'username'),
                                    'enableAjaxValidation' => true,
                                    'errorMessageCssClass' => 'alertBox-alert',
                                        )
                                );
                                ?>
<!--                                <div class="content">
                                    <?php //echo $form->error($sysLoginForm, 'username', array('class' => 'system info')); ?>
                                </div>-->
                                <div class="row">
                                    <?php echo $form->label($sysLoginForm, 'Username'); ?>
                                    <div class="rowright"><?php echo $form->textField($sysLoginForm, 'username'); ?></div>
                                </div>
                                <div class="row">
                                    <?php echo $form->label($sysLoginForm, 'Password'); ?>
                                    <div class="rowright"><?php echo $form->passwordField($sysLoginForm, 'password'); ?></div>
                                </div>
                                <div class="row">
                                    <label>
                                        <div class="custom-checkbox">
                                            <?php echo $form->checkBox($sysLoginForm, 'rememberMe', array('id' => 'remember')) ?>
                                            <?php echo $form->label($sysLoginForm, 'Remember me?'); ?>
                                        </div>
                                    </label>
                                    <div class="rowright button">
                                        <?php //echo CHtml::submitButton('Login', array('type' => 'submit', 'class' => 'medium grey')); ?>
                                        <button type="submit" class="medium grey"><span>Login</span></button>
                                    </div>
                                </div>
                                <?php $this->endWidget(); ?>
                            </div>

                            <!--                            <div class="tab nopadding" id="tabs-2">
                                                            <form action="">
                                                                <div class="row">
                                                                    <label>Username *</label>
                                                                    <div class="rowright"><input type="text" value="" /></div>
                                                                </div>
                                                                <div class="row">
                                                                    <label>Email Address *</label>
                                                                    <div class="rowright"><input type="text" value="" /></div>
                                                                </div>
                                                                <div class="row">
                                                                    <label>
                                                                        * Required field
                                                                    </label>
                                                                    <div class="rowright button">
                                                                        <button type="submit" class="medium grey"><span>Sumbit</span></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>-->
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>