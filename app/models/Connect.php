<?php

namespace models;

use PDO;

class Connect
{
	public $conn;

	public function __construct(){
		$this->connect();
		return $this->conn;
	}


	protected function connect(){
		try{
			$this->conn = new PDO('mysql:dbname=test;host=localhost', 'root', '');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo 'Ошибка при подключении' . $e->getMessage();
		}
	}
	

	
	
}

