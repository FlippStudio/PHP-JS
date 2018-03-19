<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz</title>
</head>
<body>
<!--    <form action="dane.php" method="get"> domyslna metoda to get
        <input type="text" name="imie" placeholder="imie"><br>
        <input type="text" name="nazwisko" placeholder="nazwisko"><br>
        <input type="submit">
    </form>-->
    
<!--<form action="dane.php" method="post">
    <input type="text" name="login" placeholder="login"><br>
    <input type="password" name="haslo" placeholder="haslo"><br>
    <input type="submit">
</form>-->

    <form method="get">
        <input type="radio" name="kolor" value="biały">Biały<br>
        <input type="radio" name="kolor" value="czerwony">Czerwony<br>
        <input type="radio" name="kolor" value="niebieski">Niebieski<br>
        <input type="radio" name="kolor" value="czarny">Czarny <br>
        <input type="submit" name="przycisk">
    </form>
    <?php
    if(isset($_GET['przycisk'])){
    if(isset($_GET['kolor']))
    {
        echo "zaznaczyłeś kolor: {$_GET['kolor']}";
    }
    else
    {
        echo "nie zaznaczyłeś pola radio";
        
    }   
    }
    ?>
</body>
</html>