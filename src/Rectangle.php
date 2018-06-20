<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.06.2018
 * Time: 22:29
 */

namespace App;


class Rectangle
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getArea()
    {
        return $this->a * $this->b;
    }
}