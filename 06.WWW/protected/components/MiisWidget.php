<?php

abstract class MiisWidget extends CWidget {
    public $_session;
    public function init() {
        parent::init();
        $this->_session=new CHttpSession;
        $this->_session->open();
    }

    public function run() {
        parent::run();
    }

}
