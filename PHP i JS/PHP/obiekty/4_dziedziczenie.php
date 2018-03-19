<?php
    require_once('./class/Samochod.php');

    class Ciezarowy extends Samochod
    {
        public $ladownosc;
        
        public function wyswietl()
        {
            echo parent::wyswietl();
            echo "Ładowność: ".$this->ladownosc;
        }
    }
    
    $tir1 = new Ciezarowy("Polska");
    $tir1->ladownosc = 19000;
    $tir1->marka = "DAF";
    $tir1->model = "XF 95 480";
    
    //echo $tir1->ladownosc;
    $tir1->wyswietl()."<br>";
    
    $tir2 = new Samochod("Polska");
    $tir2->ladownosc; //Undefined property: Samochod::$ladownosc
    
?>