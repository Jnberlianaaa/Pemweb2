<?php
class Mamalia
{
    public $namaHewann;
    public $warna;
    public $habitat;
    public $makanan;

    function bisaMenyusui()
    {
        return "$this->namaHewan ini bisa menyusui !";
    }

    function berjalan()
    {
        return "$this->namaHewan ini bisa berjalan !";
    }
}
$objek = new Mamalia;
$objek->namaHewan = "Monyet";
$objek->warna = "coklat";
$objek->habitat = "Hutan";
$objek->makanan = "Pisang";
echo $objek->bisamenyusui();