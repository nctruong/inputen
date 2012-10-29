<?php

class ListenController extends MiisController {
    public $title;
    public $root_id;
    function init(){
        $this->root_id = 2;
    }
    public function actionIndex() {
        $this->title = 'Bài học';        
        $criteria=new CDbCriteria;
        $criteria->addCondition(array('taxonomy_id =  :cid', 'state = :stt'));    
        $criteria->params = array(':cid' => 2,':stt' => 1);
        $data =  Category::model()->findAll($criteria);
        $total = 0;
        foreach($data as $k=>$v){
            if(Libraries::isEnable($v->id))
                   $total++;
        }
        $this->render('index',array('category' => $data,'total'=>$total));                       
    }
    public function actionViewlist($id=''){
        $root = Category::model()->findByPk($id);
        if($root->taxonomy_id != $this->root_id){
             throw new CHttpException(404,'PAGE NOT FOUND.');
        }
        $this->title = $root->title;
        $items = Content::model()->findAll(array("condition"=>"state = 1 and category_id = ".$id));
        $listcat = Category::model()->findAll(array("condition"=>"state = 1 and taxonomy_id = ".$root->taxonomy_id));
        $this->render("viewlist",array('root'=>$root,'items' => $items,'listcat'=>$listcat));
    }
    public function actionView($id='') {
          $cid = Yii::app()->request->getParam('tid');
        $category = Category::model()->findByPk($cid);
        if($category->taxonomy_id == $this->root_id){
            $data = array();            
            $data['item'] = Content::model()->findbyPk($id);
            if($data['item']->category_id == $cid){
                $data['cat'] = Category::model()->findbyPk($data['item']->category_id);
                $data['root_cat'] = Taxonomy::model()->findbyPk($data['cat']->taxonomy_id);
                $this->title = $data['item']->title;
                Content::model()->updateByPk($id,array('view'=>($data['item']->view + 1)));
                $data['comment_model'] = Comment::model()->findAll(array('condition'=> 'content_id = :cid and state = 1','params'=>array(':cid' => $id)));        
                if($data['item']->category_id != $cid){
                    throw new CHttpException(404,'PAGE NOT FOUND.');
                }
                $this->render('view',$data);            
            }else{
                throw new CHttpException(404,'PAGE NOT FOUND.');
            }
        }else{
         throw new CHttpException(404,'PAGE NOT FOUND.');
        }                            
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
