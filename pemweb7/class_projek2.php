<?php
class Kendaraan
{
    public $nama , $warna , $jenis , $jumlahRoda;

    public function ngebut()
    {
        return "$this->nama adalah kendaraan yang bisa ngebut !";
    }

    public function ngerem()
    {
        return "$this->nama adalah kendaraan yang bisa ngerem !";
    }

    public function getKendaraan()
    {
        echo "Nama : $this->nama<br>
            Warna : $this->warna<br>
            Jenis : $this->jenis <br>
            Jumlah roda : $this->jumlahRoda";
    }
}
$objek = new Kendaraan;
$objek->nama = "Mobil Corona";
$objek->warna = "Merah";
$objek->jenis = "Sedan";
$objek->jumlahRoda = 4;
echo $objek->ngebut();
echo "<br>";
$objek->getKendaraan();