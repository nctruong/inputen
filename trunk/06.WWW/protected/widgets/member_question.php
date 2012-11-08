<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Member_question extends MiisWidget {

    public function init() {
        parent::init();
    }

    public function run() {
        parent::run();
            if(isset($_POST['submit_reply'])){
                $id = $_POST['hid'];
                $model = new Mquestion;
                $model->content = Yii::app()->request->getPost('content_reply',true);
                $model->parent = $_POST['hid'];
                $model->user_id = $this->_session['login_id'];
                $model->state = 0;
                if(Libraries::get_vip($model->user_id)!=0){
                    $model->state = 1;
                }
                $model->date_create = new CDbExpression('NOW()');
                $model->save();
            }        
        $data['question'] = Mquestion::model()->findAll(array("condition"=>"state = 1 and parent = 0 ","order" => "date_create desc","limit"=>1));
        $data['u_log'] = $this->_session['login_id'];
        $this->render('member_question',$data);
    }
    public function actionAjaxComplete() {
          if(isset($_POST['submit_reply']) & isset($_POST['type']) ){
              var_dump($_POST);
              die();
          }
       
    }

}

?>
