<?php



$conn = new PDO ('mysql:host=136.243.1.210:3306;dbname=addmore', 'test', '145J9fxd@');


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

