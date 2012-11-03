<?php

class CollectController extends MiisController {
    public $title;
    public $root_id;
    public $root_slug;
    public $sroot;
    function init(){
        $this->root_id = 10;
        $this->root_slug = 'tieng-anh-pho-thong';
        $this->sroot = Taxonomy::model()->findByPk($this->root_id);
        $this->title = $this->sroot->name;
    }
    public function actionViewcate(){
        $idparent = Yii::app()->request->getparam('sid');
        $id = Yii::app()->request->getparam('tid');
        $root = Category::model()->findByPk($id);
        if(Category::model()->findByPk($id)->parent != $idparent){
            throw new CHttpException(404,'PAGE NOT FOUND.');
        }
        if($root->taxonomy_id != $this->root_id){
             throw new CHttpException(404,'PAGE NOT FOUND.');
        }
        $this->title = $root->title;
        $parent = Category::model()->findByPk($idparent);
        $items = Content::model()->findAll(array("condition"=>"state = 1 and category_id = ".$id));
        $listcat = Category::model()->findAll(array("condition"=>"state = 1 and taxonomy_id = ".$root->taxonomy_id));
        $this->render("viewcate",array('root'=>$root,'items' => $items,'listcat'=>$listcat,'sroot'=>$this->sroot,'parent'=>$parent));
    }
    public function actionIndex() {
        
               
        $criteria=new CDbCriteria;
        $criteria->addCondition(array('taxonomy_id =  :cid', 'state = :stt','parent = 0'));    
        $criteria->params = array(':cid' => $this->root_id,':stt' => 1);
        $data =  Category::model()->findAll($criteria);
        $total = count($data);
        
        $this->render('index',array('category' => $data,'total'=>$total,'sroot'=>$this->sroot));                       
    }
    public function actionViewlist($id=''){
        $root = Category::model()->findByPk($id);
        if($root->taxonomy_id != $this->root_id){
             throw new CHttpException(404,'PAGE NOT FOUND.');
        }
        $this->title = $root->title;
        $items = Category::model()->findAll(array("condition"=>"state = 1 and taxonomy_id = ".$root->taxonomy_id." and parent = ".$id));
        $this->render("viewlist",array('root'=>$root,'items' => $items,'sroot'=>$this->sroot));
    }
    public function actionView() {
        
        $pid = Yii::app()->request->getParam('pid');
        $cid = Yii::app()->request->getParam('cid');
        $id = Yii::app()->request->getParam('id');
        $category = Category::model()->findByPk($pid);
        
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
