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
        
        $this->render('top_member');
    }

}

?>
