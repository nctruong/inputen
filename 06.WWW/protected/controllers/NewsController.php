<?php

class NewsController extends MiisController {
    public $title;
    function init(){
           
    }
    public function actionIndex() { 
        $this->title = 'Tin tức';  
        $data =  Category::model()->findAll('taxonomy_id=1');
        $this->render('index',array('category' => $data));        
    }
    public function actionViewlist($id=''){
        $root = Category::model()->findByPk($id);
        $this->title = $root->title;
        $items = Content::model()->findAll(array("condition"=>"state = 1 and category_id = ".$id));
        $listcat = Category::model()->findAll(array("condition"=>"state = 1 and taxonomy_id = ".$root->taxonomy_id));
        $this->render("viewlist",array('root'=>$root,'items' => $items,'listcat'=>$listcat));
    }
    public function actionView($id='') {
        $data = array();
        $data['item'] = Content::model()->findbyPk($id);
        $this->title = $data['item']->title;
        $this->render('view',$data);                               
    }
 
     /*
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
