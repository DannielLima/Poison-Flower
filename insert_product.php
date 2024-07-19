<?php
require 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];
        $imageSize = $_FILES['image']['size'];
        $imageType = $_FILES['image']['type'];
        $imageNameCmps = explode(".", $imageName);
        $imageExtension = strtolower(end($imageNameCmps));

        $newImageName = md5(time() . $imageName) . '.' . $imageExtension;

        $uploadFileDir = './assets/images/';
        $dest_path = $uploadFileDir . $newImageName;

        if(move_uploaded_file($imageTmpPath, $dest_path)) {
            $image = $newImageName;
        } else {
            $image = null;
        }
    } else {
        $image = null;
    }

    $stmt = $pdo->prepare('INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $price, $description, $image]);

    header('Location: add_product.html');
}
?>