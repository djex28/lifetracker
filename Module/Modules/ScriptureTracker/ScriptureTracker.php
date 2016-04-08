<?php

class ScriptureTracker extends ModuleTheme implements Module {
    
    public function __construct() {
        
    }
    
    public function display() {
        $data = array();
        $data['name'] = 'ScriptureTracker';
        $this->startDiv('ScriptureTracker');
        Curlify::send('ScriptureTrackerView.php', $data, true);
        $this->closeDiv();
    }
}

