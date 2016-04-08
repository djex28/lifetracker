<?php

/**
 * Description of DBObject
 *
 * @author Drew Jex
 * @since  11 May 2013
 */

class DBObject {
    
    public $table = '';
    public $id;
    public $data = array();
    public $meta = array();
    public $hasmeta = false;
    
    private $to_save = array();
    
    public function __construct($id = NULL) {
        if ($id === NULL) {
            return;
        }
        
        if ($this->table == '') {
            return;
        }
        
        $this->id = intval($id);
        
        $db = MasterDB::getInstance();
        $query = "SELECT * "
                . "FROM `$this->table` "
                . "WHERE id='$this->id';";
        
//        echo "\n\nthe query: $query\n\n";
        
        $row = $db->getIndexed($query);
        
//        echo print_r($row,true);
//        echo print_r($this,true);
        
        if (!empty($row)) {
            $this->data = $row[0];
        }
    }
    
    public static function insert($row,$tablename) {
        $db = MasterDB::getInstance();
        $db->escapeAll($row);
        
        $keys = array();
        $values = array();
        
        foreach($row as $key => $value) {
            if ($value !== '') {
                $keys[] = $db->real_escape_string( (string) $key );
                $values[] = "'" . $db->real_escape_string( (string) $value ) . "'";
            }
        }
        
        $query = "INSERT INTO `$tablename` " .
            "(" . implode(",",$keys) . ") " .
            "VALUES (" . implode(",",$values) . ")";
        
        $result = $db->query($query);
        
        if ($result) {
            return $db->insert_id;
        }
        
        return $result;
    }
    
    // saves values to table or meta table as needed. Keys and Values are escaped in __set() method.
    public function save() {
        $values = array();
        
        foreach ($this->to_save as $key => $value) {
            
            //checks if the value is a field in the table or a meta value. If data, saves to table; if meta, saves to meta table.
            if (array_key_exists($key, $this->data)) {
                $values[] = "$key='$value'";
            } else if ($this->hasmeta) {
                if ($this->saveMeta($key,$value)) {
                    $this->meta[$key] = $value;
                }
            }
        }
        
        if (!empty($values) && $this->saveData($values)) {
            foreach ($this->to_save as $key => $value) {
                if (array_key_exists($key, $this->data)) {
                    $this->data[$key] = $value;
                } else {
                    return false;
                }
            }
        }
        
        $this->to_save = array();
        
        return true;
    }
    
    private function saveData($values) {
        $db = MasterDB::getInstance();
        
        $query = "UPDATE `$this->table` SET ";
        $query .= implode(",",$values) . " WHERE id='$this->id'";
        
//        echo "\n$query\n";
        
        return $db->query($query);
    }
    
    private function saveMeta($key, $value) {
        
        $db = MasterDB::getInstance();
        $query = "";
        
        if (array_key_exists($key, $this->meta)) {
            $query = "UPDATE `" . $this->table . "_meta` SET `value`='$value' WHERE `" . $this->table . "_id`='$this->id' and `key`='$key'";
        } else {
            $query = "INSERT INTO `" . $this->table . "_meta` (`" . $this->table . "_id`,`key`,`value`) VALUES ('$this->id','$key','$value')";    
        }

        return $db->query($query);
    }
    
    public function setTable($table) {
        $this->table = $table;
    }
    
    public function __set($key, $value) {
        $db = MasterDB::getInstance();
        $this->to_save[$db->real_escape_string( (string) $key)] = $db->real_escape_string( (string) $value);
    }
    
    public function __get($key) {
        if ($key == 'id') { 
            return $this->id;
        } else if (array_key_exists($key, $this->to_save)) {
            return $this->to_save[$key];
        } else if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else if (array_key_exists($key, $this->meta)) {
            return $this->meta[$key];
        }
        
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $key .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        
        return null;
    }
    
    public function compare($key) {
        if (!array_key_exists($key, $this->to_save)) {
            return true;
        }
        
        return $this->to_save[$key] == $this->data[$key];
    }
    
    public function __isset($key) {
        if ($key == 'id') { 
            return isset($this->id);
        } else if (array_key_exists($key, $this->to_save)) {
            return isset($this->to_save[$key]);
        } else if (array_key_exists($key, $this->data)) {
            return isset($this->data[$key]);
        } else if (array_key_exists($key, $this->meta)) {
            return isset($this->meta[$key]);
        }
        
        return false;
    }
    
    public function getMeta() {
        
        $db = MasterDB::getInstance();
        $query = "SELECT * FROM `" . $this->table . "_meta` WHERE `" . $this->table . "_id` = $this->id";
        $row = $db->getAssociative($query);
        
        foreach ($row as $id => $array) {
            $this->meta[$array['key']] = $array['value'];
        }
        
        $this->hasmeta = true;
    }
    
    public function isValid() {
        return !empty($this->data);
    }
}

?>
