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
    }
    public function run() {
        parent::run();
        
        if(isset($_POST['cmt_ajax'])){
            $this->u_id = Yii::app()->session['login_id'];
            $model = new Comment;
            $model->attributes = $_POST['Comment'];
            $model->content_id = $this->c_id;
            $model->mem_id = $this->u_id;
            $model->save();            
        }
        $data = Yii::app()->getBasePath().'/../data/emoticon/';
                $images = glob($data.'*.gif');
                $items = array();
                if(count($images) > 0 ){
                    foreach($images as $image){
                        $image = explode('/', $image);
                        $img[] = $image[count($image) - 1];
                    }
                    $items[] = $img;
                }
                
                
        $this->render('comments',array('items'=>$items,'login' => Yii::app()->session['isLogin']));
    }

}

?>
