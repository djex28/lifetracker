<?php

class Ponderize extends ModuleTheme implements Module {
    
    public function __construct() {
        
    }
    
    public function display() {
        $data = array();
        $data['name'] = 'Ponderize';
        $this->startDiv('Ponderize');
        Curlify::send('PonderizeView.php', $data, true);
        $this->closeDiv();
    }
}

