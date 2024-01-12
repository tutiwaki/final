<?php require './header.php'; ?>
<?php require 'menu.php'; ?>
<form action="procuct.php" method="post">
    商品検索
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>
<hr>
<?php
echo '<table>';
echo '<tr><th>商品番号</th><th>商品名</th><th>価格</th><th>';
$pdo = new PDO('mysql:host=mysql214.phy.lolipop.lan;dbname=LAA1516969-shop', 'LAA1516969', 'Pass1112');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['keyword'])) {
    $keyword = '%' . $_POST['keyword'] . '%';
    $sql = $pdo->prepare('select * from product where name like ? ');
    $sql->execute(['%'.$_POST['keyword'].'%']);
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Assuming you want to handle GET requests with an 'id' parameter
    $id = $_GET['id'];
    $sql = $pdo->prepare('select * from product where id = ?');
    $sql->execute([$id]);
} else {
    $sql = $pdo->query('select * from product');
}
foreach ($sql as $row) {
    $id = $row['id'];
    echo '<tr>';
    echo '<td>', $id, '</td>';
    echo '<td>';
    echo '<a href=detail.php?id=', $id, '">', $row['name'], '</a>';
    echo '</td>';
    echo '<td>', $row['price'], '</td>';
    echo '</tr>';
}
echo '</table>';
?>
<?php require './footer.php'; ?>