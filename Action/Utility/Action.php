<?php

interface Action {
    
    public function __construct();
    
    public function canRun($data);
    
    public function run($data);
}
