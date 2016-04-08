<?php

class SIGNUP_VIEW extends Theme implements View {
    
    public function __construct() {
        
    }
    
    public function display($response) {
        $response = (array) $response;
        $this->createHead();
        $this->showHeader();
        $this->showPreContent();
        //$moduleManager = new ModuleManager();
        //$moduleManager->displayActivatedModules();
        //$moduleManager->displayActivatedModules();
        $this->showPostContent();
        //Curlify::send('CalenderView.php', $response);
        $this->showFooter();
    }
}

