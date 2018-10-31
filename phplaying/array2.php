<?php
    
    $array = array("anna" => 21, "nick" => 37, "cindy" => 39, "richard" => 54,         
    "robert" => 41);

    function average ($array){
    
        $gemiddelde = array_sum($array) / count($array);
        echo "gemiddelde leeftijd is " . $gemiddelde;
    }

    average($array);

?>


