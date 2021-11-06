<?php
//while

$meta = 5000;
$ganancias = 0;

function generarganancias($ganancias){
    if($ganancias==0){
        $ganancias = $ganancias+100;

    }else{
        $ganancias = $ganancias*4;

    }
    echo "$ganancias<br>";
    return $ganancias;
}

?>