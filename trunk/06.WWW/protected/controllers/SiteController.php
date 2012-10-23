<?php

class SiteController extends MiisController {

    public function actionIndex() {
        $this->render('index');
    }
    
    public function ActionBaihoc() {
        var_dump('tesss');exit;
        $this->render('baihoc');
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
