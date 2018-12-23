<?php
/**
 * Created by PhpStorm.
 * User: Gladkix
 * Date: 23.12.2018
 * Time: 22:21
 */

namespace app\controllers;

use vendor\core\base\Controller;

class GRUD extends Controller
{
    public function __construct(){
        echo 'Controller work';
    }

    public function actionIndex(){
        echo 'This is method index';
    }

    public function actionPosts(){
        echo 'This is method Posts';
    }

    public function actionEdit(){
        echo 'This is method Edit';
    }

    public function actionCreate(){
        echo 'This is method Create';
    }
}