<?php
session_start();

require_once 'config/config.php';

$host = 'localhost';
$db   = 'ecommerce';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

require_once 'controllers/ProductController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/CartController.php';

include 'views/includes/header.html';
include 'views/includes/navbar.html';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

switch ($page) {
    case 'products':
        $productController = new ProductController();
        $productController->index();
        break;
    case 'product':
        $productController = new ProductController();
        $productController->show($id);
        break;
    case 'cart':
        $cartController = new CartController();
        if ($action == 'add' && $id) {
            $cartController->add($id);
        } elseif ($action == 'remove' && $id) {
            $cartController->remove($id);
        } else {
            $cartController->index();
        }
        break;
    case 'profile':
        include 'views/users/profile.php';
        break;
    default:
        include 'views/home.html';
        break;
}
?>