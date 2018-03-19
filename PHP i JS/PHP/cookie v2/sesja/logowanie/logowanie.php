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
    <h2>Logowanie do systemu</h2>
    <?php
        if(isset($_SESSION['blad']))
        {
            echo $_SESSION['blad'];
        }
    
        if(isset($_SESSION['zalogowany']))
        {
            header('location: zalogowany.php');
        }
    ?>
    <form action="sprawdz.php" method="post">
        <input type="text" name="login" placeholder="login"><br><br>
        <input type="password" name="haslo" placeholder="hasło"><br><br>
        <input type="submit" name="przycisk">
    </form>
</body>
</html>