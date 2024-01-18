<?php require './header.php'; ?>
<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<?php

// $pdo = new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1516969-aso2201217', 'LAA1516969', 'Narimo1930');

//     $product_id = $_POST["product_id"];
//     $new_name = $_POST["new_name"];

//     $sql=$pdo->prepare('UPDATE products SET name=? WHERE id=?');
//     $sql->execute([$product_id, $new_name]);

    // if ($conn->query($updete_query) === TRUE) {
    //     echo "商品が更新されました";
    // } else {
    //     echo "エラー: " . $conn->error;
    // }
?>

<form method="post" action="procuct-updete-do.php">
商品ID(変更対象の商品IDを選択してください。): <input type="text" name="product_id"><br>
新しい商品名: <input type="text" name="new_name"><br>
<input type="submit" value="更新">
</form>

<?php
echo '<table>';
echo '<tr><th>商品番号</th><th>商品名</th><th><th></tr>';
$pdo = new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1516969-aso2201217', 'LAA1516969', 'Narimo1930');
    $sql = $pdo->query('select * from Syoutyuu');
    foreach ($sql as $row) {
    $id = $row['id'];
    echo '<tr>';
    echo '<td>', $id, '</td>';
    echo '<td>';
    echo '<a href=detail.php?id=', $id, '">', $row['name'], '</a>';
    echo '</td>';
    echo '</tr>';
    
}
echo '</table>';
?>