<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
unset($_SESSION['procuct'][$_GET['id']]);
echo 'カートから商品を削除しました。';
echo '<hr>';
require 'cart.php';
?>
<?php require 'footer.php'; ?>