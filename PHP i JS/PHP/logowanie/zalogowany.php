<?php
session_start();
if(isset($_SESSION['zalogowany']))
{
  echo "<h2>Zalogowany</h2>";
  echo $_SESSION['login'];
  echo "<br /><a href=\"wyloguj.php?wyloguj\">wyloguj</a>";
}
else {
  header('location: logowanie.php');
}

 ?>
