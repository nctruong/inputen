<?php

/*
 * The form search quickly
 */

class Newsletter_exam extends MiisWidget{
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        parent::run();
        
        $mail = new FrmNewslettters;
        
        $this->render('newsletter_exam');
        
    }
    
}

?>
