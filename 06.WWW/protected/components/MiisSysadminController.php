<?php

abstract class MiisSysadminController extends MiisController {

    private $auth;
    public $menus;

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
        // Load menus
        $this->menus = array();
        $this->menus = array(
            array('label' => 'Dashboard', 'url' => '/sysadmin.html', 'active' => $this->id == 'default' ? true : false),
            array('label' => 'Bài học', 'url' => '/sysadmin/baihoc.html', 'active' => $this->id == 'baihoc' ? true : false),
            array('label' => 'Tham khảo', 'url' => '/sysadmin/thamkhao.html', 'active' => $this->id == 'thamkhao' ? true : false),
            array('label' => 'Học qua clip', 'url' => '/sysadmin/hocquaclip.html', 'active' => $this->id == 'hocquaclip' ? true : false),
            array('label' => 'Tiếng Anh trẻ em', 'url' => '/sysadmin/tienganhtreem.html', 'active' => $this->id == 'tienganhtreem' ? true : false),
            array('label' => 'Học & chơi', 'url' => '/sysadmin/hocvachoi.html', 'active' => $this->id == 'hocvachoi' ? true : false),
            array('label' => 'Học Offline', 'url' => '/sysadmin/hocoffile.html', 'active' => $this->id == 'hocoffile' ? true : false),
            array('label' => 'Video', 'url' => '/sysadmin/video.html', 'active' => $this->id == 'video' ? true : false),
        );
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
    
    public function render($view, $data = null, $return = false) {
        if ($this->beforeRender($view)) {
            $bar = MiisToolbar::getInstance()->render();
            $output = $this->renderPartial($view, $data, true);
            if (($layoutFile = $this->getLayoutFile($this->layout)) !== false)
                $output = $this->renderFile($layoutFile, array('content' => $output, 'toolbar' => $bar), true);

            $this->afterRender($view, $output);

            $output = $this->processOutput($output);

            if ($return)
                return $output;
            else
                echo $output;
        }
    }

}

