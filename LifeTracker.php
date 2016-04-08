<?php

class LifeTracker {
    
    public $data; //contains most recent response from server
    public $view; //essentially the state, or current view of the program
    public $views; //master view object that contains all visual data
    public $model; //master model object that contains necessary local data
    public $database; //master database object that contains each DAO
    public $actions; //master action-manager object that contains each action
    
    public $isLoggedIn = false; //indicates whether a user is logged in or not
    
    public function __construct($loggedIn) {
        $this->init($loggedIn);
    }
    
    public function init($loggedIn) {
        $this->setActions();
        $this->setViews(new ViewManager(null)); //used for displaying information
        $this->setDatabase(new MasterDB());
        $this->setIsLoggedIn($loggedIn);
    }
    
    /*
     * returns true on success, false on failure
     */
    public function execute($action, $data) { //actions merely manipulate data and update database, and sometimes not even that -> LifeTracker is still the main controller for updating views.
        if ($this->getActions()->canRun($action, $data)) {
            $response = $this->getActions()->run($action, $data); //create and run the command
            $this->update($response); //update views based on changes - $response contains new state, and any data in database to be displayed on that page
            return $response->success; 
        } else {
            $this->gotoPreviousView();
        }
        return false;
    }
    
    public function update($response) {
        $this->saveState($response);
        $this->setView($response->view);
        $this->getViews()->showView($this->view, $response); 
    }
    
    public function saveState($response) {
        $_SESSION['previousView'] = $response->view;
        $_SESSION['previousResponse'] = $response;
    }
    
    public function gotoPreviousView() {
        $this->setView($_SESSION['previousView']);
        $this->getViews()->showView($this->view, $_SESSION['previousResponse']); 
    }
    
    public function getUserId() {
        return getModel()->getUserId();
    }
    
    public function getViews() {
        return $this->views;
    }
    
    public function setViews($views) {
        $this->views = $views;
    }
    
    public function getDatabase() {
        return $this->database;
    }
    
    public function setDatabase($database) {
        $this->database = $database;
    }
    
    public function getModel() {
        return $this->model;
    }
    
    public function setModel($model) {
        $this->model = $model;
    }
    
    public function getView() {
        return $this->view;
    }
    
    public function setView($view) {
        $this->view = $view;
    }
    
    public function getActions() {
        return $this->actions;
    }
    
    public function setActions() {
        $this->actions = new ActionManager(); 
    }
    
    public function IsLoggedIn() {
        return $this->isLoggedIn;
    }
    
    public function setIsLoggedIn($isLoggedIn) {
        $this->isLoggedIn = $isLoggedIn;
    }
}

