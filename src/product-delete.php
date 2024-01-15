<?php require './header.php'; ?>
<?php require 'menu.php'; ?>
<form action="procuct.php" method="post">
</form>
<hr>
<?php
    $pdo=new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1516969-aso2201217;charset=utf8',
    'LAA1516969', 'Narimo1930');
    $sql=$pdo->prepare(
        'delete from Syoutyuu where id=?');
        $sql->execute([$_GET['id']]);
        echo '商品を削除しました。';
        echo '<hr>';
    require 'procuct.php';
    ?>
?>
<?php require './footer.php'; ?>