<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1516969-aso2201217;charset=utf8',
    'LAA1516969', 'Narimo1930');
    $sql=$pdo->prepare(
        'delete from Syoutyuu where id=?');
        $sql->execute([,$_GET['id']]);
        echo '商品を削除しました。';
        echo '<hr>';
    }else{
        echo 'お気に入りから商品を削除するには、ログインしてください。';
    }
    require 'procuct.php';
    ?>
    <?php require 'procuct.php'; ?>