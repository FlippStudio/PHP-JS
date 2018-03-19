<?php
    require_once('./class/Samochod.php'); //tylko raz załaduje plik
    require_once('./class/Samochod.php');

    $auto1 = new Samochod("Włochy");
    $auto1->marka = "Ferrari";
    $auto1->model = "F12";

    $auto1->wyswietl();
    $auto1->wyswietlForeach();
?>