<?php

class LernController extends MiisController {

    public $title;
    public $root_id;
    public $sroot;

    function init() {
        $this->root_id = 6;
        $this->sroot = Taxonomy::model()->findByPk($this->root_id);
    }

    public function actionIndex() {
        $this->title = 'Học và chơi';
        $criteria = new CDbCriteria;
        $criteria->addCondition(array('taxonomy_id =  :cid and parent = 0', 'state = :stt'));
        $criteria->params = array(':cid' => 6, ':stt' => 1);
        $data = Category::model()->findAll($criteria);
        $total = 0;
//        foreach ($data as $k => $v) {
//            if (Libraries::isEnable($v->id))
//                $total++;
//        }

        $this->render('index', array('category' => $data, 'total' => $total));
    }

    public function actionViewlist($id = '', $cate = '') {
        $data['root'] = Category::model()->findByPk($id);
        $this->title = $data['root']->title;
        if ($id == 34) {
            $cs = Yii::app()->getClientScript();
            $cs->registerScript('Audio', '$(".vlum").click(function(e){playAudio($(this),$(this).attr("alt"));})', CClientScript::POS_END);
            $data['danhngon'] = Danhngon::model()->findAll(array("condition" => "state = 1", "order" => "created_date desc", "limit" => 30));
            $this->render("viewlist2", $data);
        } else {
            if ($data['root']->taxonomy_id != $this->root_id) {
                throw new CHttpException(404, 'PAGE NOT FOUND.');
            }
            $data['is_cate'] = 0;
            $data['items'] = Content::model()->findAll(array("condition" => "state = 1 and category_id = " . $id));
            $data['listcat'] = Category::model()->findAll(array("condition" => "state = 1 and taxonomy_id = " . $data['root']->taxonomy_id));
            if (count($data['items']) == 0) {
                $data['items'] = Category::model()->findAll(array("condition" => "state = 1 and parent = " . $id));
                $data['is_cate'] = 1;
            }
            $data['cate'] = null;
            if ($cate != '') {
                $data['cate'] = Category::model()->findByPk($cate);
            }
            $this->render("viewlist", $data);
        }
    }

    public function actionView($id = '') {
        $cid = Yii::app()->request->getParam('tid');
        $category = Category::model()->findByPk($cid);
        if ($category->taxonomy_id == $this->root_id) {
            $data = array();
            $data['item'] = Content::model()->findbyPk($id);
            if ($data['item']->category_id == $cid) {
                $data['cat'] = Category::model()->findbyPk($data['item']->category_id);
                $data['root_cat'] = Taxonomy::model()->findbyPk($data['cat']->taxonomy_id);
                $this->title = $data['item']->title;
                Content::model()->updateByPk($id, array('view' => ($data['item']->view + 1)));
                $data['comment_model'] = Comment::model()->findAll(array('condition' => 'content_id = :cid and state = 1', 'params' => array(':cid' => $id)));
                $this->render('view', $data);
            } else {
                $check_cate = Category::model()->findByPk($id);
                if ($check_cate->parent == $cid & $check_cate->taxonomy->id == $this->root_id) {
                    $this->actionViewlist($id, $cid);
                }else{
                    throw new CHttpException(404, 'PAGE NOT FOUND.');
                }
            }
        } else {
            throw new CHttpException(404, 'PAGE NOT FOUND.');
        }
    }
   public function actionView2($id = '') {
        $cid = Yii::app()->request->getParam('tid');
        $cid2 = Yii::app()->request->getParam('tid2');
        $category = Category::model()->findByPk($cid);
        $category2 = Category::model()->findByPk($cid2);
        if ($category->taxonomy_id == $this->root_id & $category2->taxonomy_id == $this->root_id) {
            $data = array();
            $data['item'] = Content::model()->findbyPk($id);
            if ($data['item']->category_id == $cid2) {
                $data['cat'] = Category::model()->findbyPk($data['item']->category_id);
                $data['root_cat'] = Taxonomy::model()->findbyPk($data['cat']->taxonomy_id);
                $this->title = $data['item']->title;
                Content::model()->updateByPk($id, array('view' => ($data['item']->view + 1)));
                $data['comment_model'] = Comment::model()->findAll(array('condition' => 'content_id = :cid and state = 1', 'params' => array(':cid' => $id)));
                $this->render('view', $data);
            } else {
                throw new CHttpException(404, 'PAGE NOT FOUND.');
            }
        } else {
            throw new CHttpException(404, 'PAGE NOT FOUND.');
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
