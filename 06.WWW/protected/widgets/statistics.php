<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Statistics extends MiisWidget {

    public function init() {
        parent::init();
    }
    public function run() {
        parent::run();
        $data['user']['total'] = Member::model()->count();
        $data['user']['new'] = Member::model()->find(array("order"=>"id desc"));
        
        
                
        $this->render('statistics',$data);
    }

}

?>
