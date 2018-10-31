<?php

    $array = array("anna" => 21, "nick" => 37, "cindy" => 39, "richard" => 54,         
    "robert" => 41);

    function average($array) {

        $average = array_sum($array) / count($array);

        $names = array_keys($array);

        $lastname = end($names);

        array_pop($array);

        echo "<br>De gemiddelde leeftijd van ". implode(", ",array_keys($array)). " en " .       
        $lastname . " is " .$average;

    }

    average($array);

?>
