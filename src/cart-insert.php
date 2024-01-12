<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
$id=$_POST['id'];
// echo "id / " , $id, "<br>";
if (!isset($_SESSION['procuct'])){
    $_SESSION['procuct']=[];
}
$count=0;
if (isset($_SESSION['procuct'][$id])){
    $count=$_SESSION['procuct'][$id]['count'];
}
$_SESSION['procuct'][$id]=[
    'name'=>$_POST['name'],
    'price'=>$_POST['price'],
    'count'=>$count+$_POST['count']
];
echo '<p>カートに商品を追加しました。</p>';
echo'<hr>';
require 'cart.php';
?>
<?php require 'footer.php';