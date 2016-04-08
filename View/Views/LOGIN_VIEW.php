<?php

class LOGIN_VIEW extends Theme implements View {
    
    public function __construct() {
        
    }
    
    public function display($response) {
        $response = (array) $response;
        $this->createHead();
        $this->showHeader();
        Curlify::send('LoginView.php', $response);
        $this->showFooter();
    }
}

