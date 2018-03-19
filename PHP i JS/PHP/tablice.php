<?php
//tablice indeksowane numerycznie

    $kolory = array("biały","zielony","czerwony");
    echo "Poczatkowa zawartość tablicy: <br>";
    
    for($i = 0; $i<count($kolory);$i++){
        $elem = $i + 1;
        echo "Element $elem: $kolory[$i] <br>";
    }

    $kolory[0] = "orange";
    $kolory[1] = "aqua";
    $kolory[2] = "magenta";

/*    for($i = 0; $i<count($kolory);$i++)
    {
        $elem = $i + 1;
        echo "Element[$elem]: $kolory[$i] <br>";
    }*/

function wypisz($kolory){
    for($i = 0; $i<count($kolory);$i++)
    {
        $elem = $i + 1;
        echo "Element[$elem]: $kolory[$i] <br>";
    }
}
wypisz($kolory);

//tablice asocjacyjne

    $dane = array(
        "imie" => "Janusz",
        "nazwisko" => "Nowak",
        "wiek" => 20,
        "narodowość" => "Polska"
     );
/*    echo "<br> Zawartość tablicy \$dane: <br>";
    echo <<<TABLICA
    Imie: {$dane['imie']} <br>
    Nazwisko: $dane[nazwisko] <br>
    Wiek: $dane[wiek] <br>
    Narodowość: $dane[narodowość] <br>
TABLICA;

    foreach($dane as $key => $value)
    {
        echo "Element[$key] = $value<br>";
    }*/

    foreach($dane as $value)
    {
        echo "Wartość: $value <br>";
    }


    //tablice wielowymiarowe

    $uczen = array(
        array("Julia", "Nowak", 20),
        array("Anna", "Kowal", 19),
        array("Paweł", "Kowalski", 25)
    );
    
    for($i = 0; $i<count($uczen); $i++)
    {
        for($j = 0; $j<count($uczen[$i]); $j++)
        {
            echo "{$uczen[$i][$j]} ";
        }
        echo "<br>";
    }

    echo "<br><br>";

    foreach($uczen as $key => $tablica)
    {
        foreach($tablica as $key2 => $wartosc)
        {
            echo "{$uczen[$key][$key2]}";
        }
        echo "<br>";
    }
    #zad.dom Utworz tablice 3-wymiarowa i napisz dla niej funkcje wyswietlajaca zawartość. Wykorzystaj foreach

    echo "<br>";

    $cyfry = array(
        array(1,2,3,4),
        array(5,6,7),
        array(8),
        array(9,10)
    );

    foreach($cyfry as $wartosc)
    {
        foreach($wartosc as $x)
        {
            echo $x;
        }
        echo "<br>";
    }
    echo "<br>";

    //sortowanie

    $tab = array(10,1,5,75,-4,100);
    
    function wyswietl($tab){
        foreach($tab as $x)
        {
            echo "$x ";
        }
    };
wyswietl($tab);

    //rosnaco
    echo "<br>";
    sort($tab);
wyswietl($tab);

    //malejaco
    echo "<br>";
    rsort($tab);
wyswietl($tab);

    $tab2 = array("julia", "anna", "zenon", "krystian");
    $tab3 = array("Julia", "anna", "zenon", "krystian");
echo "<br>";
wyswietl($tab2);
    sort($tab2);
echo "<br>";
wyswietl($tab2);

echo "<br>";
wyswietl($tab3);
sort($tab3);
echo "<br>";
wyswietl($tab3); //Julia anna krystian zenon

$tab4 = array("Julia", "anna", "zenon", "krystian");

foreach($tab4 as $klucz => $x)
{
    $x = strtolower($x);
    $tab4[$klucz] = $x; 
}
echo "<br>";
wyswietl($tab4);
sort($tab4);
echo "<br>";
wyswietl($tab4);


//sortowanie tablicy asocjacyjnej

$tabasoc = array(
    "imie" => "Andrzej",
    "pseudomin" => "endru",
    "wiek" => 30,
    "nazwisko" => "Kowal"
);
echo "<br>";
wyswietl($tabasoc);

//sortowanie według wartości

asort($tabasoc);
echo "<br>";
wyswietl($tabasoc);

echo "<br>";
echo gettype($tabasoc['pseudomin']);//string
echo "<br>";
echo gettype($tabasoc['wiek']); // integer

arsort($tabasoc);
echo "<br>";
wyswietl($tabasoc);

//sortowanie według klucza

ksort($tabasoc);
echo "<br>";
wyswietl($tabasoc); //Andrzej Kowal endru 30

krsort($tabasoc);
echo "<br>";
wyswietl($tabasoc);

//wyswietlanie danych z tablicy
echo "<br>";
var_dump($tab4);

echo "<br>";
print_r($tab4);

echo "<br>";
echo "<pre>";
    print_r($tab4);
echo "</pre>";
?>