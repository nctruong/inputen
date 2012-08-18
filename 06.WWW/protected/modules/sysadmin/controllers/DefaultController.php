<?php

class DefaultController extends MiisSysadminController {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionLogin() {
        $sysLoginForm = new SysLoginForm();
        if (isset($_POST['SysLoginForm'])) {
            $sysLoginForm->attributes = $_POST['SysLoginForm'];
            if ($sysLoginForm->validate() && $sysLoginForm->login()) {
                
            }
        }
        // display the login form
        $this->render('login', array('sysLoginForm' => $sysLoginForm));
    }

}