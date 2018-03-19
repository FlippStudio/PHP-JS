<?php
  if(!isset($_COOKIE['szyper']))
  {
    setcookie('szyper','Nie zdasz');
    echo "nie było utworzone ciasteczko";
  }
  else {
    echo "Cookie jest utworzone <br /> jego wartosc to {$_COOKIE['szyper']}";
  }
?>
