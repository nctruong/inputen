<?php

class MiisSysUserIdentity extends CUserIdentity {

    private $_id;
    private $_sysuser;

    public function authenticate() {
        $sysuser = User::model()->findByAttributes(array('username' => $this->username));
        if ($sysuser === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($sysuser->password !== md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $sysuser->id;
            $this->_sysuser = $sysuser;
            //$this->setState('last_login', $sysuser->last_login);
            $this->setState('info', $this->_sysuser);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

    public function getInfo() {
        return $this->_sysuser;
    }

}

