<?php
/**
 * Created by PhpStorm.
 * User: Gladkix
 * Date: 21.12.2018
 * Time: 19:45
 */

namespace vendor\core\base;


abstract class Controller
{
    public $route = [];
    public $view;
    public $layout;

    public function __construct($route){
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView(){
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render();
    }
}