<?php



$conn = new PDO ('mysql:host=localhost;dbname=addmore', 'root', 'root');


foreach ($_POST['product_name'] as $key => $value) {
    $sql = 'INSERT INTO items (name, price, quantity) VALUES (:name, :price, :qty)';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'name' => $value,
        'price' => $_POST['product_price'][$key],
        'qty' => $_POST['product_qty'][$key]
    ]);
    echo 'Item inserted successfully';
}

