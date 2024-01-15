<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1516969-aso2201217;charset=utf8',
    'LAA1516969', 'Narimo1930');
    $sql=$pdo->prepare('insert into Syoutyuu(name) values(?)');
    $sql->execute([$_POST['name']]);
    echo '<hr>';
?>
<?php require 'footer.php';