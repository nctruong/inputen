<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Top_member extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data['mem_nhiettinh'] = Member::model()->findAll(array("limit"=>6,"order"=>"point desc"));        
        $data['mem_chuyencan'] = Member::model()->findAll(array("limit"=>6,"order"=>"diligent_point desc"));        
        $data['mem_thanhtich'] = Member::model()->findAll(array("limit"=>6,"order"=>"mark desc"));  
        $this->render('top_member',$data);
    }

}

?>
