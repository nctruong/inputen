<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class News_lession_comment extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data = array();
        $id_listen_cat = Category::model()->findAll("taxonomy_id = ".$this->_id_bai_hoc." and state = 1");
        $id_listen_cat_array = array();
        foreach($id_listen_cat as $k){
            $id_listen_cat_array[] = $k->id;
        }
        $id_news_cat = Category::model()->findAll("taxonomy_id = ".$this->_id__tintuc." and state = 1");
        $id_news_cat_array = array();
        foreach($id_news_cat as $k){
            $id_news_cat_array[] = $k->id;
        }
        $comment = Comment::model()->findAll(array("condition" => "state = 1","limit" => 5,"order" => "id desc"));
        $options = array();
        $i=0;
        foreach($comment as $k){
            $options[$i]['content'] = Content::model()->findByPk($k->content_id);
            $options[$i]['category'] = Category::model()->findByPk($options[$i]['content']->category_id);
            $options[$i]['parent'] = '';
            if($options[$i]['category']->parent != 0){
               $options[$i]['parent'] = Category::model()->findByPk($options[$i]['category']->parent);               
            }
            
            $options[$i]['taxonomy'] = Taxonomy::model()->findByPk($options[$i]['category']->taxonomy_id);
            $i++;
        }
        
        $data['comments'] = $comment;
        $data['options'] = $options;
        $data['news'] = Content::model()->findAll(array("condition"=> "state = 1 and category_id in (".implode(",",$id_news_cat_array).")","limit" => 10,"order" => "id desc"));
        $data['listen'] = Content::model()->findAll(array("condition"=> "state = 1 and category_id in (".implode(",",$id_listen_cat_array).")","limit" => 10,"order" => "id desc"));
        $this->render('news_lession_comment',$data);
    }

}

?>
