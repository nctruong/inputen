<?php

class DefaultController extends CController {

    public function actionIndex() {
        echo "<pre>";
        var_dump('members-index');
        echo "</pre>";
        exit;
        $this->render('index');
    }

}