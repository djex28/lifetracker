<?php

class Response extends stdClass {
    
    public $success;
    public $view;
    public $error;
    
    public function __construct(){}
    
    public function setSuccess($success) {
        $this->success = $success;
    }
    
    public function getSuccess() {
        return $this->success;
    }
    
    public function setView($view) {
        $this->view = $view;
    }
    
    public function getView() {
        return $this->$view;
    }
    
    public function setError($error) {
        $this->error = $error;
    }
    
    public function getError() {
        return $this->$error;
    }
}

