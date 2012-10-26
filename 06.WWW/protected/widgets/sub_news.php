<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Sub_news extends MiisWidget {
    public $cat_id;
    public $type = 'news';
    public $slug;
    
    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data =  Content::model()->findAll('category_id=:cid', array(':cid' => $this->cat_id));   
        $root = Category::model()->findByPk($this->cat_id);
        if($this->type == 'news'){
            $this->render('sub_news',array('data'=>$data));
        }
        if($this->type == 'listen'){
            $this->render('sub_listen',array('data'=>$data,'root'=>$root));
        }
        
    }

}

?>
