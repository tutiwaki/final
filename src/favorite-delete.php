<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if (isset($_SESSION['customer'])){
    $pdo=new PDO('mysql:host=mysql214.phy.lolipop.lan;dbname=LAA1516969-shop;charset=utf8',
    'LAA1516969', 'Pass1112');
    $sql=$pdo->prepare(
        'delete from favorite where customer_id=? and product_id=?');
        $sql->execute([$_SESSION['customer']['id'],$_GET['id']]);
        echo 'お気に入りから商品を削除しました。';
        echo '<hr>';
    }else{
        echo 'お気に入りから商品を削除するには、ログインしてください。';
    }
    require 'favorite.php';
    ?>
    <?php require 'footer.php'; ?>