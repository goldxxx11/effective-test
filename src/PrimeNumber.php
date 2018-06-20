<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 20.06.2018
 * Time: 21:22
 */

namespace App;


class PrimeNumber
{
    private function isPrimeNumber($num)
    {
        $result  = true;
        for ($i = 2; $i < $num; $i++)
        {
            if ( ($num % $i) == 0 )
            {
                $result  = false;
                break;
            }
        }
        return $result;
    }

    public function calculate($start, $finish)
    {
        $summ = 0;
        $count = 0;
        for ($i = $start; $i <= $finish; $i++)
        {
            if ($this->isPrimeNumber($i))
            {
                $summ += $i;
                $count++;
            }
        }
        
        return $summ;
    }

}
