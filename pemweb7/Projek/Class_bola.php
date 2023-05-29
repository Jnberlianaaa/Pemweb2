<?php
class bangunRuang
{
    public $rumusVolume;
    public $rumusLuas;

    Function hitungvolume()
    {
        return "$this->rumusVolume adalah  V = (4/3) x π x r3";
    }

    function hitungluaspermukaan()
    {
        return "$this->rumusLuas adalah Lp = 4 x π x r2";
    }
}
$objek = new bangunRuang;
$objek->rumusVolume = "Volume";
$objek->rumusLuas = "Luas Permukaan";
echo $objek->hitungvolume();
echo "<br>";
echo $objek->hitungluaspermukaan();





class Bola
{
    public $volume
    public $luasPermukaan;

    public function __construct($v, $l)
    {
        $this->volume = $v;
        $this->luasPermukaan = $l;
    }

    public function hitungVolume()
    {
        return "$this->volume jari - jari dari bola adalah 30";
    }

    public function hitungluaspermukaan()
    {
        echo "jari - jari dari bola adalah 14";
    }
}



