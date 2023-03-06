<?php
$arrayBuah = ["jeruk" , "Mangga" , "Pisang" , "Apel"];

sort($arrayBuah);

array_pop($arrayBuah);

unset($arrayBuah[1]);

array_push($arrayBuah, "Durian");

array_shift($arrayBuah);

array_unshift($arrayBuah, "Semangka");

$arrayBuah[0] = "Manggis";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}