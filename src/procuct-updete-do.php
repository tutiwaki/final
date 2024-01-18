<?php require './header.php'; ?>
<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php

$pdo = new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1516969-aso2201217', 'LAA1516969', 'Narimo1930');

    $product_id = $_POST["product_id"];
    $new_name = $_POST["new_name"];

    $sql=$pdo->prepare('UPDATE Syoutyuu SET name=? WHERE id=?');
    $sql->execute([$new_name , $product_id]);

    
    echo "商品が更新されました";

?>