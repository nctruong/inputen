<?php

class MenuController extends MiisSysadminController
{

	/**
	 * @return array action filters
	 */
	public function filters() {
            return array(
                'accessControl', // perform access control for CRUD operations
                'postOnly + delete', // we only allow deletion via POST request
            );
        }

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
                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                    'actions' => array('create', 'update', 'delete'),
                    'users' => array('@'),
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
            $model = new Menu('search');
            $model->unsetAttributes();  // clear any default values
            if (isset($_GET['Menu']))
                $model->attributes = $_GET['Menu'];
            $this->render('index', array(
                'model' => $model,
            ));
        }
        
        /**
        * Creates a new model.
        * If creation is successful, the browser will be redirected to the 'view' page.
        */
        public function actionCreate() {
            $this->addToolbar();
            $model = new Menu();

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['Menu'])) {
                $model->attributes = $_POST['Menu'];
                if ($model->save())
                    $this->redirect(array('index'));
            }

            $this->render('form', array(
                'model' => $model,
            ));
        }
        
        public function actionUpdate($id) {
            $this->addToolbar();
            $model = $this->loadModel($id);
            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['Menu'])) {
                $model->attributes = $_POST['Menu'];
                if ($model->save())
                    $this->redirect(array('index'));
            }

            $this->render('form', array(
                'model' => $model,
            ));
        }
        
        public function actionDelete() {
            $cids = $this->getParam('cid', 0);
            if (count($cids) > 0) {
                foreach ($cids as $cid) {
                    Menu::model()->findByPk($cid)->delete();
                }
            }
            $this->redirect(array('index'));
        }
        
        
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Menu::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='menu-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        protected function addToolbar() {
            switch ($this->action->id) {
                case 'create':
                    MiisToolbarHelper::title('Thêm mới');
                    MiisToolbarHelper::save();
                    MiisToolbarHelper::cancel();
                    break;
                case 'update':
                    MiisToolbarHelper::title('Chỉnh sữa');
                    MiisToolbarHelper::save();
                    MiisToolbarHelper::cancel();
                    break;
                default:
                    MiisToolbarHelper::title('Danh Sách');
                    MiisToolbarHelper::Create();
                    MiisToolbarHelper::UpdateList();
                    MiisToolbarHelper::deleteList();
                    break;
            }
        }
}
