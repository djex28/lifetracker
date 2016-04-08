<?php

class GOTO_LAST_SESSION implements Action {
    
    public function __construct() {
     
    }
    
    public function canRun($data) {
        return true;
    }
    
    public function run($data) {
        $response = new Response();
        if ($data->isLoggedIn) {
            $response->setView("CALENDER_VIEW");
        } else {
            $response->setView("LOGIN_VIEW");
        }
        $response->setSuccess(true);
        return $response;
    }
}

