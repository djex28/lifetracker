<?php

class Model {
    
    public $userId;
    public $modules;
    public $userData;
    
    public function __construct($id) {
        $this->update($id);
    }
    
}

