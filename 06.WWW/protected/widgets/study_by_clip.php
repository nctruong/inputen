<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Study_by_clip extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data['count_gt'] = Content::model()->count(array("condition"=>"category_id = 28 and state = 1","order"=>"id desc"));
        $data['giaotiep'] = Content::model()->findAll(array("condition"=>"category_id = 28 and state = 1","order"=>"id desc","limit"=>6));
        $data['count_nt'] = Content::model()->count(array("condition"=>"category_id = 29 and state = 1","order"=>"id desc"));
        $data['noitieng'] = Content::model()->findAll(array("condition"=>"category_id = 29 and state = 1","order"=>"id desc","limit"=>6));
        $data['count_ytb'] = Content::model()->count(array("condition"=>"category_id = 25 and state = 1","order"=>"id desc"));
        $data['youtube'] = Content::model()->findAll(array("condition"=>"category_id = 25 and state = 1","order"=>"id desc","limit"=>6));
        $this->render('study_by_clip',$data);
    }

}

?>
