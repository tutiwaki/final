<?php require './header.php'; ?>
<?php require 'menu.php'; ?>
<form action="procuct.php" method="post">
</form>
<hr>
<?php
echo '<form action="product-isnert.php" method="post">';
echo '<table>';
echo '<tr><td>お酒の名前</td><td>';
echo '<input type="text" name="name" value="">';
echo '</td></tr>';
echo '<input type="submit" value="確定">';
echo '</form>';
?>
<?php require './footer.php'; ?>