<?php

class MiisUserIdentity extends CUserIdentity {

    private $_id;

    public function authenticate() {
        $user = User::model()->findByAttributes(array('username' => $this->username));
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($user->password !== md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $user->id;
            $this->setState('lastLoginTime', $user->last_login);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}

