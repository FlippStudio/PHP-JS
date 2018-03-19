var elKod = document.getElementById('kod');
var elMiasto = document.getElementById('miasto');
var elPrzycisk = document.getElementById('przycisk');
var elWynik = document.getElementById('wynik');
var wzorKod = /^\d{2}-\d{3}$/;
var wzorMiasto = /\D{3,}/;
elWynik.style.color = 'red';

/*function odblokuj(){
    if(elKod.value != '' && elMiasto.value != '')
        {
            elPrzycisk.disabled = false;
        }
}*/
function sprawdz(){
    if(elKod.value == '' || elMiasto.value == '')
        {
            elWynik.textContent = 'Podaj dane!';
            elKod.focus();
        }
    else if(wzorKod.test(elKod.value) && wzorMiasto.test(elMiasto.value)) 
        {
            elWynik.style.color = 'blue';
            elWynik.textContent = 'Kod pocztowy to: ' + elKod.value + ', Miasto to: ' + elMiasto.value;
        }
    else
        {
            elWynik.style.color = 'red';
            elWynik.textContent = 'Podałeś błędne dane! Spróbuj jeszcze raz.';
            elKod.value ='';
            elMiasto.value = '';
            elKod.focus();
        }
}
//elMiasto.addEventListener('blur',odblokuj);
elPrzycisk.addEventListener('click',sprawdz);