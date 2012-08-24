<?php

class BaiHocController extends MiisSysadminController {

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
     * Lists all models.
     */
    public function actionIndex() {
        $this->addToolbar();
        $dataProvider = new CActiveDataProvider('BaiHoc');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $this->addToolbar();
        $model = new BaiHoc;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['BaiHoc'])) {
            $model->attributes = $_POST['BaiHoc'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $this->addToolbar();
        $model = new BaiHoc;
        $this->render('create', array(
            'model' => $model,
        ));
    }

    protected function addToolbar() {
        switch ($this->action->id) {
            case 'create':
                MiisToolbarHelper::title('Thêm bài học');
                MiisToolbarHelper::save();
                MiisToolbarHelper::cancel();
                break;
            case 'update':
                MiisToolbarHelper::title('Chỉnh sửa bài học');
                MiisToolbarHelper::save();
                MiisToolbarHelper::cancel();
                break;
            default:
                MiisToolbarHelper::title('Bài Học');
                MiisToolbarHelper::Create();
                MiisToolbarHelper::UpdateList();
                MiisToolbarHelper::deleteList();
                break;
        }
    }

}