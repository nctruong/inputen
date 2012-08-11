<?php

class CategoryController extends MiisController {

    public function actionIndex() {
        echo "<pre>";
        var_dump('sysadmin-index');
        echo "</pre>";
        exit;
        $this->render('index');
    }

}