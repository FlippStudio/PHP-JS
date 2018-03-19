<?php
  require_once("./class/samochod.php");

  class ciezarowy extends samochod
  {
    public $ladownosc;
    public function wyswietl()
    {
      parent::wyswietl();
      $this->ladownosc;
    }
  }

$volvo = new ciezarowy('Volvo','FH16');
$volvo->ladownosc = 1000;
$volvo->wyswietl();
?>
