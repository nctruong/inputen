<?php

class MemberController extends MiisController {

    public $title;

    function init() {
        $this->title = "Thành viên";
    }

    public function actionIndex() {

        $model = Member::model();

        $this->render('index', array('model' => $model));
    }

    public function actionRegister() {

        $model = new Member;
        if (isset($_POST['Member'])) {

//            echo '<pre>';
//            print_r($_POST);
//            die();
            $model->attributes = $_POST['Member'];
            $model->fullname = 'Trần Tuấn'; //tao test ti tu them vao form...
//            echo '<pre>';
//            print_r($model->attributes);
//            die();
//            die('m bug tu tu thi no ra chu co cai khi kho^ gi');
            if ($model->save()) {
                die('save thanh cong');
                $this->redirect(array('index'));
            }
            die('m bug tu tu thi no ra chu co cai khi kho^ gi');
        }

        $this->render('register', array('model' => $model));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /*
     * function user login
     */

    public function actionLogin() {

        $iUser_login = new UserLoginForm;

        if (isset($_POST['UserLoginForm'])) {
            $iUser_login->attributes = $_POST['UserLoginForm'];
            if ($iUser_login->validate() && $iUser_login->login()) {
                $this->redirect(Yii::app()->getBaseUrl(true));
            } else {
                //display error
                Yii::app()->user->setFlash('error', 'Sai username hoặc password.');
            }
        }

        $this->redirect(Yii::app()->getBaseUrl(true));
    }

    public function actionLogout() {
        if (isset($this->_session['isLogin'])) {
            $this->_session->destroy('isLogin');
            $this->_session->destroy('login_id');
        }
    }

}
