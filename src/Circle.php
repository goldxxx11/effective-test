<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.06.2018
 * Time: 22:28
 */

namespace App;


class Circle
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->radius * pow(3.14, 2);
    }
}