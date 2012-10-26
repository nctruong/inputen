<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class More_listen extends MiisWidget {

    public $p_id;
    public $c_id;
    public $r_slug;
    public $own;
    public $new;

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data = array();
        $current = Content::model()->findByPk($this->p_id);
        $data['cat'] = Category::model()->findByPk($this->c_id);
        $id = Category::model()->findAll(array('condition' => 'taxonomy_id =  '.$data['cat']->taxonomy_id));
        
        $arr_id = array();
        foreach ($id as $k) {
            $arr_id[] = $k->id;
            $data['category_'][$k->id] = $k->slug;
            
        }
        $this->own = Content::model()->find(array(
            'condition' => 'id < :pid and category_id = :cid ',
            'params' => array(':pid' => $this->p_id, ':cid' => $this->c_id)
                ));
        $this->new = Content::model()->find(array(
            'condition' => 'id > :pid and category_id = :cid ',
            'params' => array(':pid' => $this->p_id, ':cid' => $this->c_id)
                ));
        
        $data['same_thread'] = Content::model()->findAll(array('condition' => 'id != :pid and category_id in ( :cid ) and state = 1',
                                                               'params' => array(':pid' => $this->p_id, ':cid' => implode(",", $arr_id)),
                                                               'limit' => 3
                                                               
                                                          ));
        if (count($this->own) == 0) {
            $this->own = $current;
        }
        if (count($this->new) == 0) {
            $this->new = $current;
        }
        $this->render('more_listen', $data);
    }
}
?>
