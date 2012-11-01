<?php

abstract class MiisWidget extends CWidget {
    public $_session;
    public $_id__tintuc = 1;
    public $_id_bai_hoc =2;
    public $_id_tham_khao =3;
    public $_id_clip = 4;
    public $_id_tre_em = 5;
    public $_id_hoc_choi = 6;
    public $_id_test = 7;
    public $_id_offline = 7;
    public $_id_video = 8;
    public $_id_pho_thong = 10;
    public function init() {
        parent::init();
        $this->_session=new CHttpSession;
        $this->_session->open();
    }

    public function run() {
        parent::run();
    }

}
