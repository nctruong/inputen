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
        /*
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
         * 
         */
        $this->menus = array(
            // Dashboard
            array('label' => 'Dashboard', 'icon' => 'icon-home icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin.html', 'active' => $this->id == 'default' ? true : false),
            // Categories
            array('label' => 'Categories', 'icon' => 'icon-tag icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/categories.html', 'active' => $this->id == 'categories' || $this->id == 'taxonomy' ? true : false,
                'items' => array(
                    array('label' => 'Create Category', 'url' => Yii::app()->baseUrl . '/sysadmin/categories/create.html', 'active' => $this->id == 'categories' && $this->action->id == 'create' ? true : false),
                    array('label' => 'Manage Categories', 'url' => Yii::app()->baseUrl . '/sysadmin/categories.html', 'active' => $this->id == 'categories' && $this->action->id == 'index' ? true : false),
                    array('label' => 'Create Taxonomy', 'url' => Yii::app()->baseUrl . '/sysadmin/taxonomy/create.html', 'active' => $this->id == 'taxonomy' && $this->action->id == 'create' ? true : false),
                    array('label' => 'Mangage Taxonomy', 'url' => Yii::app()->baseUrl . '/sysadmin/taxonomy.html', 'active' => $this->id == 'taxonomy' && $this->action->id == 'index' ? true : false),
                )
            ), // Contents
            array('label' => 'Contents', 'icon' => 'icon-book icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/contents.html', 'active' => $this->id == 'contents' ? true : false,
//                'items' => array(
//                    array('label' => 'Create BaiHoc', 'url' => Yii::app()->baseUrl . '/sysadmin/baihoc/create.html', 'active' => $this->id == 'create' ? true : false),
//                    array('label' => 'Manage BaiHoc', 'url' => Yii::app()->baseUrl . '/sysadmin/baihoc.html', 'active' => $this->id == 'baihoc' ? true : false),
//                    array('label' => 'Create HocQuaClip', 'url' => Yii::app()->baseUrl . '/sysadmin/hocquaclip/create.html', 'active' => $this->id == 'create' ? true : false),
//                    array('label' => 'Mangage HocQuaClip', 'url' => Yii::app()->baseUrl . '/sysadmin/hocquaclip.html', 'active' => $this->id == 'hocquaclip' ? true : false),
//                )
            ), // Pages
            array('label' => 'Pages', 'icon' => 'icon-file icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/pages.html', 'active' => $this->id == 'pages' || $this->id == 'menus' || $this->id == 'widgets' ? true : false,
                'items' => array(
                    array('label' => 'Create Menu', 'url' => Yii::app()->baseUrl . '/sysadmin/menus/create.html', 'active' => $this->id == 'create' ? true : false),
                    array('label' => 'Manage Menus', 'url' => Yii::app()->baseUrl . '/sysadmin/menus.html', 'active' => $this->id == 'menus' ? true : false),
                    array('label' => 'Create Widget', 'url' => Yii::app()->baseUrl . '/sysadmin/widgets/create.html', 'active' => $this->id == 'create' ? true : false),
                    array('label' => 'Mangage Widgets', 'url' => Yii::app()->baseUrl . '/sysadmin/widgets.html', 'active' => $this->id == 'widgets' ? true : false),
                    array('label' => 'Create Page', 'url' => Yii::app()->baseUrl . '/sysadmin/pages/create.html', 'active' => $this->id == 'create' ? true : false),
                    array('label' => 'Mangage Pages', 'url' => Yii::app()->baseUrl . '/sysadmin/pages.html', 'active' => $this->id == 'pages' ? true : false),
                )
            ), // Resources
            array('label' => 'Resources', 'icon' => 'icon-inbox icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/resources.html', 'active' => $this->id == 'resources' ? true : false,
                'items' => array(
                    array('label' => 'Create Resource', 'url' => Yii::app()->baseUrl . '/sysadmin.html', 'active' => $this->id == 'create' ? true : false),
                    array('label' => 'Manage Resources', 'url' => Yii::app()->baseUrl . '/sysadmin.html', 'active' => $this->id == 'resources' ? true : false),
                )
            ), // Comments
            array('label' => 'Comments', 'icon' => 'icon-comment icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin.html', 'active' => $this->id == 'comments' ? true : false,
                'items' => array(
                    array('label' => 'Manage Resources', 'url' => Yii::app()->baseUrl . '/sysadmin.html', 'active' => $this->id == 'comments' ? true : false),
                )
            ), // Users
            array('label' => 'Users', 'icon' => 'icon-user icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/users.html', 'active' => $this->id == 'users' ? true : false,
                'items' => array(
                    array('label' => 'Create User', 'url' => Yii::app()->baseUrl . '/sysadmin/users/create.html', 'active' => $this->id == 'users' && $this->action->id == 'create' ? true : false),
                    array('label' => 'Mangage Users', 'url' => Yii::app()->baseUrl . '/sysadmin/users.html', 'active' => $this->id == 'users' && $this->action->id == 'index' ? true : false),
                )
            ), // Settings
            array('label' => 'Settings', 'icon' => 'icon-wrench icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/settings.html', 'active' => $this->id == 'settings' ? true : false)
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

