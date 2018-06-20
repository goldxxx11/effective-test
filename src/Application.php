<?php

namespace App;

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.06.2018
 * Time: 21:02
 */
class Application
{
    public function run()
    {
       
        $pn = new PrimeNumber();
        echo $pn->calculate(2, 10) . PHP_EOL;
        
        $f = new Figures(__DIR__ . '/../data/figures.json');
        
        $data = $f->sort();
        
        foreach ($data as $item) {
            echo get_class($item) . ' - ' . $item->getArea() . PHP_EOL;
        }
    }
}