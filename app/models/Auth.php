<?php

namespace models;

use PDO;

class Auth
{

	protected $user = [];
	protected $conn;

	public function __construct($name, $pass, $connect){
	    $this->conn = $connect;
	    $this->run($name, $pass);
	    $_SESSION['id_user'] = $this->user['id'];
        $_SESSION['password'] = $this->user['password'];
        $_SESSION['name'] = $this->user['name'];
        $_SESSION['img'] = $this->user['img'];
	}

    protected function run($name, $pass){
	    $res = $this->conn->prepare('SELECT * FROM users WHERE name = :name AND password = :pass');
	    $res->execute([':name' => $name, ':pass' => $pass]);
        $this->user = $res->fetch(PDO::FETCH_ASSOC);
    }

	
}

