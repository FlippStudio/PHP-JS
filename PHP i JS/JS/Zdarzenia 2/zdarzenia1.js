var auta = document.getElementById('auta');
var heh = document.getElementById('a');
function ul(){
    heh.textContent = auta.value;
    document.getElementById('a').style.color = 'red';
}
auta.addEventListener('change',ul);
