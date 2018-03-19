var elImie = document.getElementById('imie');
var eLNazwisko = document.getElementById('nazwisko');
var eLLogin = document.getElementById('login');
var eLMail1 = document.getElementById('mail1');
var eLMail2 = document.getElementById('mail2');
var eLPass1 = document.getElementById('pass1');
var eLPass2 = document.getElementById('pass2');
var eLData = document.getElementById('data');
var eLRegulamin = document.getElementById('regulamin');
var eLPopraw = document.getElementById('popraw');
var eLPrzycisk = document.getElementById('przycisk');
var eLPopraw = document.getElementById('popraw');
var eLKomunikat = document.getElementById('komunikat');

eLKomunikat.style.color = 'red';

// onload

/*
window.onload = function(){
    alert('4Te');
}
*/

/*elImie.onblur = function(){
    if(elImie.value.length >2 && elImie.value.length < 10)
        {
            eLKomunikat.textContent = '';
        }
    else
        {
            eLKomunikat.textContent = 'Błedne dane';
        }
}*/

/*
function sprawdz(){

    if(elImie.value.length >2 && elImie.value.length < 10)
        {
            eLKomunikat.textContent = '';
        }
    else
        {
            eLKomunikat.textContent = 'Błedne dane';
        }

}
*/
/*
elImie.addEventListener('blur', sprawdz);*/

function usprawdz(){
        if(this.value.length >2 &&this.value.length < 10)
        {
            eLKomunikat.textContent = '';
        }
    else
        {
            eLKomunikat.textContent = 'Błedne dane';
            this.focus();
        }
}

function mail(){
    if(eLMail1.value != eLMail2.value)
        {
            eLKomunikat.textContent = 'Adresy poczty są rozne';
            eLMail1.disabled = false;
            eLMail1.focus();
            eLMail1.value = '';
            this.value = '';
        }
    else
        {
            eLKomunikat.textContent = '';
            this.disabled = true;
        }
}

function blokuj(){
    eLMail2.disabled = false;
    eLMail2.focus();
    this.disabled = true;
}

elImie.addEventListener('blur', usprawdz);
eLNazwisko.addEventListener('blur', usprawdz);
eLLogin.addEventListener('blur', usprawdz);
eLMail2.addEventListener('blur',mail);
eLMail1.addEventListener('blur',blokuj);
eLPass2.addEventListener('blur',haslo);
eLPass1.addEventListener('blur',blokuj1);
eLRegulamin.addEventListener('change',sprawdzRegulamin);
eLPopraw.addEventListener('click',odblokuj1);
eLPrzycisk.addEventListener('click',wyslij);
function haslo(){
    if(eLPass1.value != eLPass2.value)
        {
            eLKomunikat.textContent = 'Hasla są rozne';
            eLPass1.disabled = false;
            eLPass1.focus();
            eLPass1.value = '';
            this.value = '';
        }
    else
        {
            eLKomunikat.textContent = '';
            this.disabled = true;
        }
}

function blokuj1(){
    eLPass2.disabled = false;
    eLPass2.focus();
    this.disabled = true;
}

function sprawdzRegulamin(){
    if(eLRegulamin.checked == true)
        {
            eLPrzycisk.disabled = false;
        }
    else
        {
            eLPrzycisk.disabled = true;
        }
}

/*function odblokuj(){
    var zablokowane = document.getElementsByTagName('input');
    if(zablokowane.length > 0)
        {
            for(var i=0;i<zablokowane.length;i++)
                {
                    if(zablokowane[i].disabled == true)
                        {
                            zablokowane[i].disabled = false;
                        }
                }
        }
}*/
//ver 1.1
function odblokuj1(){
    var zablokowane = document.querySelectorAll('input[disabled]');
    for(var i = 0; i < zablokowane.length;i++)
        zablokowane[i].disabled = false;
}

function wyslij(){
    var puste = false;
    var input = document.querySelectorAll('input');
    for(var i = 0; i<input.length;i++)
        {
            if(input[i].value == '')
                {
                    puste = true;
                    break;
                }
        }
    if(puste)
        {
            eLKomunikat.textContent = 'Wypełnił wszystkie pole';
        }
    else
        {

            document.write('<div>');
            document.write('Imie: ' + elImie.value + '<br />');
            document.write('Nazwisko: ' + eLNazwisko.value + '<br />');
            document.write('Login: ' + eLLogin.value + '<br />');
            document.write('Mail: ' + eLMail1.value + '<br />');
            document.write('Hasło: ' + eLPass1.value + '<br />');
            document.write('Data: ' + eLData.value + '<br />');
            document.write('</div>');
        }

}
