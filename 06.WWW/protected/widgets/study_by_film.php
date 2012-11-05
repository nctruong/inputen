<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Study_by_film extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data['trailer'] = Content::model()->findAll(array("condition"=>"category_id = 30 and state = 1","order"=>"id desc","limit"=>5));
        $data['count_tl'] = Content::model()->count(array("condition"=>"category_id = 30 and state = 1","order"=>"id desc"));        
        $data['voa'] = Content::model()->findAll(array("condition"=>"category_id = 27 and state = 1","order"=>"id desc","limit"=>5));
        $data['count_voa'] = Content::model()->count(array("condition"=>"category_id = 27 and state = 1","order"=>"id desc"));
        $this->render('study_by_film',$data);
    }

}

?>
