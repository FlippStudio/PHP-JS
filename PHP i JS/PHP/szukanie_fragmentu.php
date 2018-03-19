<?php
$tex = "aasaasaabcsaa";
$szukana = "aa";

function zlicz($tekst,$szukana){
    $pom = 0;
    for($i = 0;$i<strlen($tekst);$i++)
    {
        $por = substr($tekst,$i,2);
        if($por == $szukana)
        {
            $pom++;
        }
    }
    echo $pom;
    
};

zlicz($tex,$szukana);

echo "<br>";
function zlicz1($tekst,$szukana)
{
    $licznik = substr_count($tekst,$szukana);
    echo $licznik;
}
zlicz1($tex,$szukana);
?>