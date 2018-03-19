var elLogin = document.getElementById('login');
var elHaslo = document.getElementById('haslo');
var elWynik = document.getElementById('wynik');
var elPrzycisk = document.getElementById('przycisk');
var pom = 0;

elPrzycisk.onclick = function(){
    if(elLogin.value == "Filip" && elHaslo.value == "Okoń1234")
        {
            elWynik.style.color = "red";
            elWynik.textContent = elHaslo.value;
        }
    else
        {
            elWynik.style.color = "green";
            pom = pom + 1;
            elWynik.textContent = "Błędne hasło, sprobuj jeszcze raz. Ilość prob: " + (3 - pom);    
        }
    if(pom == 3)
        {
            window.location = location.href;
            pom == 0;
        }
}
