<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.06.2018
 * Time: 22:30
 */

namespace App;


class Figures
{
    private $data = [];

    public function __construct($file)
    {
        $string = file_get_contents($file);
        $figures = json_decode($string, true);

        foreach ($figures as $figure) {
            switch ($figure['type']) {
                case 'circle':
                    $this->data[] = new Circle($figure['radius']);
                    break;
                case 'rectangle':
                    $this->data[] = new Rectangle($figure['a'], $figure['b']);
                    break;
                case 'triangle':
                    $this->data[] = new Triangle($figure['a'], $figure['b'], $figure['c']);
                    break;
            }
        }
    }

    public function sort()
    {
        $result = $this->data;
        usort($result, function ($a, $b)
        {
            if ($a->getArea() == $b->getArea()) {
                return 0;
            }
            return ($a->getArea() < $b->getArea()) ? -1 : 1;
        });
        
        return $result;
    }
}