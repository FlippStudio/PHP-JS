/// ***** For *****

/*for (var i = 0; i<=10;i++)
    {
        document.write(i + '<br>');
        if(i == 5) break;
    }*/

//losuj 100 liczb z przedzialu <50,200>

/*for(var i = 1; i<=100;i++)
    {
        document.write(Math.floor(Math.random() * 151 + 50) + '<br>');
    }*/

/*for (var i = 1;i<=10;i++)
    {
        if(i< 10)
            {
                document.write(i + ',');
            }
        else
            {
                document.write(i + '.')
            }
    }*/

// ********** WHILE ************

/*var i = 0;
while(i++ < 5)
    {
        document.write(i + '<br />');
    }*/

// uzytkownik podaje wartosc z klawiatury. Petla bedzie sie wykonywala tak dlugo dopoki x>=y

/*var x = 0;
var y = 0;
while(x>=y){
    x = Number(prompt('podaj ponownie x'));
    y = Number(prompt('podaj ponownie y'));
}
document.write('x= ' + x + ', ' + 'y= ' + y);*/

// ************* DO WHILE ************

/*var wiek;

do{
    wiek = Number(prompt('podaj wiek'));
    if(wiek == 19)
        {
            document.write('Mozesz grac w cs');
        }

}while(wiek != 19)*/

//Wykorzystaj petle for i do while. Podaj 5 liczb podzielnych przez 2. Zapisz je do tablicy i wyswietl w consoli
/*var tab = [];
var liczba;
var i = 0
for(var i = 0; i<=4;i++)
{
    do{
        liczba = prompt('podaj liczbe');
        liczba = parseInt(liczba);
}
    while(liczba % 2 != 0)
        tab[i] = liczba;
}
console.log(tab);*/

//Uzytkownik podaje z klawiatury liczbe. Zabezpiecz przed podaniem litery, znaku specjalnego

/*document.write('<input type="text" id="liczba">');
document.write('<button id="przycisk">Wyślij</button>');

var elPrzycisk = document.getElementById('przycisk');
var elLiczba = document.getElementById('liczba');

elPrzycisk.onclick = function(){
    if(!isNaN(elLiczba.value))
        {
            console.log(elLiczba.value);
        }
}*/


//************ FOR EACH **********

var tab = ['Anna', 'Jacek', 'Janusz', 'Adrian'];

/*
for(var i = 0; i< tab.length;i++)
    {
        document.write(tab[i] + '<br>');
    }
*/

function p(a,b)
{
    document.write(a + b + '<br />')
}

//tab.forEach(p);

/*
function pokaz(wartosc,index)
{
    document.write(index + 1 + ' - element tablicy wynosi: ');
    document.write(wartosc + '<br />');
}

tab.forEach(pokaz);
*/

//zadanie

var elPi = document.getElementById('pi');
var elNic = document.getElementById('nic');
var elPrzycisk =document.getElementById('przycisk');
var elWynik = document.getElementById('wynik');

elPrzycisk.onclick = function(){
    if(elPi.checked)
        {
            elWynik.innerHTML = Math.PI;
        }
    else if(elNic.checked)
        {
            elWynik.innerHTML = 'wybrales nic';
        }
}
