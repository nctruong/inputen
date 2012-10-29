<?php

class ResourcesController extends MiisSysadminController
{

	
	/**
        * Specifies the access control rules.
        * This method is used by the 'accessControl' filter.
        * @return array access control rules
        */
        public function accessRules() {
            return array(
                array('allow', // allow all users to perform 'index' actions
                    'actions' => array('index'),
                    'users' => array('*'),
                ),
                array('allow', // allow admin user to perform 'admin' and 'delete' actions
                    'actions' => array('admin', 'delete'),
                    'users' => array('admin'),
                ),
                array('deny', // deny all users
                    'users' => array('*'),
                ),
            );
        }
        
        /**
        * Lists all models.
        */
        public function actionIndex() {
            $this->addToolbar();
            $this->render('resources');
        }
        
        protected function addToolbar() {
            switch ($this->action->id) {
                default:
                    MiisToolbarHelper::title('Quản lý resource');
                    break;
            }
        }
       
}
