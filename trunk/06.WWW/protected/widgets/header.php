<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Header extends MiisWidget {
    public $main_title;
    public $title;
    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $this->render('header');
    }

}

?>
