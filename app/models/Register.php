<?php

namespace models;

use PDO;

class Register
{
	protected $conn;
	public $user;

	public function __construct($name, $pass, $connect){
		$this->conn = $connect;
		if ($this->loginValidation($name)){
		    echo 'ok';
            /*$this->existsUser($name);
            if (empty($this->user)){
                $this->createUser($name, $pass);
            }else{
                die('Такой пользователь уже существует');
            }*/
        }else{
		    echo 'Не правельно';
        }
	}
    protected function loginValidation($data){
	    return preg_match('/^[0-9A-Za-z_]{4,30}$/', $data);
    }
	protected function existsUser($name){
		$res = $this->conn->prepare('SELECT * FROM users WHERE name = :name');
		$res->execute([':name' => $name]);
		$this->user = $res->fetch(PDO::FETCH_ASSOC);
	}

	protected function createUser($name, $pass){
		$res = $this->conn->prepare('INSERT INTO users(name, password) VALUES(:name, :pass)');
		$res->execute([':name' => $name, ':pass' => $pass]);
		echo 'Пользовтель ' . $name .' успешно создан<a href="/"> Назад</a>';
	}
}

