<?php

class SiteController extends MiisController {
    public $title;
    function init(){
           //
    }
    public function actionIndex() {
        $this->title = 'Trang chủ TiengAnh123';
        $lich_hoc = Content::model()->findAll("category_id = 47 and state = 1");
        $this->render('index',array('lich_hoc'=>$lich_hoc));
    }
    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}
