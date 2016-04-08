<?php

class ProjectManager extends ModuleTheme implements Module {
    
    public function __construct() {
        
    }
    
    public function display() {
        $data = array();
        $data['name'] = 'ProjectManager';
        $this->startDiv($data['name']);
        Curlify::send('ProjectManagerView.php', $data, true);
        $this->closeDiv();
    }
}

