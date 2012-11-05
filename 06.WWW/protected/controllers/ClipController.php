<?php

class ClipController extends MiisController {
    public $title;
     public $root_id;
    function init(){
        $this->root_id = 4;
    }
    public function actionIndex() {
        $this->title = 'Học qua clip';        
        $criteria=new CDbCriteria;
        $criteria->addCondition(array('taxonomy_id =  :cid', 'state = :stt'));    
        $criteria->params = array(':cid' => 4,':stt' => 1);
        $data =  Category::model()->findAll($criteria);
        $total = 0;
        foreach($data as $k=>$v){
            if(Libraries::isEnable($v->id))
                   $total++;
        }
        $this->render('index',array('category' => $data,'total'=>$total));                       
    }
    public function actionViewlist($id=''){
        sleep(3);
        $root = Category::model()->findByPk($id);
        if($root->taxonomy_id != $this->root_id){
             throw new CHttpException(404,'PAGE NOT FOUND.');
        }
        $this->title = $root->title;
        $items = Content::model()->findAll(array("condition"=>"state = 1 and category_id = ".$id));
        $listcat = Category::model()->findAll(array("condition"=>"state = 1 and taxonomy_id = ".$root->taxonomy_id));
        $this->render("viewlist",array('root'=>$root,'items' => $items,'listcat'=>$listcat));
    }
    public function Actionajax(){
        $slug = Yii::app()->request->getParam('slug',false);
        $cat_id = Yii::app()->request->getParam('id_cat',false);    
        $page = Yii::app()->request->getParam('page',1);        
        $type = Yii::app()->request->getParam('type',false);        
        switch($type){
            case 'five':
                $data['data'] = Content::model()->findAll(array("condition"=>"state = 1 and category_id = ".$cat_id,"order"=>"id desc","limit"=>5,"offset"=>(($page-1)*5)));
                break;
            default:
                $data['data'] = Content::model()->findAll(array("condition"=>"state = 1 and category_id = ".$cat_id,"order"=>"id desc","limit"=>6,"offset"=>(($page-1)*6)));
                break;
        }
               $this->renderPartial("clip_1",$data);
        
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
