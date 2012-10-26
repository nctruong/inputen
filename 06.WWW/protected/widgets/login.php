<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        
        if (@$_POST['username']) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $identity = new UserIdentity($username, $password);
            $identity->authenticate();            
            switch ($identity->errorCode) {
                case UserIdentity::ERROR_NONE:
                    Yii::app()->user->login($identity);
                    break;
            }
        }
        $this->render('login');
    }

}

?>
