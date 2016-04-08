<?php

class UserDAO extends DBObject {
    
    const table_name = 'user';
    
    public function __construct($id) {
        $this->setTable(self::table_name);
        parent::__construct($id);
    }
    
    public static function create($row) {
        $id = DBObject::insert($row,self::table_name);

        if ($id) {
            return new User($id);
        }
        return false;
    }
}

?>