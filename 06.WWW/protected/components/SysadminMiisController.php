<?php

abstract class SysadminMiisController extends MiisController {
    private $auth;
    public function init() {
        parent::init();
        $theme = 'sysadmin';
        Yii::app()->setTheme(file_exists(dirname(__FILE__) . '/../../themes/' . $theme) ? $theme : 'sysadmin');
    }

    public function beforeAction($action) {
        
        return true;
    }

}
