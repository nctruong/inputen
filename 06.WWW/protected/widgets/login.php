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
        $user = array();
        if($this->_session['isLogin']==1 & $this->_session['login_id'] > 0){
            $user = Member::model()->findByPk($this->_session['login_id']);
            
        }
        //$this->_session['login_id']
        $user_login = new UserLoginForm;
        $this->render('login',array('iUser' => $user_login,'user' => $user));
    }

}

?>
