<?php

$profileArray = [
    "nama" => "Janet",
    "kelas" => "SI07"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];

echo "<br>";

$profileMultiArray = [
    [
        "nama" => "Janet" ,
        "semester" => 2
    ] , [
        "nama" => "Fitya" ,
        "semester" => 2
    ] , [
        "nama" => "Azhar" ,
        "semester" => 6
    ]
];

foreach ($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}