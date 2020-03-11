<?php

namespace App;

class Multiplo
{

    public function __construct()
    {
    }
    
    public function print_numbers($a, $b)
    {
        $limit=100;
        $arreglo_100 = array();
        for($i = 1; $i <= $limit; $i++) 
        {
            $number = $i;
            $x = $i % $a;
            switch($x)
            {
                case 0:
                    $number = "Linio";
                break;
            }
            $y = $i % $b;
            switch($y)
            {
                case 0:
                    $number = "IT";
                break;
            }
            switch($i)
            {
                case ( ($i % $a == 0 ) && ($i % $b == 0) ):
                    $number = "Linianos";
            }
            array_push($arreglo_100,$number);
            //echo $number."\n";
            //echo $i.") ".$i." % 3 = ".$x." /// ".$i." % 5 = ".$y." /// ".$number."<br>";
        }
        return $arreglo_100;
    }

}