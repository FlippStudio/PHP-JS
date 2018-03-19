<?php
    session_name('zsk');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesja</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na drugiej stronie! <br>
    Indentyfikatorem sesji jest: <?php echo session_id();?><br>
    <a href="sesja1_2.php">Następna strona</a>
</body>
</html>