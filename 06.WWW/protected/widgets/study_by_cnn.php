<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Study_by_cnn extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data['cnn'] = Content::model()->findAll(array("condition"=>"category_id = 31 and state = 1","order"=>"id desc","limit"=>6));
        $data['count'] = Content::model()->count(array("condition"=>"category_id = 31 and state = 1","order"=>"id desc"));
        $this->render('study_by_cnn',$data);
        
    }

}

?>
