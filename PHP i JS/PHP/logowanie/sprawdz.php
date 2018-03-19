<?php
session_start();

if(isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo']))
{
  if($polaczenie = new mysqli('localhost','root','','logowanie'))
  {
    $login = htmlspecialchars($_POST['login']);
    $haslo = htmlspecialchars($_POST['haslo']);
    $zapytanie = "SELECT `login`,`haslo` FROM `uzytkownicy` WHERE `login` = '$login' AND `haslo` = '$haslo'";
    if($rezultat = $polaczenie->query($zapytanie))
    {
      if($rezultat->num_rows == 1)
      {
        $_SESSION['zalogowany'] = true;
        $_SESSION['login'] = $login;
        unset($_SESSION['blad']);
        header('location: zalogowany.php');
      }
      else {
        $_SESSION['blad'] = "bledne dane logowania";
        //header('location: logowanie.php');
      }
    }
    else {
      echo "bledne zapytanie";
    }
  }
  else {
    echo "bledne polaczenie z baza";
    //header('location: logowanie.php');
  }
}
else {
  header('location: logowanie.php');
}
 ?>
