<?php
    $dni = 30;
    
    if(!isset($_COOKIE['licznik']))
    {
        $licznik = 1;
    }
    else
    {
        $licznik = intval($_COOKIE['licznik']);
        $licznik++;
    }

    setcookie('licznik',"$licznik",time()+60*60*24*$dni);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Licznik</title>
</head>
<body>
    <?php
        if($licznik == 1)
        {
            echo "Liczba odwiedzin w ciagu ostatnich $dni dni: <span style=\"color: red;\">$licznik</span> raz";
        }
        else
        {
            echo "Liczba odwiedzin w ciagu ostatnich $dni dni: <span style=\"color: red;\">$licznik</span> razy";
        }
    ?>
    <form action="cookie3.php">
        <input type="submit" name="usun" value="usun ciasteczko">
    </form>
    
    <?php
        if(isset($_GET['usun']))
        {
            //setcookie('licznik',false);
            setcookie('licznik', '',time()-100);
            header('location: ./cookie3.php');
            
        }
    ?>
</body>
</html>