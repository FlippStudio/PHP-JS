<?php
    session_name('zsk');
    session_start();
    unset($_SESSION['imie']); //usuniecie zmiennej
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesja</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na trzeciej stronie! <br>
    Indentyfikatorem sesji jest: <?php echo session_id();?><br>
    <a href="sesja1.php">Pierwsza strona</a>

</body>
</html>