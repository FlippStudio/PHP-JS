<?php

//instrukcja if

$x = 2;
$y = 4;

if($x<$y)
{
    echo "Zmienna x jest mniejsza od zmiennej y <br>";
}

if($x < $y):
    echo "Zmienna x jest mniejsza od zmiennej y <br>";
endif;

//instrukcja if..else
echo "<br><br>";
$a = 1;
$b = 2;

if($a<$b)
{
    echo "Zmienna a jest mniejsza od zmiennej b <br>";
}
else
{
    echo "Zmienna a nie jest mniejsza od zmiennej b <br>";
}

if($a<$b):
    echo "Zmienna a jest mniejsza od zmiennej b <br>";
else:
    echo "Zmienna a nie jest mniejsza od zmiennej b <br>";
endif;

//instrukcja if..else..if
echo "<br><br>";
if($a<$b)
{
    echo "Zmienna a jest mniejsza od zmiennej b <br>";
}
elseif($a==$b)
{
    echo "Zmienna a jest rowna zmiennej b <br>";
}
else
{
    echo "Zmienna a jest wieksza od zmiennej b <br>";
}

if($a < $b):
    echo "Zmienna a jest mniejsza od zmiennej b <br>";
elseif($a == $b): //elseif razem bo inaczej nie dziala
    echo "Zmienna a jest rowna zmiennej b <br>";
else:
    echo "Zmienna a jest wieksza od zmiennej b <br>";
endif;

//switch
$a = 5;
echo "<br>";
switch($a)
{
    case 0:
        echo "Zmienna a=0 <br>";
        break;
    case 5:
        echo "Zmienna a=5 <br>";
        break;
    case 10:
        echo "Zmienna a=10 <br>";
        break;
}

switch($a):
    case 0:
        echo "Zmienna a=0 <br>";
        break;
    case 5:
        echo "Zmienna a=5 <br>";
        break;
    case 10:
        echo "Zmienna a=10 <br>";
        break;
endswitch;

//petle

    //for
echo "<br>";
for($i = 0; $i<10;$i++)
{
    echo "$i ";
}
echo "<br>";
for($i = 0; $i<10;$i++):
    echo "$i ";
endfor;

    //foreach
echo "<br>";
$tab = array(1,2,3,4,5);

foreach($tab as $klucz => $wartosc)
{
    echo "$tab[$klucz] = $wartosc ";
}
echo "<br>";
foreach($tab as $klucz => $wartosc):
    echo "$tab[$klucz] = $wartosc ";
endforeach;

    //petla while
$i = 3;
echo "<br>";
while($i <= 10)
{
    echo "$i ";
    $i++;
}
echo "<br>";
while($i <= 20):
    echo "$i ";
    $i++;
endwhile;

    //break
for($i = 1; ;$i++):
echo "Zmienna i wynosi: $i <br>";
if($i == 5):
    break;
endif;
endfor;

//********************************
//continue
for($i = 1; $i<10;$i++)
{
    if($i%2 !=0)
        continue;
    echo $i." ";
}
echo "<br>";
for($i = 1; $i<10;$i++):

    if($i%2 !=0):
        continue;
endif;
    echo $i." ";
endfor;
?>


