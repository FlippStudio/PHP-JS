<?php
    if(!isset($_COOKIE['zsk']))
    {
        session_name('zsk');
    }
    session_start();
    $_SESSION['imie'] = "Filip";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesja</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na stronie! <br>
    Indentyfikatorem sesji jest: <?php echo session_id();?><br>
    <a href="sesja1_1.php">Następna strona</a>
    <a href="sesja1.php?usunSesje=">Usuń</a>
        <?php
        if(isset($_GET['usunSesje']))
        {
            session_destroy('zsk');
        }
        ?>
</body>
</html>