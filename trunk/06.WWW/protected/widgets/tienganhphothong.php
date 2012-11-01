<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Tienganhphothong extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $data = Category::model()->findAll("taxonomy_id = 10");
        $this->render('tienganhphothong',array("data" => $data));
    }

}

?>
