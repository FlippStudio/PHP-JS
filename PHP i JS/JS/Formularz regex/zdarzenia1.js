var elImie = document.getElementById('imie');
var elNazwisko = document.getElementById('nazwisko');
var elLogin = document.getElementById('login');
var elMail1 = document.getElementById('mail1');
var elMail2 = document.getElementById('mail2');
var elPass1 = document.getElementById('pass1');
var elPass2 = document.getElementById('pass2');
var elData = document.getElementById('data');
var elRegulamin = document.getElementById('regulamin');
var elPrzycisk = document.getElementById('przycisk');
var elPopraw = document.getElementById('popraw');
var elKomunikat = document.getElementById('komunikat');

elKomunikat.style.color = 'red';

var regImie = /^[a-ząęćźżńłó]{2,16}$/i;
var regNazwisko = /^[a-ząężźćńół]{2,20}(\-[a-ząężźćńół]{2,20})?$/i;
var regLogin = /^[a-z0-9]{1}[\w\.\-]{1,25}[a-z0-9]{1}$/i;
var regMail = /^[a-z]{1}[\w|\.|\-]{0,30}@(\w{1,20}\.){1,3}[a-z]{1,3}$/i;
//bezpieczne hasło: małe i duże litery, cyfry, znak specjalny
var regPass = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/;

function sprawdzImie() {
    var sprawdz = regImie.test(elImie.value);
      if (sprawdz){
        elKomunikat.textContent = '';
    }else{
        elKomunikat.textContent = 'Błędne imię';
        elImie.focus();
    }
}

function sprawdzNazwisko() {
    var sprawdz = regNazwisko.test(elNazwisko.value);
      if (sprawdz){
        elKomunikat.textContent = '';
    }else{
        elKomunikat.textContent = 'Błędne nazwisko';
        elNazwisko.focus();
    }
}

function sprawdzLogin() {
    var sprawdz = regLogin.test(elLogin.value);
      if (sprawdz){
        elKomunikat.textContent = '';
    }else{
        elKomunikat.textContent = 'Błędny login';
        elLogin.focus();
    }
}

function mail (){
    if (elMail1.value != elMail2.value){
        elKomunikat.textContent = 'Adresy poczty są różne';
        elMail1.disabled = false;
        elMail2.disabled = true;
        elMail1.focus();
        elMail1.value = '';
        this.value = '';
    }else{
        this.disabled = true;
        elKomunikat.textContent = '';
    }
}

function pass (){
    if (elPass1.value != elPass2.value){
        elKomunikat.textContent = 'Hasła są różne';
        elPass1.disabled = false;
        elPass2.disabled = true;
        elPass1.focus();
        elPass1.value = '';
        this.value = '';
    }else{
        this.disabled = true;
        elKomunikat.textContent = '';
    }
}


function blokuj (){
    sprawdz = regMail.test(elMail1.value);
    if(sprawdz){
    elMail2.disabled = false;
    elMail2.focus();
    this.disabled = true;
    elKomunikat.textContent = '';
    }else{
       elKomunikat.textContent = 'Mail nie spełnia wymagań';
       elMail1.focus();

    }



}

/*function blokujPass (){
    var sprawdz = regPass.test(elPass1.value);
    if(sprawdz){
        elPass2.disabled = false;
        elPass2.focus();
        this.disabled = true;
    }else{
        elKomunikat.textContent = 'Hasło nie spełnia wymagań';
       elPass1.focus();
    }


}*/

function sprawdzRegulamin() {
    if (elRegulamin.checked){
        elPrzycisk.disabled = false;
    } else {
        elPrzycisk.disabled = true
    }
}


function odblokuj1() {
    var zablokowane = document.querySelectorAll('input[disabled]');
    if (zablokowane.length > 0){
        for (var i=0; i < zablokowane.length; i++){
                zablokowane[i].disabled = false;
        }
       //console.log(zablokowane);
    }
}

function wyslij() {
    var puste = false;
    var pola = document.querySelectorAll('input');
    for (var i=0; i<pola.length; i++){
        if (pola[i].value == ''){
            puste = true;
            break;
        }
    }

    if (puste){
        elKomunikat.textContent = 'Wypełnij wszystkie pola';
    } else {
    document.write('<div>');
    document.write('Imię: ' + elImie.value + '<br>');
    document.write('Nazwisko: ' + elNazwisko.value + '<br>');
    document.write('Login: ' + elLogin.value + '<br>');
    document.write('Mail: ' + elMail1.value + '<br>');
    document.write('Data urodzenia: ' + elData.value + '<br>');
    document.write('</div>');
}
}

function kolor(){
    var kol = document.getElementById('kolor');
    var srednieHaslo = /^[A-z0-9]{6,12}$/;
    var bezpieczneHaslo = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/;
    var sprawdz = bezpieczneHaslo.test(elPass2.value);
    var sprawdz1 = srednieHaslo.test(elPass2.value);
    if(sprawdz)
        {
            kol.innerHTML = '<img src="zielo.png" alt="#">';
        }
    else if(sprawdz1)
        {
            kol.innerHTML = '<img src="pom.png" alt="#">';
        }
    else
        {
            kol.innerHTML = '<img src="czer.png" alt="#">';
        }
}

elImie.addEventListener('blur', sprawdzImie);
elNazwisko.addEventListener('blur', sprawdzNazwisko);
elLogin.addEventListener('blur', sprawdzLogin);
elMail1.addEventListener('blur', blokuj);

elMail2.addEventListener('blur', mail);
elPass2.addEventListener('blur', pass);
elPass2.addEventListener('blur', kolor);
elRegulamin.addEventListener('change', sprawdzRegulamin);
//elPopraw.addEventListener('click', odblokuj);
elPopraw.addEventListener('click', odblokuj1);
elPrzycisk.addEventListener('click', wyslij);
