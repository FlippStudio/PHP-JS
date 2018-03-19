<?php
    class Liczby
    {
        public static $liczba = 10;
        public static function wyswietl()
        {
            echo "Wartosc statycznego pola wynosi: ";
            echo Liczby::$liczba."<br>";
        }
    }

    echo Liczby::$liczba."<br>";
    Liczby::wyswietl();

    Liczby::$liczba = 20;
    Liczby::wyswietl();
?>