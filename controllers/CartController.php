<?php
require_once 'models/Cart.php';

class CartController {
    public function index() {
        $cart = Cart::getCart();
        include 'views/cart/index.php';
    }

    public function add($id) {
        global $pdo;
        Cart::addToCart($id, $pdo);
        header('Location: index.php?page=cart');
    }

    public function remove($id) {
        Cart::removeFromCart($id);
        header('Location: index.php?page=cart');
    }
}
?>