<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Comments extends MiisWidget {
    public $c_id;
    public $u_id;
    public function init() {
        parent::init();
        $this->u_id = $this->_session['login_id'];
        // $this->_session->destroy('isLogin');
        // $this->_session->destroy('login_id');
    }
    public function run() {
        parent::run();
        $act = '';
        if($_POST){
            $act = $_POST['act'];
        }
        $data = Yii::app()->getBasePath() . '/../data/emoticon/';
        $images = glob($data . '*.gif');
        $items = array();
        if (count($images) > 0) {
            foreach ($images as $image) {
                $image = explode('/', $image);
                $img[] = $image[count($image) - 1];
                $img2[] = str_replace(".gif", "", $image[count($image) - 1]);
            }
            $items = $img;
        }
        $stt = 1;
        if ($this->u_id) {
            $stt = count(Comment::model()->findAll(array('condition' => 'content_id = ' . $this->c_id . ' and mem_id = ' . $this->u_id)));
        }
        if ($stt == 0) {
            if ($act=='submit') {
                $model = new Comment;
                $model->attributes = $_POST['Comment'];
                $comment = htmlspecialchars($model->comment);
                if($comment != '' & strlen($comment) > 10){
                    foreach ($img2 as $k => $v) {
                        $comment = str_replace("(:" . $v . ":)", "<img src='" . Yii::app()->getBaseUrl(true) . "/data/emoticon/" . $v . ".gif'>", $comment);
                    }
                    $model->comment = $comment;
                    $returnValue = preg_replace('(:emo33:)', '<img src="emo33.gif">', '', -1, $count);
                    $model->content_id = $this->c_id;
                    $model->mem_id = $this->u_id;
                    $model->mem_username = $this->_session['login_name'];
                    $model->created_date = new CDbExpression('NOW()');
                    $model->state = 1;
                    $model->save();
                    $stt = 1;
                }else{
                    $class = 'red bold';
                }
            }
        }
        $condition = "content_id = ".$this->c_id;
        if($act == 'view'){
            $name = $_POST['filter_name'];
            $type = $_POST['filter_type'];
            $order = array();
            if($name != '')
                $condition .=" and mem_username like '%".$name."%'";
            if($type == 1)
                $order[] = "order by mem_id";
            if($type == 1)
                $order[] = "order by mem_id desc";
        }
        $comments_item = Comment::model()->findAll($condition);
        $this->render('comments', array('items' => $items, 'stt' => $stt, 'login' => $this->u_id, 'comments_item' => $comments_item,'class'=>@$class));
    }

}

?>
