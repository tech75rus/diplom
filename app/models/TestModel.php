<?php
/**
 * Created by PhpStorm.
 * User: Gladkix
 * Date: 15.12.2018
 * Time: 15:30
 */

namespace models;


class TestModel
{
    public $sum;

    public function sumNum($a, $b){
        $this->sum = $a * $b;
        return $this->sum;
    }
}