<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.06.2018
 * Time: 22:29
 */

namespace App;


class Triangle
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea()
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;

        $p = ($a + $b + $c)/2;

        return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    }
}