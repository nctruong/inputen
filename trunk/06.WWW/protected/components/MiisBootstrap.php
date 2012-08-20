<?php

Yii::import('ext.bootstrap.components.Bootstrap');

class MiisBootstrap extends Bootstrap {

    /**
     * Override init method.
     */
    public function init() {
        $this->_assetsUrl = '/themes/sysadmin/assets';
        $this->registerCoreCss();
        $this->registerResponsiveCss();
        $this->registerCoreScripts();
        //parent::init();
    }

    public function run() {
        parent::run();
    }

}
