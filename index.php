<?php declare(strict_types=1);
    function printString(string $string) {
        echo $string;
    }

    print("Hello World");

    function sum($a, $b) : int {
        return $a + $b;
    }

    echo sum(5, 10);

    $citiesPop = array("Astana" => 1136000, "Almaty" => 1916782, "Shymkent" => 1074167);

    function getPop(string $city) {
        global $citiesPop;
        echo "Population of ".$city." is ".$citiesPop[$city]." people."; 
    }

    foreach ($citiesPop as $city => $pop) {
        echo "<br>Population of ".$city." is ".$pop." people."; 
    }
?>