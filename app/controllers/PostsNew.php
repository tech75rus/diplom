<?php

/**
 * Created by PhpStorm.
 * User: Gladkix
 * Date: 19.12.2018
 * Time: 9:45
 */
namespace app\controllers;

class PostsNew extends App
{

    public function actionIndex(){
        echo 'PostsNew::index ---- PostsNew.php 17';
    }

    public function actionTest(){
        echo 'PostsNew::test';
    }

    public function actionTestPage(){
        echo 'PostsNew::testPage';
    }

    public function before(){
        echo 'PostsNew::before';
    }
}