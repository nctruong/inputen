<?php

class CategoryController extends MiisSysadminController {

    public function actionIndex() {
        echo "<pre>";
        var_dump('sysadmin-index');
        echo "</pre>";
        exit;
        $this->render('index');
    }

}