<?php

class DBTable {
    
    public $data;
    
    public function __construct($table = NULL) {
        if ($table === NULL) 
            return;
        
        $db = MasterDB::getInstance();
        $query = "SELECT * "
                . "FROM `$table` ;";

        $this->data = $db->getIndexed($query);
    }
}

?>

