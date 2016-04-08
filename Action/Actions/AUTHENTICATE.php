<?php

class AUTHENTICATE implements Action {
    
    public $users;
    public $user_id;
    
    public function __construct() {
        $this->users = new DBTable('user');
    }
    
    public function canRun($data) {
        return true;
    }
    
    public function run($data) {
        $username = $data->username;
        $password = $data->password;
        foreach ($this->users->data as $u) {
            if ($u['username'] === $username) {
               if ($u['password'] === $password) {
                   $this->user_id = $u['id'];
                   return true;
                }
            }  
         }
         
         return false;
    }
}

