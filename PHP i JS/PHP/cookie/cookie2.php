<?php
  if(!isset($_COOKIE['licznik']))
  {
    $licznik = 1;
  }
  else {
    $licznik = intval($_COOKIE['licznik']);
    $licznik++;
  }

  setcookie('licznik',"$licznik",time()+60*60*24*30);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if($licznik == 1)
      {
        echo "To twoja pierwsza wizyta";
      }
      else {
        echo "To twoja $licznik wizyta";
      }

      if(isset($_GET['usun']))
      {
        setcookie('licznik',false);
        header('location: cookie2.php');
      }
    ?>
    <form method="get">
      <input type="submit" name="usun" value="usun ciasteczko">
    </form>
  </body>
</html>
