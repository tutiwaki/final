<?php require './header.php'; ?>
<?php require 'menu.php'; ?>
<form action="update_product.php" method="post">
    商品ID: <input type="text" name="product_id" required><br>
    更新する情報: <input type="text" name="new_info" required><br>
    <input type="submit" value="商品更新">
</form>
<?php
include 'db_connect.php'; 

$product_id = $_POST['product_id'];
$new_info = $_POST['new_info'];

$sql = "UPDATE products SET column_name = '$new_info' WHERE id = $product_id";

if ($conn->query($sql) === TRUE) {
    echo "商品が更新されました";
} else {
    echo "エラー: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>