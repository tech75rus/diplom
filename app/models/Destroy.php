<?php
/**
 * Created by PhpStorm.
 * User: Gladkix
 * Date: 16.12.2018
 * Time: 17:25
 */

namespace models;


class Destroy
{
    public function run(){
        session_destroy();
        header('Location: /');
    }
}