<?php
require_once 'autoload.php';

if(isset($_GET)){
	$cb = new CounterButton($conn);
	if(!isset($_COOKIE['click'])){
		$ipaddress = $_SERVER['REMOTE_ADDR']."";
		$data = [
			'ip_address' => $ipaddress,
		];
		$cb->updateCount();
		setcookie("click", json_encode($data), time() + $config['time'],"/");	
	}else{
		$click = json_decode($_COOKIE["click"]);
		echo $click->ip_address;
		//setcookie("click","",time()-3600,"/");
	}
}
