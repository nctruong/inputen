<?php

class SiteController extends MiisController {
    public $title;
    function init(){
           //
    }
    public function actionIndex() {
        $this->title = 'Trang chủ TiengAnh123';
        $this->render('index');
    }
    public function ActionTintuc() {
        $this->title = 'Tin tức';        
        $this->render('news');
    }
//    public function ActionBaihoc() {                
//        $this->title = 'Bài học';        
//        $this->render('baihoc');
//    }
    public function ActionHocquaclip() {                
        $this->title = 'Học qua clip';        
        $this->render('video');
    }
    public function ActionHocvachoi() {                
        $this->title = 'Học và chơi';        
        $this->render('study');
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
