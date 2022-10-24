<?php

/**
 * Represents category in the GuitarShop application
 *
 * @author jam
 * @version 180508
 */
class Category {
    
    private $id;
    private $name;
 
    /**
     * Builds an object with instance variables set. Only the instance variables
     * will be set that correspond to the input data (i.e., not all instance
     * variables will be set in all cases.
     * @param array $data Optional values to be loaded in instance variables.
     */
    function __construct($data = array()) {
        if (!is_array($data)) {
            trigger_error('Non-array input to ' . get_class() . 'constructor');
        } elseif ($data !== null) {
			
			// If the input array has at least one value, set the corresponding
			// instance variable.
            foreach ($data as $name => $value) {
                $this->$name = $value;  
            }
        }
    }
    
    function __get($name) {
        return $this->$name;
    }
    
    function __set($name, $value) {
        $this->$name = $value;
    }
}
