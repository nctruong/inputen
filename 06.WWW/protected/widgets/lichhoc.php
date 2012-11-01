<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Lichhoc extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $lich_hoc = Content::model()->findAll("category_id = 47 and state = 1");
        $this->render('lichhoc',array('lich_hoc'=>$lich_hoc));
    }

}

?>
