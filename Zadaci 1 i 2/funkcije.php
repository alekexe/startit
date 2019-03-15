<?php    

function a($boja, $array)
    {
        echo "<p style='color:" . $boja. "'>" . implode( ", ", $array). "</p>";

    } 

function suma($brojevi){
        echo "<p class='suma'>Suma brojeva je: " . array_sum($brojevi) . "</p>";
    
    }

function najmanji($brojevi){
    echo "<p class='najmanji'>Najmanji broj je: " . min($brojevi) . "</p>";

}

function najveci($brojevi){
    echo "<p class='najveci'>Najveci broj je: " . max($brojevi) . "</p>";

}



?>