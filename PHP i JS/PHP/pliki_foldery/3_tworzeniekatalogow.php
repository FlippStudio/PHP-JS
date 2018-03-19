<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pliki i foldery - sortowanie</title>
</head>
<body>
   <form action="">
       <h2>Dodaj folder</h2><br>
       <input type="text" name="folder"><br>
       <input type="submit" name="przycisk" value="dodaj folder">
   </form>
    <?php
    
    if(isset($_GET['usunK']))
    {
        $usunK = $_GET['usunK'];
        if(file_exists("./test/$usunK"))
        {
            rmdir("./test/$usunK");   
        }
    }
    
    if(isset($_GET['usunP']))
    {
        $usunP = $_GET['usunP'];
        if(file_exists("./test/$usunP"))
        {
            unlink("./test/$usunP");
        }
    }
    
    if(isset($_GET['przycisk']) && !empty($_GET['folder']))
    {
        $folder = $_GET['folder'];
        if(!file_exists("./test/$folder"))
        {
            mkdir("./test/$folder");
        }
        else
        {
            echo "<h4>Folder o nazwie $folder<br> Podaj inną nazwę!";
        }
    }
    
    
        $dir = "./test";
        if(!($folder = opendir($dir)))
        {
            exit("Nie można otworzyć folderu");
        }
        else
        {
            $sortuj = 0;
            $dane = scandir($dir, $sortuj);
            $pliki = array();
            $katalogi = array();
            foreach($dane as $value)
            {
                if($value != "." && $value != "..")
                {
                    if(is_file($dir."/".$value))
                    {
                        $pliki[] = $value;
                    }
                    else
                    {
                        $katalogi[] = $value;
                    }
                }
            }
            closedir($folder);
            if(isset($_GET['sortuj']))
            {
                $sortuj = $_GET['sortuj'];
                if($sortuj == 0)
                {
                    sort($pliki);
                    sort($katalogi);
                }
                else
                {
                    rsort($pliki);
                    rsort($katalogi);
                }
            }
            
            echo "<p>Pliki: <br>";
            echo "<ul>";
            foreach($pliki as $value)
            {
                echo "<li>$value <a href=\"3_tworzeniekatalogow.php?usunP=$value\">Usun</a></li>";
            }
            echo "</ul>";
            echo "</p><hr>";
            
            echo "<p>Katalogi: <br>";
            echo "<ul>";
            foreach($katalogi as $value)
            {
                echo "<li>$value <a href=\"3_tworzeniekatalogow.php?usunK=$value\">Usun</a></li>";
            }
            echo "</ul>";
            echo "</p><hr>";
        }
    ?>
    
    <a href="3_tworzeniekatalogow.php?sortuj=0">Sortuj malejaco</a>
    <a href="3_tworzeniekatalogow.php?sortuj=1">Sortuj rosnaco</a>
</body>
</html>