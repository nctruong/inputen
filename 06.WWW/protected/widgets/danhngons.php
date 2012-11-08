<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Danhngons extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
        $cs = Yii::app()->getClientScript();
        $cs->registerScript('Audio','$(".vlum").click(function(e){playAudio($(this),$(this).attr("alt"));})',CClientScript::POS_END);
        $data['danhngon'] = Danhngon::model()->findAll(array("condition" => "state = 1", "order" => "created_date desc", "limit" => 10));
        $this->render('danhngon', $data);
    }

}

?>
