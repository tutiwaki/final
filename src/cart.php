<?php
if (!empty($_SESSION['procuct'])){
    echo '<table>';
    echo '<tr><th>商品番号</th><th>商品名</th>';
    echo '<th>価格</th><th>個数</th><th>小計</th><th></th><th>';
    $total=0;
    // var_dump($_SESSION);
    foreach ($_SESSION['procuct'] as $id=>$procuct) {
        echo '<tr>';
        echo '<td>',$id, '</td>';
        echo '<td><a href="detail.php?id=',$id,'">',
        $procuct['name'], '</a></td>';
        echo '<td>', $procuct['price'],'</td>';
        echo '<td>', $procuct['count'],'</td>';
        $subtotal=$procuct['price']*$procuct['count'];
        $total+=$subtotal;
        echo '<td>',$subtotal, '</td>';
        echo '<td><a href="cart-delete.php?id=', $id,'">削除</a></td>';
        echo'</tr>';
    }
    echo '<tr><td>合計</td><td></td><td></td><td></td><td>',$total,
    '</td><td></td></tr>';
    echo '</table>';
}else{
    echo 'カートに商品がありません。';
}
?>