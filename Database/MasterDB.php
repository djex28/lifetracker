<?php

/**
 * MasterDB class, extends MySQLi
 *
 * @author  Drew
 * @since   12 Oct 2015
 */

define('DBNAME', 'lifetrackerdb');
define('DBUSER','root');
define('DBPWORD','');
define('DBHOST','localhost');

class MasterDB extends MySQLi {
    
    private static $_db_instance = null;

    // init object with murdery mystery db info
    public function __construct() {
        parent::__construct(DBHOST, DBUSER, DBPWORD, DBNAME);
    }

    public static function getInstance() {
        if(!self::$_db_instance)
            self::$_db_instance = new MasterDB();
        return self::$_db_instance;
    }
    
    // DATA RETRIEVAL FUNCTIONS
	
	/**
	 * Retrieves data from a table into an associative array
	 *
	 * Rows will be returned as nested arrays.
	 *
	 * @param   string $query           The query string
	 * @return  array                   Array of data
	 */ 
	public function getIndexed($query) {
		$return = array();
		$result = $this->query($query);
		while ($row = $result->fetch_assoc()) {
			$return[] = $row;
		}
		$result->free();
		return $return;
	}
	
	/**
	 * Fetch the entire result set of a query and return it as an
	 * associative array using the first column as the key
	 *
	 * If the result set contains more than two columns, the value
	 * will be an array of the values from column 2-n.  If the result
	 * set contains only two columns, the returned value will be a
	 * scalar with the value of the second column (unless forced to an
	 * array with the $force_array parameter).
	 *
	 * @param   string $query           The query string
	 * @return  array                   Array of data 
	 */
	public function getAssociative($query) {
		$return = array();
		$result = $this->query($query);
		while ($row = $result->fetch_assoc()) {
			$key = array_shift($row);
			switch (count($row)) {
				case 0:
				$return[$key] = NULL;
				break;
			case 1:
				$return[$key] = current($row);
				break;
			default:
				$return[$key] = $row;
				break;
			}
		}
		$result->free();
		return $return;
	}
	
	/**
	 * Retrieves just one value (cell) from a query
	 *
	 * If the query returns multiple rows, only the first will be processed.
	 *
	 * @param   string $query           The query string
	 * @param   mixed  $col           	The name or index of the column (default 0)
	 * @return  string|false            Value of cell, false if not found.
	 */ 
	public function getOne($query, $col = 0) {
		$result = $this->query($query);
		if ($result->num_rows < 1) {
            $one = false;
        } else {
            $row = $result->fetch_array();
            $one = $row[$col];
        }
		$result->free();
		return $one;
	}

    /**
     * Retrieves just one value (cell) from a query. Throws an error
     * if the value isn't found.
     * @param string $query The query string.
     * @return string The result.
     */
    public function getOneMandatory($query) {
        $result = $this->getOne($query);
        if ($result === false) {
            $this->reportOtherError('MySQLBridge::getOneMandatory(): item not found.', 5001);
        }
        return $result;
    }
	
    /**
     * Fetch a single column from a result set and return it as an
     * indexed array
	 *
	 * @param   string $query           The query string
	 * @param   mixed  $col           	The name or index of the column (default 0)
	 * @return  array                   Array of data
	 */
	public function getColumn($query, $col = 0) {
		$return = array();
		$result = $this->query($query);
		while ($row = $result->fetch_array()) {
			$return[] = $row[$col];
		}
		$result->free();
		return $return;
	}
	
    /**
     * Fetch a single row from a result set and return it as an
     * associative and indexed array
	 *
	 * If the query returns multiple rows, only the first will be processed.
	 *
	 * @param   string $query           The query string
     * @return  array|null              Associative array with key-value pairs or null
     *                                  if row isn't found.
	 */
	public function getRow($query) {
		$result = $this->query($query);
		if ($result->num_rows < 1) {
            $row = null;
		} else {
            $row = $result->fetch_array();
        }
        $result->free();
		return $row;
	}

    /**
     * Fetch a single row from a result set and return it as an
     * associative and indexed array. Throw an exception if the
     * row isn't found.
	 *
	 * If the query returns multiple rows, only the first will be processed.
	 *
	 * @param   string $query           The query string
     * @return  array                   Associative array with key-value pairs.
	 */
	public function getRowMandatory($query) {
		$result = $this->getRow($query);
        if ($result === null) {
            $this->reportOtherError('MySQLBridge::getRowMandatory(): row not found.', 5002);
        }
        return $result;
	}

    
}

?>
