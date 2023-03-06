<?php
$username = $_POST['Username'];
$password = $_POST['Password'];

if($username == "admin" && $password ==101203){
    echo "Selamat, Kamu Berhasil Log-in!";
} else{
    echo "Maaf, Kamu Gagal Log-in!";
}