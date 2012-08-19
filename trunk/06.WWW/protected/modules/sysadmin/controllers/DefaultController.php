<?php

class DefaultController extends MiisSysadminController {

    public function actionIndex() {
        $this->setPageTitle('Dashboard');
        $this->render('index');
    }

}