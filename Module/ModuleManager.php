<?php

//require 'Database/DBTable.php';

class ModuleManager {
    
    public $userId;
    public $activatedModules;
    
    public function __construct() {
      
    }
    
    public function getActivatedModulesByUser() {
        $activatedModules = array();
        $modules = new DBTable('module_activated');
        foreach ($modules->data as $m) {
            if ($m['user_id'] == $_SESSION['userId']) {
                array_push($activatedModules, $this->getModuleObjById($m['module_id']));
            }
        }
        
        return $activatedModules;
    }
    
    public function displayActivatedModules() {
        $this->activatedModules = $this->getActivatedModulesByUser();
        foreach ($this->activatedModules as $a) {
            $a->display();
        }
    }
    
    public function getModuleObjById($id) {
        $modules = new DBTable('module');
        foreach ($modules->data as $m) {
            if ($m['id'] == $id) {
                $instance = new $m['name'];
                return $instance;
            }
        }
        
        return null;
    }
}

