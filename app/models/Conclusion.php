<?php
/**
 * Created by PhpStorm.
 * User: Gladkix
 * Date: 14.12.2018
 * Time: 10:27
 */

namespace models;


class Conclusion
{
    protected $conn;
    public $posts = [];

    public function __construct($id_user, $connect){
        $this->conn = $connect;
        $this->conclusionPost($id_user);
        return $this->posts;
    }

    public function conclusionPost($id_user){

        $res = $this->conn->prepare('SELECT p.id, p.post_time, p.update_time, p.description, p.text 
          FROM posts AS p JOIN users As u 
          ON p.id_user = u.id 
          WHERE u.id = :id_user');

        $res->execute([':id_user' => $id_user]);
        $this->posts = $res->fetchAll(\PDO::FETCH_ASSOC);
    }
}