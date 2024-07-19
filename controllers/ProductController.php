<?php
require_once 'models/Product.php';

class ProductController {
    public function index() {
        global $pdo;
        $products = Product::all($pdo);
        include 'views/products/index.html';
    }

    public function show($id) {
        global $pdo;
        $product = Product::find($pdo, $id);
        include 'views/products/details.php';
    }
}
?>