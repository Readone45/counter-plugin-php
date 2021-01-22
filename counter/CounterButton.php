<?php

require_once 'autoload.php';

$conn = new mysqli($config['host'], $config['user'], $config['pass'], $config['db']);

class CounterButton
{
	private $conn;
	
	public function __construct($conn = NULL)
	{
		$this->conn = $conn;
	}

	public function getCount(){
		$counter = $this->conn->query("select * from counter where id = 1");
		$data = $counter->fetch_array();
		return $data['counter'] ?? 0;
	}

	public function updateCount(){
		$number = $this->getCount() + 1;
		$update_at = date('Y-m-d H:i:s');
		$update = $this->conn->query("update counter set counter = '$number',updated_at = '$update_at' where id = 1");
		if($update){
			echo "sukses";
		}else{
			echo $this->conn->error;
		}
	}

	public function resetCount(){
		$number = 0;
		$update_at = date('Y-m-d H:i:s');
		$update = $this->conn->query("update counter set counter = '$number',updated_at = '$update_at' where id = 1");
		if($update){
			echo "sukses";
		}else{
			echo $this->conn->error;
		}
	}

	public function getData(){
		$counter = $this->conn->query("select * from counter where id = 1");
		$data = $counter->fetch_array();
		return $data;
	}
}