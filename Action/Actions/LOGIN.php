<?php

class LOGIN implements Action {
    
    public $users;
    public $user_id;
    
    public function __construct() {
        $this->users = new DBTable('user');
    }
    
    public function canRun($data) {
        if (isset($_SESSION['isLoggedIn'])) {
            return !$_SESSION['isLoggedIn'];
        } else {
            return true;
        }
    }
    
    public function run($data) {
        $response = new Response();
        
        $username = $data->username;
        $password = $data->password;
        foreach ($this->users->data as $u) {
            if ($u['username'] === $username) {
                if ($u['password'] === $password) {
                    $_SESSION['isLoggedIn'] = true;
                    $_SESSION['userId'] = $u['id'];
                    $response->setSuccess(true);
                    $response->setView("CALENDER_VIEW");
                    return $response;
                }
            }  
        }
        
        //could not find a match for your credentials
        $response->setSuccess(false);
        $response->setView("LOGIN_VIEW");
        $response->setError("Your credentials are incorrect. Please try again.");
        return $response;

    }
    
}

