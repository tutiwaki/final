<?php require './header.php'; ?>
<?php require 'menu.php'; ?>
<form action="procuct.php" method="post">
</form>
<hr>
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
    echo '<td>';
    echo '<a href=product-delete.php?id=', $id, '">削除</a>';
    echo '</td>';
    echo '</tr>';
    
}
echo '</table>';
?>
<?php require './footer.php'; ?>