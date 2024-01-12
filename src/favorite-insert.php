<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if (isset($_SESSION['customer'])){
    $pdo=new PDO('mysql:host=mysql214.phy.lolipop.lan;dbname=LAA1516969-shop;charset=utf8',
    'LAA1516969', 'Pass1112');
    $sql=$pdo->prepare('insert into favorite values(?,?)');
    $sql->execute([$_SESSION['customer']['id'],$_GET['id']]);
    echo 'お気に入りに商品を追加しました。';
    echo '<hr>';
    require 'favorite.php';
}else{
    echo 'お気に入りに商品を追加するには、ログインしてください。';
}
?>
<?php require 'footer.php'; ?>
