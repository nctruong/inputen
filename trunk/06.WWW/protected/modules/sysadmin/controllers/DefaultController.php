<?php

class DefaultController extends MiisSysadminController {

    public function actionIndex() {
        $this->setPageTitle('Dashboard');
        $this->addToolbar();
        $this->render('index');
    }

    protected function addToolbar() {
        MiisToolbarHelper::title('Bài Học');
        MiisToolbarHelper::addNew();
        MiisToolbarHelper::editList();
        MiisToolbarHelper::deleteList();
    }

}