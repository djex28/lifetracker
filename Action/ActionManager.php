<?php

class ActionManager {
    
    public $authenticate;
    public $login;
    public $gotoCalenderView;
    
    public function __construct() {
        $this->init();
    }
    
    public function init() {
        
    }
    
    public function run($action, $data) {
        $instance = new $action; //create the command
        return $instance->run($data);
    }
    
    public function canRun($action, $data) {
        $instance = new $action; //create the command
        return $instance->canRun($data);
    }
}

