<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Danhngons extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data['danhngon'] = Danhngon::model()->findAll(array("condition"=>"state = 1","order"=>"created_date desc","limit"=>10));
        $this->render('danhngon',$data);
    }

}

?>
