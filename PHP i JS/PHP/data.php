<?php

echo date("Y"),"<br>"; //2017
echo date("y"),"<br>"; //17
echo date("Y-m-d"),"<br>"; //2017-10-31
echo date("Y-M-d"),"<br>"; //2017-Oct-31
echo date("Y-M-D"),"<br>"; //2017-Oct-Tue
echo date("d-m-Y"),"<br>"; //31-10-2017
echo date("e"),"<br>"; //Europe/Berlin
echo date("F"),"<br>"; //October

//czas 

echo date("g"),"<br>"; // 10 format 12 godzinny bez 0 na poczatku
echo date("G"),"<br>"; // 10 format 24 godzinny
echo date("h"); // 10 format 12 godzinny z zerem na poczatku
echo "<br>";
echo date("H"); // 10 format 24 godzinny z zerem na poczatku
echo "<br>";
echo date("H"); // 10 format 24 godzinny z zerem na poczatku
echo "<br>";
echo date("i"); // liczba minut z zerem na poczatku
echo "<br>";
echo date("I"); //czas letni(1) i zimowy(0)
echo "<br>";
echo date("j"); //31 dzień miesiaca bez zera
echo "<br>";
echo date("l"); //Tuesday dzień tygodnia
echo "<br>";
echo date("L"); // rok przestepny(1) a tak to 0
echo "<br>";
echo date("m"); //10 miesiac z zerem na poczatku
echo "<br>";
echo date("M"); // Oct nazwa miesiaca
echo "<br>";
echo date("n");//10 bez zera na poczatku
echo "<br>";
echo date("o"); //2017 rok
echo "<br>";
echo date("O");//+0100 roznica do czasu greenwich
echo "<br>";
echo date("P"); //+01:00 roznica do czasu greenwich z :
echo "<br>";
echo date("s");//sekundy
echo "<br>";
echo date("S"); // przyrostki st nd rd 
echo "<br>";
echo date("t"); // liczba dni w miesiacu
echo "<br>";
echo date("T"); //CET strefa czasowy
echo "<br>";
echo date("U"); //1509443678 znacznik czasu unixa
echo "<br>";
echo date("w"); //2 dzien tygodnia
echo "<br>";
echo date("W"); //44 numer tygodnia
echo "<br>";
echo date("z"); //303 dzień roku 0-365

//***************************

//getdate()
echo "<br>";echo "<br>";echo "<br>";
$data = getdate();
$dzien = $data['mday']; //dzien miesiaca
$miesiac = $data['mon'];//nr miesiac
$rok = $data['year'];//rok
$dzienTygodnia = $data['wday'];//dzien tygodnia nr 0(niedziela)-6(sobota)
$dzienRoku = $data['yday'] + 1; //304
$dzienTygodnia1 = $data['weekday'];//Tuesday
$miesiac1 = $data['month'];//October
$znacznik = $data[0];//znacznik czasu unix

switch($miesiac)
{
    case 1:
        $miesiac = "styczeń";
        break;    
    case 2:
        $miesiac = "luty";
        break;    
    case 3:
        $miesiac = "marzec";
        break;    
    case 4:
        $miesiac = "kwiecien";
        break;    
    case 5:
        $miesiac = "maj";
        break;    
    case 6:
        $miesiac = "czerwiec";
        break;    
    case 7:
        $miesiac = "lipiec";
        break;    
    case 8:
        $miesiac = "sierpien";
        break;    
    case 9:
        $miesiac = "wrzesien";
        break;    
    case 10:
        $miesiac = "pazdziernik";
        break;    
    case 11:
        $miesiac = "listopad";
        break;    
    case 12:
        $miesiac = "grudzien";
        break;
}

switch($dzienTygodnia)
{
    case 0:
        $dzienTygodnia = "niedziela";
        break;
    case 1:
        $dzienTygodnia = "poniedziałek";
        break;
    case 2:
        $dzienTygodnia = "wtorek";
        break;
    case 3:
        $dzienTygodnia = "środa";
        break;
    case 4:
        $dzienTygodnia = "czwartek";
        break;
    case 5:
        $dzienTygodnia = "piatek";
        break;
    case 6:
        $dzienTygodnia = "sobota";
        break;
}

echo "$dzien-$miesiac-$rok, $dzienTygodnia";
echo "<br>";
echo "Dzień roku: $dzienRoku,$dzienTygodnia1,$miesiac1,$znacznik";

//******************************

//znacznik czasu

$r1 = 2017;
$m1 = 10;
$d1 = 31;

$r2 = 1998;
$m2 = 11;
$d2 = 5;

$czas1 = mktime(0,0,0,$m1,$d1,$r1);
//godzina,minuta,sekunda,miesiac, dzien, rok
$czas2 = mktime(0,0,0,$m2,$d2,$r2);

$czas = $czas1 - $czas2; //ilosc sekund
echo "<br>";
echo "Ilosc sekund: $czas";

$dni = $czas/(60*60*24);
echo "<br>";
echo "ilość dni: $dni";
$lat = floor($dni/365);
echo "<br>";
echo "ilość lat: $lat";

//***************************

//strtotime()

$data = mktime();
echo "<br>";
echo $data; //aktualny znacznik czasu
echo "<br>";
echo $dataDzisiejsza = strtotime('now'); // to samo co wyzej

$dataUrodzenia = strtotime("5 november 1998");
echo "<br>";
echo $dataUrodzenia;

$panFilip = abs($dataDzisiejsza - $dataUrodzenia);
echo "<br>";
echo $panFilip;

$dziesiecDniWstecz = strtotime("-10 day");
echo "<br>";
echo $dziesiecDniWstecz;

$wczoraj = strtotime("yesterday");
echo "<br>";
echo $wczoraj;

$jutro = strtotime("tomorrow");
echo "<br>";
echo $jutro;

$przyszlosc = strtotime("+10 day 7 hours 30 minutes 7 seconds");


//zad1 ile sekund ma jeden dzien
$dzisiaj = strtotime("today");
$dzienSekundy = $jutro - $dzisiaj;
echo "<br>";
echo $dzienSekundy;

echo "<br>";
echo $przyszlosc;

?>