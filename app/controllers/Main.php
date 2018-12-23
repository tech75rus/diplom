<?php

/**
 * Created by PhpStorm.
 * User: Gladkix
 * Date: 18.12.2018
 * Time: 22:58
 */
namespace app\controllers;

class Main extends App
{

    public function actionIndex(){
        $this->layout = 'main';
        $this->view = 'test';
    }

    public function actionTest(){

    }
}
