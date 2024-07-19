<?php
class Cart {
    public static function getCart() {
        return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }

    public static function addToCart($id, $pdo) {
        $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
        $stmt->execute([$id]);
        $product = $stmt->fetch();

        if ($product) {
            $cart = self::getCart();

            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    'id' => $id,
                    'product_name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => 1,
                ];
            }

            $_SESSION['cart'] = $cart;
        }
    }

    public static function removeFromCart($id) {
        $cart = self::getCart();

        if (isset($cart[$id])) {
            unset($cart[$id]);
            $_SESSION['cart'] = $cart;
        }
    }
}
?>