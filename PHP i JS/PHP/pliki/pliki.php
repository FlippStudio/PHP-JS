<?php
$dir = "./test";
if(!($folder = opendir($dir)))
{
  exit('bla');
}
else {
  $sortuj = 0;
  $pliki = array();
  $katalogi = array();

  $dane = scandir($dir,$sortuj);

  foreach ($dane as $value) {
    if($value != "." && $value != "..")
    {
      if(is_file($dir."/".$value))
      {
        $pliki[] = $value;
      }
      else {
        $katalogi[] = $value;
      }
    }
  }
  closedir($folder);
}

if(isset($_GET['sortuj']))
{
  $sortuj = $_GET['sortuj'];
  if($sortuj == 0)
  {
    sort($pliki);
    sort($katalogi);
  }
  else {
    rsort($pliki);
    rsort($katalogi);
  }
}
echo "<p> Pliki:";
echo "<ul>";
foreach ($pliki as $value) {
  echo "<li>
  $value <a href=\"pliki.php?usunP=$value\">Usun</a>
  </li>";
}
echo "</ul>";
echo "</p><hr />";

echo "<p> katalogi:";
echo "<ul>";
foreach ($katalogi as $value) {
  echo "<li>
  $value <a href=\"pliki.php?usunF=$value\">Usun</a>
  </li>";
}
echo "</ul>";
echo "</p><hr />";

if(isset($_GET['usunP']))
{
  $usunP = $_GET['usunP'];
  if(file_exists("./test/$usunP"))
  {
    unlink("./test/$usunP");
    header('location: pliki.php');
  }
  else {
    echo "podany plik juz nie istnieje";
  }
}

if(isset($_GET['usunF']))
{
  $usunF = $_GET['usunF'];
  if(file_exists("./test/$usunF"))
  {
    rmdir("./test/$usunF");
    header('location: pliki.php');
  }
  else {
    echo "Podany folder juz nie istnieje";
  }
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="pliki.php?sortuj=0">sortuj rosnaco</a>
     <a href="pliki.php?sortuj=1">sortuj malejaco</a><br><br>
     <?php
      if(isset($_GET['przyciskF']) && !empty($_GET['folder']))
      {
        $folder = $_GET['folder'];
        if(!file_exists("./test/$folder"))
        {
          mkdir("./test/$folder");
          header('location: pliki.php');
        }
        else {
          echo "Taki folder juz istnieje";
        }
      }

      if(isset($_GET['przyciskP']) && !empty($_GET['plik']))
      {
        $plik = $_GET['plik'];
        if(!file_exists("./test/$plik"))
        {
          if($fd = fopen("./test/$plik", 'w'))
          {
            if(file_exists("./test/$plik"))
            {
              header('location: pliki.php');
              echo "Plik o nazwie $plik został utworzony";
            }
            flose($fd);
          }
        }
        else {
          echo "plik o takiej nazwie istnieje";
        }
      }
     ?>
     <form method="get">
       <input type="text" name="folder">
       <input type="submit" name="przyciskF" value="Folder">
     </form>
     <form method="get">
       <input type="text" name="plik">
       <input type="submit" name="przyciskP" value="plik">
     </form>
   </body>
 </html>
