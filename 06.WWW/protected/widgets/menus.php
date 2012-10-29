<?php
class Menus extends MiisWidget {
     public function init() {
        parent::init();
     }
     public function run() {
        parent::run();
        $model = Taxonomy::model();
        $this->render('menu');
     }
}