<?php

namespace models;


class Delete
{

	protected $conn;

	public function __construct($id_post, $connect){
		$this->conn = $connect;
		$this->deletePost($id_post);
	}

	protected function deletePost($id_post){
        $res = $this->conn->prepare('DELETE FROM posts WHERE id = :id_post');
        $res->execute([':id_post' => $id_post]);
	}
	
}

