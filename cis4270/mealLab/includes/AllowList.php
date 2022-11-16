<?php

/**
 * Contains GET request allow-list for the guitarShop application.
 * 
 * @author jam
 * @version 210220
 */
class AllowList {
    
    // Set the allow list.
    private static $allowList = array('listProducts', 'viewProduct', 'login', 'addProduct',
    		'register', 'deleteProduct', 'shop', 'blog', 'contact','about');
    
    public static function getList() {
        return self::$allowList;
    }
}