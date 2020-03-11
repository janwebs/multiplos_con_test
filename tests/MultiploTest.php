<?php
//require_once ('PHPUnit/Framework/TestCase.php');
//require_once 'PHPUnit/Autoload.php';
use App\Multiplo;

class MultiploTest extends \PHPUnit_Framework_TestCase
{
    public function test_printNumbers()
    {
        $multi = new Multiplo;
        $result = $multi->print_numbers(3,5);

        $areglo_test = array
        (
            '0' => 1,
            '1' => 2,
            '2' => 'Linio',
            '3' => 4,
            '4' => 'IT',
            '5' => 'Linio',
            '6' => 7,
            '7' => 8,
            '8' => 'Linio',
            '9' => 'IT',
            '10' => 11,
            '11' => 'Linio',
            '12' => 13,
            '13' => 14,
            '14' => 'Linianos',
            '15' => 16,
            '16' => 17,
            '17' => 'Linio',
            '18' => 19,
            '19' => 'IT',
            '20' => 'Linio',
            '21' => 22,
            '22' => 23,
            '23' => 'Linio',
            '24' => 'IT',
            '25' => 26,
            '26' => 'Linio',
            '27' => 28,
            '28' => 29,
            '29' => 'Linianos',
            '30' => 31,
            '31' => 32,
            '32' => 'Linio',
            '33' => 34,
            '34' => 'IT',
            '35' => 'Linio',
            '36' => 37,
            '37' => 38,
            '38' => 'Linio',
            '39' => 'IT',
            '40' => 41,
            '41' => 'Linio',
            '42' => 43,
            '43' => 44,
            '44' => 'Linianos',
            '45' => 46,
            '46' => 47,
            '47' => 'Linio',
            '48' => 49,
            '49' => 'IT',
            '50' => 'Linio',
            '51' => 52,
            '52' => 53,
            '53' => 'Linio',
            '54' => 'IT',
            '55' => 56,
            '56' => 'Linio',
            '57' => 58,
            '58' => 59,
            '59' => 'Linianos',
            '60' => 61,
            '61' => 62,
            '62' => 'Linio',
            '63' => 64,
            '64' => 'IT',
            '65' => 'Linio',
            '66' => 67,
            '67' => 68,
            '68' => 'Linio',
            '69' => 'IT',
            '70' => 71,
            '71' => 'Linio',
            '72' => 73,
            '73' => 74,
            '74' => 'Linianos',
            '75' => 76,
            '76' => 77,
            '77' => 'Linio',
            '78' => 79,
            '79' => 'IT',
            '80' => 'Linio',
            '81' => 82,
            '82' => 83,
            '83' => 'Linio',
            '84' => 'IT',
            '85' => 86,
            '86' => 'Linio',
            '87' => 88,
            '88' => 89,
            '89' => 'Linianos',
            '90' => 91,
            '91' => 92,
            '92' => 'Linio',
            '93' => 94,
            '94' => 'IT',
            '95' => 'Linio',
            '96' => 97,
            '97' => 98,
            '98' => 'Linio',
            '99' => 'IT'
        );

        $this->assertEquals(
            $areglo_test, 
            $result
        );

        print_r($result);

    }

   

}