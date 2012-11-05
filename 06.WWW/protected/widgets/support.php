<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Support extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data['data'] = Supports::model()->findAll(array("condition"=>"state = 1","order"=>"'order' desc"));
        $this->render('support',$data);
    }

}

?>
