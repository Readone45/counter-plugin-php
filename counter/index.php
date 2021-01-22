<?php
require_once 'autoload.php';

$cb = new CounterButton($conn);

echo "Diupdate Terakhir : " . $cb->getData()['updated_at'].'<br>';
echo "Jumlah Klik Button : " . $cb->getCount();

?>
<h3>Reset Counter</h3>
<form action="reset.php" method="POST">
	<input type="text" name="key" autocomplete="off" placeholder="Masukan Kunci / Key">
	<input type="submit" value="Reset">
</form>