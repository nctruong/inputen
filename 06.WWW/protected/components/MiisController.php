<?php

abstract class MiisController extends CController {

    public $layout = '//layouts/main';

    public $_session;
    public $_id__tintuc = 1;
    public $_id_bai_hoc =2;
    public $_id_tham_khao =3;
    public $_id_clip = 4;
    public $_id_tre_em = 5;
    public $_id_hoc_choi = 6;
    public $_id_test = 7;
    public $_id_offline = 7;
    public $_id_video = 8;
    public $_id_pho_thong = 10;
    public function beforeAction($action) {
        
        // create a sessio object
        $this->_session = new CHttpSession;
        $this->_session->open();
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
    
    protected function isAuth() {
        
    }
    
}
