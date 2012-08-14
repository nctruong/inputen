<?php

abstract class MiisController extends CController {

    public $layout = '//layouts/main';

    public function beforeAction($action) {
        $theme = 'default';
        Yii::app()->setTheme(file_exists(dirname(__FILE__) . '/../../themes/' . $theme) ? $theme : 'default');
        return true;
    }

    /**
     * @desc set layout for a view
     * @param layout name
     */
    protected function setLayout($layout = "") {
        if ($layout != "") {
            $layout = '//layouts/' . $layout;
            $this->layout = $layout;
        }
    }

    /**
     * @desc get param 
     * @param type $name
     * @param type $default
     * @return type 
     */
    protected function getParam($name, $default = '') {
        return Yii::app()->request->getParam($name, $default);
    }

}
