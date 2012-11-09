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
        $data =  Content::model()->findAll(array('condition'=>'state = 1 and category_id = '.$this->cat_id,'limit'=>4,'order'=>'created_date desc'));   
        $root = Category::model()->findByPk($this->cat_id);
        if($this->type == 'news'){
            $this->render('sub/news',array('data'=>$data,'root'=>$root));
        }
        if($this->type == 'collect'){            
            $category = Category::model()->findAll("parent = ".$this->cat_id);            
            $this->render('sub/collect',array('data'=>$data,'root'=>$root,"category"=>$category));
        }
        if($this->type == 'listen'){
            $this->render('sub/listen',array('data'=>$data,'root'=>$root));
        }
        if($this->type == 'play'){
            $cate = Category::model()->findAll(array("condition"=>"state = 1 and parent = ".$this->cat_id,'limit'=>4,'order'=>'"order" desc'));
            $this->render('sub/learn',array('data'=>$data,'root'=>$root,'cate'=>$cate));
        }
        
    }

}

?>
