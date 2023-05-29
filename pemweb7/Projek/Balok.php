<?php
class Balok
{
    public $panjang,$lebar,$tinggi;
          
    public function __construct($p, $l, $t) 
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
          
    public function getLuas() 
    {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
         
    public function getVolume() 
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}
$objek = new Balok(150, 78, 30);
echo $objek->getLuas();
echo "<br>";
echo $objek->getVolume();

            
           
