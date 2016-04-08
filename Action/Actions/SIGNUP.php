<?php

class SIGNUP implements Action {
    
    public $users;
    public $user_id;
    
    public function __construct() {
        $this->users = new DBTable('user');
    }
    
    public function canRun($data) {
        /*if (isset($_SESSION['isLoggedIn'])) {
            return !$_SESSION['isLoggedIn'];
        } else {
            return true;
        }*/
        return true;
    }
    
    public function run($data) {
        $response = new Response();
        
        $response->setView("SIGNUP_VIEW");
        $response->setSuccess(true);

        return $response;
    }
    
}

