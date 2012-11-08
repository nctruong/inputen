<?php

class DanhngonController extends MiisSysadminController {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */

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
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
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
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
       public function actionCreate() {
        $this->addToolbar();
        $model = new Danhngon;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Danhngon'])) {
            
            $model->attributes = $_POST['Danhngon'];
            Libraries::check($model->attributes);
            $model->created_date = new CDbExpression('NOW()');
            $model->title = ($model->title);
            //$model->validate();
            //Libraries::check($model->getErrors());
            $model->audio = str_replace("/06.WWW/","",$model->audio);
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('form', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
  public function actionUpdate($id) {
        $this->addToolbar();
        $model = $this->loadModel($id);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Danhngon'])) {
            $model->attributes = $_POST['Danhngon'];
            $model->title = htmlspecialchars($model->title);
            
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('form', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete() {
        $cids = $this->getParam('cid', 0);
        if (count($cids) > 0) {
            foreach ($cids as $cid) {
                Danhngon::model()->findByPk($cid)->delete();
            }
        }
        $this->redirect(array('index'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $this->addToolbar();
        $model = new Danhngon('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Danhngon']))
            $model->attributes = $_GET['Danhngon'];
        $this->render('index', array(
            'model' => $model,
        ));
    }
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Danhngon::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'danhngon-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    
    
    /**
     * toolbar
     */
    
    
    
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
