<?php

class LOGOUT implements Action {
    
    public function __construct() {

    }
    
    public function canRun($data) {
        if (isset($_SESSION['isLoggedIn'])) {
            return $_SESSION['isLoggedIn'];
        } else {
            return false;
        }
    }
    
    public function run($data) {
        $response = new Response();
        
        session_unset(); //maybe need to check if logged in before displaying any pages - should happen in canRun!
        session_destroy();
        
        session_start();
        
        $response->setSuccess(true);
        $response->setView("LOGIN_VIEW");
        return $response;
    }
    
}

