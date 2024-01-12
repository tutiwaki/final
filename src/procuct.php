<?php require './header.php'; ?>
<?php require 'menu.php'; ?>
<form action="procuct.php" method="post">
</form>
<hr>
<?php
echo '<table>';
echo '<tr><th>商品番号</th><th>商品名</th><th><th></tr>';
$pdo = new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1516969-aso2201217', 'LAA1516969', 'Narimo1930');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['keyword'])) {
    $keyword = '%' . $_POST['keyword'] . '%';
    $sql = $pdo->prepare('select * from Syoutyuu where name like ? ');
    $sql->execute(['%'.$_POST['keyword'].'%']);
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Assuming you want to handle GET requests with an 'id' parameter
    $id = $_GET['id'];
    $sql = $pdo->prepare('select * from Syoutyuu where id = ?');
    $sql->execute([$id]);
} else {
    $sql = $pdo->query('select * from Syoutyuu');
}
foreach ($sql as $row) {
    $id = $row['id'];
    echo '<tr>';
    echo '<td>', $id, '</td>';
    echo '<td>';
    echo '<a href=detail.php?id=', $id, '">', $row['name'], '</a>';
    echo '</td>',"<input type='button' onClick= 'document.location.href='favorite-delete.php''value=削除'/><br>";
    echo '</tr>';
    
}
echo '</table>';
?>
<?php require './footer.php'; ?>