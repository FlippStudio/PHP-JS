<?php
  class samochod
  {
    public $marka, $model;

    public function __construct($marka,$model)
    {
      $this->marka = $marka;
      $this->model = $model;
    }

    public function wyswietl()
    {
      echo $this->marka;
      echo "<br /> $this->model";
    }
  }

  $seat = new samochod('Seat','Leon');

//  $seat->wyswietl();
?>
