<?php
    class Liczby
    {
        public $wartosc1 = 1;
        protected $wartosc2 = 2;
        private $wartosc3 = 3;
        
        public function wyswietl(){
            echo "Wartosc 1: $this->wartosc1<br>";
            echo "Wartosc 2: $this->wartosc2<br>";
            echo "Wartosc 3: $this->wartosc3<br>";
        }
    }

    class Rzeczywiste extends Liczby
    {
        public function wyswietl()
        {
            parent::wyswietl();
/*            echo "Wartosc 1: $this->wartosc1<br>";
            echo "Wartosc 2: $this->wartosc2<br>";
            echo "Wartosc 3: $this->wartosc3<br>"; */           
        }
    }

$liczba1 = new Liczby();
$liczba2 = new Rzeczywiste();

/*echo "Obiekt liczba1 - wartosc 1: $liczba1->wartosc1"."<br>"; //1
echo "Obiekt liczba2 - wartosc 2: $liczba1->wartosc2"."<br>"; //fatal error
echo "Obiekt liczba2 - wartosc 2: $liczba1->wartosc3"."<br>"; //fatal error*/

//$liczba1->wyswietl();

//echo $liczba2->wartosc1; //1
//echo $liczba2->wartosc2; //fatal 
//echo $liczba2->wartosc3; //fatal

$liczba2->wyswietl();

?>