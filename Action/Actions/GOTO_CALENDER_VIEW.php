<?php

class GOTO_CALENDER_VIEW implements Action {
    
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
        
        //updates session to show in calenderview
        return true;
    }
    
}

