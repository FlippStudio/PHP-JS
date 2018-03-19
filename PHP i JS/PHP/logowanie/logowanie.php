<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
      <input type="text" name="login" placeholder="login">
      <input type="password" name="haslo" placeholder="haslo">
      <input type="submit" name="przycisk" value="Zaloguj">
    </form>
  </body>
</html>
