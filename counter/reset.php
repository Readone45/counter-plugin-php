<?php
require_once 'autoload.php';
if(isset($_POST['key'])){
	if($_POST['key'] == $config['key']){
		$cb = new CounterButton($conn);
		$cb->resetCount();
		header("location: index.php");
	}else{
		echo "Key salah!";
	}
}else{
	echo "Not Allowed Access";
}
?>