//Tworzenie obiektu za pomocą literału obiektu

var janusz = {
    wzrost: 180,
    waga: 80,
    miejsceUrodzenia: 'Poznań',
    plec: 'm'
};

//console.log(janusz.wzrost);

var auto = {
    marka: 'Porsche',
    model: 'Panamera',
    predkosc: 220,
    wyswietl(){
        //document.write('Marka: ' + auto.marka);
        //document.write('Marka: ' + this.marka);
        return 'Marka: ' + this.marka;
    }
};

//auto.wyswietl();
//document.write(auto.wyswietl());

//******************************************************

var ksiazka = {
    tytul: 'Pan Tadeusz',
    rokWydania: 1834,
    gatunek: 'poemat epicki',
        autor: {
            imie: 'Adam',
            nazwisko: 'Mickiewicz',
            wyswietlDane() {
                return 'Imię: ' + this.imie + '<br>Nazwisko: ' + this.nazwisko;
            }
        }
};

//console.log(ksiazka.autor.imie);
//console.log(ksiazka['autor']['imie']);
//console.log(ksiazka.autor['imie']);

var klucz = 'nazwisko';
//console.log(ksiazka.autor[klucz]);

//console.log(ksiazka.autor.wyswietlDane());  //Imię: Adam<br>Nazwisko: Mickiewicz
//document.write(ksiazka.autor.wyswietlDane());

//***************************************************************

//Tworzenie pustego obiektu

var produkt = {};

//console.log(produkt.nazwa); //undefined
//console.log(typeof(produkt.nazwa)); //undefined

produkt.nazwa = 'pralka';
produkt.model = 'WAK2024PI';
produkt.firma = 'Bosch';
produkt.waga = 8;
produkt.cena = 1500;
produkt.wyswietl = function() {
    return 'Nazwa: ' + this.nazwa + '<br>Model: ' + this.model + '<br>Cena: ' + this.cena;
}

console.log(typeof(produkt.nazwa)); //string
console.log(typeof(produkt.waga)); //number
console.log(typeof(produkt.wyswietl)); //function

//**************************************************************
//**************************************************************

//konstruktor Object

//var tablica = new Array();

var hotel = new Object();

hotel.nazwa = 'Hotel Poznań';
hotel.pokoje = 50;
hotel.zarezerwowanePokoje = 34;
hotel.silownia = true;
hotel.basen = true;
hotel.rodzajPokoju = ['pojedyncze', 'podwójne', 'apartament'];
hotel.wolnePokoje = function() {
    return this.pokoje - this.zarezerwowanePokoje;
}

console.log('Wolne pokoje: ' + hotel.wolnePokoje());

//**************************************************************

function Hotel(nazwa, pokoje, zarezerwowanePokoje, silownia, basen, rodzajPokoju) {
    this.nazwa = nazwa;
    this.pokoje = pokoje;
    this.pokojeZarezerwowane = zarezerwowanePokoje;
    this.silownia = silownia;
    this.basen = basen;
    this.rodzajPokoju = rodzajPokoju;
    this.wolnePokoje = function() {
        return this.pokoje - this.pokojeZarezerwowane;
    }
/*    this.wyswietl = function() {
        return 'Nazwa: ' + this.nazwa + '<br>Liczba pokoi: ' + this.pokoje + '<br>Pokoje zarezerwowane: ' + this.pokojeZarezerwowane + '<br>Siłownia: ' + this.silownia + '<br>Basen: ' + this.basen + '<br>Rodzaje pokojów: ' + this.rodzajPokoju + '<br>Wolne pokoje: ' + this.wolnePokoje();
    }*/
        this.wyswietl = function() {
        var war = ['Nazwa: ' + this.nazwa,
                   '<br>Liczba pokoi: ' + this.pokoje,
                   '<br>Pokoje zarezerwowane: ' + this.pokojeZarezerwowane,
                   '<br>Siłownia:' + this.silownia,
                   '<br>Basen: ' + this.basen,
                   '<br>Rodzaje pokojów: ' + this.rodzajPokoju,
                   '<br>Wolne pokoje: ' + this.wolnePokoje()] + '<br/>';
        return war;
    }
}

var HotelLech = new Hotel('Lech', 100, 30, true, false, ['jednoosobowy', 'apartament']);
var HotelMercury = new Hotel('Lech', 150, 30, false, false, ['jednoosobowy', 'apartament']);

document.write(HotelLech.wyswietl()+'<br>');
document.write(HotelMercury.wyswietl());


function Osoba(imie,nazwisko,wiek,plec){
    this.imie = imie;
    this.nazwisko = nazwisko;
    this.wiek = wiek;
    this.plec = plec;
    this.narodowosc = 'Polska';
}

var czarek = new Osoba('Czarek', 'Kowal', 20, 'M');

console.log(czarek.imie);


function Pies(imie,rasa,waga,ulubioneZajecia,){
    this.imie = imie;
    this.rasa = rasa;
    this.waga = waga;
    this.ulubioneZajecia = ulubioneZajecia;

}

var azor = new Pies('Azor', 'or', 5, ['aportowanie', 'szczekanie']);
var edi = new Pies('Edi', 'or', 15, ['aportowanie']);
var saba = new Pies('Saba', 'or', 20, ['bieganie','przytulanie']);

console.log(azor.ulubioneZajecia);
var pies = [azor, edi ,saba];
console.log(pies);

edi.ulubioneZajecia.push('spacer');

var rozmiar = 'maly pies';

for (var i=0; i < pies.length; i++){
    if (pies[i].waga > 10){
        rozmiar = 'duży pies';
    }else{
        rozmiar =  'mały pies';
    }
    document.write('Pies: ' + '<span style="color:blue">' + pies[i].imie +  '</span>' + ' to ' + rozmiar + '<br>');
}

var tab = ['jan', 'nowak', 'Poznań'];
for(var i in tab)
    {
        document.write(i + '-' + tab[i] + '<br>'); //same indeksy z i
    }

for(var i in edi)
    {
        if(i=='imie' || i=='rasa')
            {
                document.write(edi[i]);
            }
    }

function pole(a,b){
    return a*b;
}

console.log(pole.length); // sprawdzamy ile parametrow ma funkcja

console.log(pole.constructor); //sprawdzamy jakim sposobem stworzylismy konstruktor pole

console.log(pole.prototype);

//***********************************************************

function Uczen(imie,nazwisko){
    this.imie = imie;
    this.nazwisko = nazwisko;
}

var janusz = new Uczen('Maciej','Nowak');
Uczen.prototype.narodowosc = 'Polska';
Uczen.prototype.wyswietl = function(){
    return '<br> Imie: ' + this.imie + ', nazwisko: ' + this.nazwisko + ' narodowosc: ' + this.narodowosc;
}

document.write(janusz.wyswietl());
//lepsza wersja wyswietlania mniej pamieci zzera

document.write('<br>' + janusz.constructor);
document.write('<br>' + janusz.constructor.prototype.narodowosc);

//*********************************************

//Utworz konstruktor rower, ktory ma 2 parametry nazwa oraz kolor. Utworz prototyp ilosc kol, ktory ma wartosc 2. Utworz prototpy wyswietlajaca wszystkie dane za pomoca for in

function Rower(nazwa,kolor){
    this.nazwa = nazwa;
    this.kolor = kolor;
}

var lel = new Rower('Arkus','czerwony');
Rower.prototype.iloscKol = 2;
Rower.prototype.wyswi = function(){
    var x = '';
    for(var i in this)
    {
        if(typeof(this[i]) != 'function')
        x+=i+' '+this[i];
    }
    document.write(x);
}

lel.wyswi();

console.log(janusz.hasOwnProperty('narodowosc')); //sprawdza czy ta metoda jest w tym obiekcie

