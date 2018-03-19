<?php

    if(isset($_GET['usun']))
    {
        setcookie('wiek','');
        header('location: index.php');
    }

    if(empty($_COOKIE['wiek']) && empty($_GET['wiek']))
    {
        include('header.html');
        include('form.html');
        include('footer.html');
    }
    elseif(isset($_GET['wiek']) && !empty($_GET['wiek'])) 
    {
        setcookie('wiek',"{$_GET['wiek']}",time()+60*60*24*365);
        include('header.html');
            echo "<p>Dziękuje za przesłanie formularza</p>";
            echo "<p><a href=\"index.php\"?usun=>Powrot do formularza</a></p>";
        include('footer.html');
    }
    else
    {
        include('header.html');
        echo "Twoj wiek to: {$_COOKIE['wiek']}";
        include('footer.html');
    }
?>