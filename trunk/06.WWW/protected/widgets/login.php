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
        
        $user_login = new UserLoginForm;
        
        $this->render('login',array('iUser' => $user_login));
    }

}

?>
