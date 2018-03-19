<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['zalogowany']))
        {
            header('location: logowanie.php');
        }
    ?>
    <h2>Zalogowany jako uzytkownik 
    <?php 
        echo $_SESSION['login'];
        echo "<br><a href=\"wyloguj.php?wyloguj=\"> Wyloguj</a>";  
    ?>
    </h2>
    
    
</body>
</html>