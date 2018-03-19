<?php
/*    $tekst = <<<TEKST
        zsk - Zespol
        szkol
        komunikacji
TEKST;

    echo "przed użyciem fukcji nl2br:<br> $tekst";
    echo "<br>po użyciu fukcji nl2br:<br>";
    echo nl2br($tekst);
    echo "<br>";

//zamiana na male litery 

    echo strtolower($tekst);
    echo "<br>";
//zamiana na duze litery

    echo strtoupper($tekst);

//zamiana pierwszej litery na duza
    echo "<br>";
    $text = "rAZ DWA trzy";
    echo ucfirst($text);

//zamiana wszystkich pierwszych liter na duze
    echo "<br>";
    echo ucwords($text);

//**********************************
    echo "<br><br>";
    $lorem = "loremloremlorem
    loremloremloremloremloremlorem
    loremloremloremloremloremlorem
    loremloremloremloremloremlorem
    loremloremloremloremlorem
    
    loremloremloremloremlorem";

    $kolumna = wordwrap($lorem,40,"<br>"); //tekst, szerokosc kolumny (znaki), i co po osiagnieciu
    echo $kolumna;

    //usuwanie białych znakow
    $imie1 = "Filip"; //5
    $imie = "  Filip ";//8
    echo "<br>";
    echo strlen($imie1);
    echo "<br>";
    echo strlen($imie);
    echo "<br>";
    echo strlen(ltrim($imie)); //6 biale znaki od lewej
    echo "<br>";
    echo strlen(rtrim($imie)); //7 biale znaki od prawy
    echo "<br>";
    echo strlen(trim($imie));

//przeszukiwanie

    $adres = "Poznan, ul. Fredry 13, tel: (61) 445-44-58";
    $szukaj = strstr($adres,"tel"); // wycina tel i to co dalej jest
    echo "<br>";
    echo $szukaj;
    echo "<br>";
    $szukaj1 = strstr($adres,"tel",true);
    echo $szukaj1;
    echo "<br>";
    $szukaj2 = strstr($adres,"Tel"); //rozroznia znaki duze i male. takze nic nie wyswietli
    echo "<br>";
    $szukaj3 = stristr($adres,"Tel"); //ignoruje wielkosc liter
    echo $szukaj3;

//*******************************

    $ciag1 = "a";
    $ciag2 = "aa";
    echo "<br>";
    echo strcmp($ciag1,$ciag2); //-1
    echo "<br>";
    echo strcmp("zzz","zzz");//0
    echo "<br>";
    echo strcmp("zza","zzz"); //-1
    echo "<br>";
    echo strcmp("zzz","zza"); //1
    echo "<br>";
    echo strcmp("zzza","zzz"); //1

//*******************************

    $poz = strpos("abcdefg","cde");
    echo "<br>";
    echo $poz;

    $poz = strpos("abcabc","abc");
    echo "<br>";
    echo $poz;

//zad.1

    $tekst1 = "abcdabcd";
    $tekst2 = "ab";
    echo "<br>";
    if(strpos($tekst1,$tekst2) === false)
    {
        echo "ciąg $tekst2 nie została znaleziona w ciagu $tekst1";
    }
    else
    {
        echo "ciąg $tekst2 została znaleziona w ciagu $tekst1";
    }
    
//***************************
    
    $mail = strstr("zsk@gmail.com","@");
    echo "<br>";
    echo $mail;
    
    $mail1 = strstr("zsk@gmail.com",64); //kod ascii tez dziala @ = 64 w kodzie ascii
    echo "<br>";
    echo $mail1;

//przetwarzanie ciągu znaku

    $zamien = str_replace("%imie%","Janusz","%imie% Janusz to nie imie to styl życia");
    echo "<br>";
    echo $zamien;

    $nazwisko = substr("Janusz Nowak",7,5);
    echo "<br>";
    echo $nazwisko;
//nie dziala :)
    $zdanie = "Przykładowy ciąg znakow";
    $zamienCiag = str_replace($zdanie,"ąężźćńśł","aezzcnsl");
    echo "<br>";
    echo $zdanie;
    
    $login = "bączek";
    $cenzura = array("ą","ę","ż","ź","ć","ń","ł","ś");
    $zamiana = array("a","e","z","z","c","n","l","s");
    
    $poprawnyLogin = str_replace($cenzura,$zamiana,$login);
    echo "<br>";
    echo $poprawnyLogin;*/
  
//zad.2
#napisz funkcje, ktora bedzie obliczała wystapienia okreslonego ciagu znakow w danym tekscie. Tekst i szukany ciąg znakow powinny być przekazywany w postaci argumentow.
/*$tex = "aasaasaabcsaa";
$szukana = "aa";
echo "<br>";
function zlicz($tekst,$szukana){
    $pom = 0;
    for($i = 0;$i<strlen($tekst);$i++)
    {
        $por = substr($tekst,$i,2);
        if($por == $szukana)
        {
            $pom++;
        }
    }
    echo $pom;
    
};

zlicz($tex,$szukana);

echo "<br>";
function zlicz1($tekst,$szukana)
{
    $licznik = substr_count($tekst,$szukana);
    echo $licznik;
}
zlicz1($tex,$szukana);*/

//zad 3
#napisz program, ktory pozwoli cenzura zdanie podane przez uzytkownika. (formularz do wprowadzenia slow niewlasciwych oraz drugi do prawidlowych.)

    echo <<<FORM
    <form method="post">
        <input type="text" name="dane">
        <input type="submit">
    </form>
FORM;

isset($_POST['dane']);
$dane = @$_POST['dane'];
$niedozwolone = array("czarny","białe");
$zamiana = "#$*******";
//$poprawne = str_replace($niedozwolone,$zamiana,$dane);
$poprawne = str_ireplace($niedozwolone,$zamiana,$dane); //nie patrzy na wielkosc liter
echo "<h1>$poprawne</h1>";

?>