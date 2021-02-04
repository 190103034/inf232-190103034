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
?>