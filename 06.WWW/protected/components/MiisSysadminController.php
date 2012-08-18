<?php

abstract class MiisSysadminController extends MiisController {

    private $auth;

    public function init() {
        parent::init();
        $theme = 'sysadmin';
        Yii::app()->setTheme(file_exists(dirname(__FILE__) . '/../../themes/' . $theme) ? $theme : 'sysadmin');
    }

    public function beforeAction($action) {
        $this->auth = Yii::app()->user->id;
        if (!$this->auth) {
            if ($action->id != 'login') {
                $this->redirect('/sysadmin/login');
            }
        }
        return true;
    }

}
