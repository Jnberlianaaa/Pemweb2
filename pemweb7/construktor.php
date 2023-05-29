<?php
class Shinobi
{
    public $nama, $asalDesa, $clan;

    public function __construct($n, $a, $c)
    {
        $this->nama =$n;
        $this->asalDesa = $a;
        $this->clan = $c;
    }

    public function berlari()
    {
        return "$this->nama bisa berlari !";
    }

    public function getShinobi()
    {
        echo "Nama : $this->nama <br>
            Asal Daerah : $this->asalDesa <br>
            Clan : $this->clan";
    }
}
$objekShinobi = new Shinobi("Kagumi Uchiha", "Konoha", "Uchiha");
$objekShinobi->getShinobi();