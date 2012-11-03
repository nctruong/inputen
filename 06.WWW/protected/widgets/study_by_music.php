<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Study_by_music extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data['new_music'] = Content::model()->findAll(array("condition"=>"category_id = 33 and state = 1","limit"=>20,"order"=>"id desc"));
        $data['hot_music'] = Content::model()->findAll(array("condition"=>"category_id = 33 and state = 1","limit"=>20,"order"=>"view desc"));
        $this->render('study_by_music',$data);
    }

}

?>
