<?php

class SiteController extends MiisController {
    public $title;
    function init(){
           //
    }
    public function actionIndex() {
        $this->title = 'Trang chủ TiengAnh123';
        $lich_hoc = Content::model()->findAll("category_id = 47 and state = 1");
        $this->render('index',array('lich_hoc'=>$lich_hoc));
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
    
   public function actionNewsletters() {

        if (isset($_POST['FrmNewslettters'])) {

            $newsletter = new Newsletters;
            $newsletter->attributes = $_POST['FrmNewslettters'];
            if ($newsletter->validate()) {
                $newsletter->save();
                Yii::app()->user->setFlash('success', '<strong>Tin nhắn!</strong> Đăng ký nhận tin thành công');
                $this->redirect(Yii::app()->getBaseUrl(true));
            } else {
                Yii::app()->user->setFlash('error', '<strong>Tin nhắn!</strong> Địa chỉ mail này đã được đăng kí nhận tin nhắn');
                $this->redirect(Yii::app()->getBaseUrl(true));
            }
        }
    }

}
