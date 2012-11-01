<?php

/*
 * The form search quickly
 */

class Mailnewsletters extends MiisWidget{
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        parent::run();
        
        $mail = new FrmNewslettters;
        
        $this->render('mailnewsletters', array('mail' => $mail));
        
    }
    
}

?>
