<?php

require_once 'settings.php';

getResponse();

function getResponse() {
    $data = new stdClass();
    $action = isset($_POST['action']) ? $_POST['action'] : "GOTO_LAST_SESSION";
    $data->isLoggedIn = isset($_SESSION['isLoggedIn']) ? true : false;
    
    foreach ($_POST as $key => $value) {
        $data->$key = $value;
    }
    foreach ($_SESSION as $key => $value) {
        $data->$key = $value;
    }
    
    updateLifeTracker($action, $data);
}

function updateLifeTracker($action, $data) {
    $lf = new LifeTracker($data->isLoggedIn);
    $lf->execute($action, $data);
}

?>


