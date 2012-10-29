<?php

class MiisUserIdentity extends CUserIdentity {

    private $_id;
        
    public $_session;
    
    public function authenticate() {
        
        $user = Member::model()->findByAttributes(array('username' => $this->username));
        
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($user->password !== md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            //set session
            $this->_session = new CHttpSession;
            $this->_session->open();
            $this->_session['isLogin'] = true;
            $this->_session['login_id'] = $user->id;       
            $this->_session['login_name'] = $user->username;       
            
                    
            $this->_id = $user->id;
            //$this->setState('lastLoginTime', $user->last_login);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
		return true;
    }
    public function getId() {
        return $this->_id;
    }

}

