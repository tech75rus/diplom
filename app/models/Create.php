<?php

namespace models;


class Create
{

	public $user = [];
	protected $conn;

	public function __construct($id_user, $description, $text, $connect){
		$this->conn = $connect;
		$this->run($id_user, $description, $text);

	}

    protected function run($id_user, $description, $text){
	    $res = $this->conn->prepare('INSERT INTO posts (id_user, post_time, update_time, description, text) 
                            VALUES(:id_user, NOW(), NOW(), :description, :text)');
        $res->execute([':id_user' => $id_user, ':description' => $description, ':text' => $text]);
    }

}

