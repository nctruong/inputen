<?php

class OfflineController extends MiisController {
    public $title;
    function init(){
    }
    public function actionIndex() {
        $this->title = 'Học offline';        
        $criteria=new CDbCriteria;
        $criteria->addCondition(array('taxonomy_id =  :cid', 'state = :stt'));    
        $criteria->params = array(':cid' => 8,':stt' => 1);
        $data =  Category::model()->findAll($criteria);
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
        $data['cat'] = Category::model()->findbyPk($data['item']->category_id);
        $data['root_cat'] = Taxonomy::model()->findbyPk($data['cat']->taxonomy_id);
        $this->title = $data['item']->title;
        Content::model()->updateByPk($id,array('view'=>($data['item']->view + 1)));
        $data['comment_model'] = Comment::model()->findAll(array('condition'=> 'content_id = :cid and state = 1','params'=>array(':cid' => $id)));        
        $this->render('view',$data);                               
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
