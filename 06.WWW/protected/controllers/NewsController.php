<?php

class NewsController extends MiisController {

    public function actionIndex() {
        $category = $this->getParam('category','');
        var_dump($category);exit;
        $this->render('index');
    }
    
    public function actionList() {
        $category = $this->getParam('category','');
        echo Yii::app()->getBasePath();
        var_dump($category);exit;
        $this->render('index');
        
               
    }
    
    public function actionDetail() {
        $category = $this->getParam('category','');
        $id = $this->getParam('id','');
        var_dump($category);
        var_dump($id);
        exit;
        $this->render('index');
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
