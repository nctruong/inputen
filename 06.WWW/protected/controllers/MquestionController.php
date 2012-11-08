<?php

class MquestionController extends MiisController {
    

    public $title;
    public $root_id;

    function init() {
        $this->root_id = 7;
    }

    public function actionProcessQuestion() {
        //Libraries::check($_POST);
        //die();
        $offset = $_POST['offset'];
        $limit = 10;
        $data['question'] = Mquestion::model()->findAll(array("condition"=>"state = 1 and parent = 0","offset"=>$offset,"limit"=>$limit));
        $this->renderPartial("get_question",$data);
        
    }

    public function actionViewlist($id = '') {
        $root = Category::model()->findByPk($id);
        if ($root->taxonomy_id != $this->root_id) {
            throw new CHttpException(404, 'PAGE NOT FOUND.');
        }
        $this->title = $root->title;
        $items = Content::model()->findAll(array("condition" => "state = 1 and category_id = " . $id));
        $listcat = Category::model()->findAll(array("condition" => "state = 1 and taxonomy_id = " . $root->taxonomy_id));
        $this->render("viewlist", array('root' => $root, 'items' => $items, 'listcat' => $listcat));
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
                if ($data['item']->category_id != $cid) {
                    throw new CHttpException(404, 'PAGE NOT FOUND.');
                }
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
