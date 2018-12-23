<?php

namespace models;

use PDO;

class Update
{

	public $user = [];
	protected $conn;

	public function __construct($id_post, $text, $description, $connect){
		$this->conn = $connect;
		$this->updatePost($id_post, $text, $description);
	}


	protected function updatePost($id_post, $text, $description){
        $res = $this->conn->prepare('UPDATE posts SET text = :text, 
                                update_time = NOW(),  description = :description 
                                WHERE id = :id_post');
        $res->execute([':id_post' => $id_post, ':text' => $text, ':description' => $description]);
	}
	
}

