<?php

class DefaultController extends SysadminMiisController {

    public function actionIndex() {
        $this->render('index');
    }

}