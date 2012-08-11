<?php

abstract class SysadminMiisController extends MiisController {

    public function beforeAction($action) {
        $theme = 'sysadmin';
        Yii::app()->setTheme(file_exists(dirname(__FILE__) . '/../../themes/' . $theme) ? $theme : 'sysadmin');
        return true;
    }

}
