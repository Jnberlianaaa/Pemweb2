<?php
for ($i = 0; $i < 10; $i++) { 
    echo "HELLO SI 07, ini looping ke- $i <br>";
}
echo "<br>";

$array = ['Kucing' , 'Anjing' , 'Kuda' , 'Anoa'];
//count() berfungsi untuk menghitung panjang array
for ($i=0; $i < count($array); $i++) { 
    echo $array[$i] , "<br>";
}
?>