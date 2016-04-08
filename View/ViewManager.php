<?php

class ViewManager {
    
    public $theme; 
    
    public function __construct($theme) {
        $this->setTheme($theme);
    }
    
    public function showView($view, $response) {
        $instance = new $view;
        $instance->display($response);
    }
    
    public function getTheme() {
        return $this->theme;
    }
    
    public function setTheme($theme) {
        $this->theme = $theme;
    }
}

