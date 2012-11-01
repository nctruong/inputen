<?php

/**
 * SysLoginForm class.
 * SysLoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'DefaultController'.
 */
Yii::import('application.components.MiisUserIdentity');

class FrmNewslettters extends CFormModel {

    public $email;
  


    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('email', 'required'),
            array('email', 'email'),
            // rememberMe needs to be a boolean
          
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'email' => 'Email',
        );
    }

}
