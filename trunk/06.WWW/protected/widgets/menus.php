<?php
class Menus extends MiisWidget {
     public function init() {
        parent::init();
     }
     public function run() {
        parent::run();
        
        $criteria = new CDbCriteria();
        $criteria->order='t.id ASC';
        
        $menus = Taxonomy::model()->findAll($criteria);
        $this->render('menu', array('menus' => $menus, 'total' => count($menus)));
     }
}