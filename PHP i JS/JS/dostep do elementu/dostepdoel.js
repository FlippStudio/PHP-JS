// getElementById()

var elPierwszy = document.getElementById('pierwszy');
elPierwszy.className = 'niebieski';

// getElementsByTagName()

var elNaglowek = document.getElementsByTagName('h1');
if(elNaglowek.length > 0)
    {
        console.log(elNaglowek);
        elNaglowek[0].className = 'czerwony';
    }

// getElementsByClassName()

var czerwony = document.getElementsByClassName('czerwony');
if(czerwony.length>0)
    {
        console.log(czerwony.length);
        console.log(czerwony);
        //metoda wolniejsza
        var ostatni = czerwony.item(czerwony.length -1);
        
        //metoda szybsza
        //var ostatni = czerwony[czerwony.length -1];
        ostatni.className = 'niebieski';
    }

// querySelector() - Zwraca pierwsze dopasowanie

var elTv = document.querySelector('li.grey');
console.log(elTv);
elTv.className = 'niebieski';

// querySelectorAll()

var elTvAll = document.querySelectorAll('li.grey');
console.log(elTvAll);
elTvAll[2].className = 'niebieski';

// getElementsByName

/*var elPrzycisk = document.getElementById('przycisk');
var tv = document.getElementsByName('beb'); 

elPrzycisk.onclick = function() {
    for(var i=0; i<tv.length;i++){
        tv[i].className = 'niebieski';
    }    
}*/

var elPrzycisk = document.getElementById('przycisk');
var ellTv = document.getElementsByName('beb');

elPrzycisk.onclick = function(){

function pokaz(el,i){
    ellTv[i].className = 'niebieski';
}

ellTv.forEach(pokaz);
}


// previousSiblingsElement

var poczatekElement = document.getElementById('s2');
var poprzedniElement = poczatekElement.previousElementSibling;
var nastepnyElement = poczatekElement.nextElementSibling;
poczatekElement.className = 'niebieski';
poprzedniElement.className = 'niebieski';
nastepnyElement.className = 'niebieski';

// firstChild & lastChild

var lista = document.getElementsByTagName('ul')[1];
console.log(lista);
var pierwszy =lista.firstElementChild;
var ostatni =lista.lastElementChild;

pierwszy.setAttribute('class','grey');
ostatni.setAttribute('class','grey');

// ****************** NOWOSC ******

//zmien pierwszy element input na button i przypisz wartosc wyslij

var input = document.getElementsByTagName('input')[0];
input.setAttribute('type','button');
input.setAttribute('value','wyslij');

//input.value = 'wyslij';

//tekst www laczy ze strona zsk

var link = document.getElementById('link');
link.setAttribute('href', 'http://www.zsk.poznan.pl/');