<?php

/*
 * The home menu bar
 */

class Home_menu_bar extends CWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();

        $criteria = new CDbCriteria();
        $criteria->order='t.order ASC';

        $menu = Menu::model()->findAll($criteria);
        
        

        $this->render('home_menu_bar');
    }

}
?>
