<?php

/**
 * Controller that handles home page functions of the Guitar Shop application.
 *
 * @author jam
 * @version 210222
 */
class HomeController extends DefaultController {

    protected $model = null;

    public function __construct() {
        parent::__construct();
    }

    public function listProducts() {
        $vm = ProductsVM::getCategoryInstance();
        Page::$title = 'guitarShop - ' . $vm->category->name;
        require(APP_NON_WEB_BASE_DIR .'views/categoryProductList.php');
    }
    
    public function viewProduct() {
        $vm = ProductsVM::getProductInstance();
        Page::$title = 'guitarShop - ' . $vm->product->name;
        require(APP_NON_WEB_BASE_DIR .'views/productView.php');
    }
}
