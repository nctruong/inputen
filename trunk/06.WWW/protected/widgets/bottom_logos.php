<?php

/*
 * The home menu bar
 */

class Bottom_logos extends CWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();

        $criteria = new CDbCriteria();
        $criteria->order='t.order ASC';

        $menu = Menu::model()->findAll($criteria);
        $data['adv'] = Advertisement::model()->findAll("state = 1");
        $this->render('bottom_logos',$data);
    }

}
?>
