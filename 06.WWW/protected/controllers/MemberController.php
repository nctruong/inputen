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
    public function actionDetail(){
        $id = Yii::app()->request->getParam("id");
        echo $id;
    }
    public function actionAjaxquestion(){
        $array['status'] = 0;
        if(isset($_POST['submit_reply'])){
            $id = $_POST['hid'];
                $model = new Mquestion;
                $model->content = Libraries::dataCleasing($_POST['content_reply']);
                $model->parent = $_POST['hid'];
                $model->user_id = $this->_session['login_id'];
                $model->state = Libraries::get_vip($model->user_id);
                $model->date_create = new CDbExpression('NOW()');
                if($model->save()){
                    $user = Member::model()->findByPk($model->user_id);
                    $array['status'] = 1;
                    $array['content'] = '<li><span class="name"><a href="'.Yii::app()->getBaseUrl(true).'/thanh-vien/'.$model->user_id.'.html">'.$user->username.'</a>';
                    if($user->premium==1){
                        $array['content'].="<img src='".Yii::app()->getBaseUrl(true)."/themes/default/assets/img/vip_i.gif'>";
                    }
                     $array['vip'] = $user->premium;
                     $array['content'].='</span><p>'.$model->content.'</p></li>';
                }
        }
        echo json_encode($array);
    }
    public function actionRegister() {
        $model = new Member;
        if (isset($_POST['Member'])) {
            $model->attributes = $_POST['Member'];
            if ($model->validate()) {
                $model->repass = md5($model->repass);
                $model->password = md5($model->password);
                if ($model->save()) {
                    $this->redirect(array(Yii::app()->getBaseUrl()));
                }
            }
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
                $id = $this->_session['login_id'];
                $user = Member::model()->findByPk($id);                
                $cur = $user->diligent_point;
                if(gmdate ('M j, Y') != $user->date_login){
                if((time() - $user->last_login) <= (60*60*24)){                    
                    Member::model()->updateByPk($id,array("diligent_point"=>$cur + 1));
                }else{
                    if($cur == 0){
                        $cur = 2;
                    }
                    $day = round((time() - $user->last_login)/(3600*24));
                    Member::model()->updateByPk($id,array("diligent_point"=>($cur - (2*$day) < 0) ? 0 :  $cur - ((2*$day)) ));
                }
                Member::model()->updateByPk($id,array("last_login"=>time(),"date_login"=> gmdate ('M j, Y') ));
                $this->redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
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
        $this->redirect($_SERVER['HTTP_REFERER']);
        
    }

}
