<?php

class FinanceTracker extends ModuleTheme implements Module {
    
    public function __construct() {
        
    }
    
    public function display() {
        $data = array();
        $data['name'] = 'FinanceTracker';
        $this->startDiv('FinanceTracker');
        Curlify::send('FinanceTrackerView.php', $data, true);
        $this->closeDiv();
    }
}

