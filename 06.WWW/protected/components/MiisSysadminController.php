<?php

abstract class MiisSysadminController extends MiisController {

    private $auth;
    private $mainmenu = array();

    public function init() {
        parent::init();
        // Load MIIS Bootstrap.
        $miisBootstrap = Yii::createComponent(array('class' => 'application.components.MiisBootstrap'));
        Yii::app()->setComponent('bootstrap', $miisBootstrap);
        Yii::app()->setAliases(array('bootstrap' => 'ext.bootstrap'));

        // Load theme default for sysadmin.
        $theme = 'sysadmin';
        Yii::app()->setTheme(file_exists(dirname(__FILE__) . '/../../themes/' . $theme) ? $theme : 'sysadmin');
    }

    public function beforeAction($action) {
        $this->auth = Yii::app()->user->id;
        if ($action->id != 'login') {
            if (!$this->auth) { // Check if has yet login.
                $this->redirect('/sysadmin/login.html');
            }
        } elseif ($this->auth && $action->id == 'login') {
            $this->redirect('/sysadmin.html');
        }
        return true;
    }

    /**
     * $desc Login sysadmin 
     */
    public function actionLogin() {
        $this->setLayout('login');
        $this->setPageTitle('Login');
        $sysLoginForm = new SysLoginForm();
        if (isset($_POST['SysLoginForm'])) { // Submit login form.
            $sysLoginForm->attributes = $_POST['SysLoginForm'];
            if ($sysLoginForm->validate() && $sysLoginForm->login()) {
                $this->redirect('/sysadmin.html');
            }
        }
        // display the login form
        $this->render('login', array('sysLoginForm' => $sysLoginForm));
    }

    /**
     * @desc logout sysadmin 
     */
    public function actionLogout() {
        // Logout the current user
        Yii::app()->user->logout();
        $this->redirect('/sysadmin.html');
    }

}
