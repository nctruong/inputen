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
                $this->redirect(Yii::app()->getBaseUrl(true).'/sysadmin/login.html');
            }
        } elseif ($this->auth && $action->id == 'login') {
            $this->redirect(Yii::app()->getBaseUrl(true).'/sysadmin.html');
        }
        // Load menus
        $this->menus = array();
        $this->menus = array(
            // Dashboard
            array('label' => 'Dashboard', 'icon' => 'icon-home icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin.html', 'active' => $this->id == 'default' ? true : false),
            // Categories
            array('label' => 'Categories', 'icon' => 'icon-tag icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/category.html', 'active' => $this->id == 'category' || $this->id == 'taxonomy' ? true : false,
                'items' => array(
                    array('label' => 'Create Category', 'url' => Yii::app()->baseUrl . '/sysadmin/category/create.html', 'active' => $this->id == 'category' && $this->action->id == 'create' ? true : false),
                    array('label' => 'Manage Categories', 'url' => Yii::app()->baseUrl . '/sysadmin/category.html', 'active' => $this->id == 'category' && $this->action->id == 'index' ? true : false),
                    array('label' => 'Create Taxonomy', 'url' => Yii::app()->baseUrl . '/sysadmin/taxonomy/create.html', 'active' => $this->id == 'taxonomy' && $this->action->id == 'create' ? true : false),
                    array('label' => 'Mangage Taxonomy', 'url' => Yii::app()->baseUrl . '/sysadmin/taxonomy.html', 'active' => $this->id == 'taxonomy' && $this->action->id == 'index' ? true : false),
                )
            ), // Contents
              array('label' => 'Options', 'icon' => 'icon-book icon-white', 'url' => 'javascript:void(0)', 'active' => ($this->id == 'support' | $this->id == 'danhngon')  ? true : false,
               'items' => array(
                    array('label' => 'Support', 'url' => Yii::app()->baseUrl . '/sysadmin/supports.html', 'active' => $this->id == 'support' ? true : false),
                    array('label' => 'Danh ngôn', 'url' => Yii::app()->baseUrl . '/sysadmin/danhngon.html', 'active' => $this->id == 'danhngon' ? true : false),
                    array('label' => 'Danh hiệu', 'url' => Yii::app()->baseUrl . '/sysadmin/danhhieu.html', 'active' => $this->id == 'danhhieu' ? true : false),
                    array('label' => 'Banner - Logo', 'url' => Yii::app()->baseUrl . '/sysadmin/logo.html', 'active' => $this->id == 'logo' ? true : false),
                    //array('label' => 'Create HocQuaClip', 'url' => Yii::app()->baseUrl . '/sysadmin/hocquaclip/create.html', 'active' => $this->id == 'create' ? true : false),
                    //array('label' => 'Mangage HocQuaClip', 'url' => Yii::app()->baseUrl . '/sysadmin/hocquaclip.html', 'active' => $this->id == 'hocquaclip' ? true : false),
                )
            ), // Pages
            
            
            array('label' => 'Contents', 'icon' => 'icon-book icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/content.html', 'active' => $this->id == 'content' ? true : false,
//                'items' => array(
//                    array('label' => 'Create BaiHoc', 'url' => Yii::app()->baseUrl . '/sysadmin/baihoc/create.html', 'active' => $this->id == 'create' ? true : false),
//                    array('label' => 'Manage BaiHoc', 'url' => Yii::app()->baseUrl . '/sysadmin/baihoc.html', 'active' => $this->id == 'baihoc' ? true : false),
//                    array('label' => 'Create HocQuaClip', 'url' => Yii::app()->baseUrl . '/sysadmin/hocquaclip/create.html', 'active' => $this->id == 'create' ? true : false),
//                    array('label' => 'Mangage HocQuaClip', 'url' => Yii::app()->baseUrl . '/sysadmin/hocquaclip.html', 'active' => $this->id == 'hocquaclip' ? true : false),
//                )
            ), // Pages
            array('label' => 'Pages', 'icon' => 'icon-file icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/page.html', 'active' => $this->id == 'page' || $this->id == 'menu' || $this->id == 'widget' ? true : false,
                'items' => array(
                    array('label' => 'Create Menu', 'url' => Yii::app()->baseUrl . '/sysadmin/menu/create.html', 'active' => $this->id == 'create' ? true : false),
                    array('label' => 'Manage Menus', 'url' => Yii::app()->baseUrl . '/sysadmin/menu.html', 'active' => $this->id == 'menu' ? true : false),
                    array('label' => 'Create Widget', 'url' => Yii::app()->baseUrl . '/sysadmin/widget/create.html', 'active' => $this->id == 'create' ? true : false),
                    array('label' => 'Mangage Widgets', 'url' => Yii::app()->baseUrl . '/sysadmin/widget.html', 'active' => $this->id == 'widget' ? true : false),
                    array('label' => 'Create Page', 'url' => Yii::app()->baseUrl . '/sysadmin/page/create.html', 'active' => $this->id == 'create' ? true : false),
                    array('label' => 'Mangage Pages', 'url' => Yii::app()->baseUrl . '/sysadmin/page.html', 'active' => $this->id == 'page' ? true : false),
                )
            ), // Resources
            array('label' => 'Resources', 'icon' => 'icon-inbox icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/resource.html', 'active' => $this->id == 'resource' ? true : false,
                'items' => array(
                    //array('label' => 'Create Resource', 'url' => Yii::app()->baseUrl . '/sysadmin/.html', 'active' => $this->id == 'create' ? true : false),
                    array('label' => 'Manage Resources', 'url' => Yii::app()->baseUrl . '/sysadmin/resources.html', 'active' => $this->id == 'resource' ? true : false),
                )
            ), // Comments
            array('label' => 'Comments', 'icon' => 'icon-comment icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/mquestion.html', 'active' => $this->id == 'comments' ? true : false,
                'items' => array(
                    array('label' => 'Manage Resources', 'url' => Yii::app()->baseUrl . '/sysadmin/mquestion.html', 'active' => $this->id == 'memberquestion' ? true : false),
                )
            ), // Users
            array('label' => 'Members', 'icon' => 'icon-user icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/users.html', 'active' => $this->id == 'users' ? true : false,
                'items' => array(
                    array('label' => 'Create Member', 'url' => Yii::app()->baseUrl . '/sysadmin/member/create.html', 'active' => $this->id == 'member' && $this->action->id == 'create' ? true : false),
                    array('label' => 'Mangage Members', 'url' => Yii::app()->baseUrl . '/sysadmin/member.html', 'active' => $this->id == 'member' && $this->action->id == 'index' ? true : false),
                    array('label' => 'Mangage Newsletters', 'url' => Yii::app()->baseUrl . '/sysadmin/newsletters.html', 'active' => $this->id == 'newsletters' && $this->action->id == 'index' ? true : false),
                )
            ), // Settings
            array('label' => 'Settings', 'icon' => 'icon-wrench icon-white', 'url' => Yii::app()->baseUrl . '/sysadmin/setting.html', 'active' => $this->id == 'setting' ? true : false)
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
                $this->redirect(Yii::app()->getBaseUrl(true).'/sysadmin.html');
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
        $this->redirect(Yii::app()->getBaseUrl(true).'/sysadmin.html');
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

