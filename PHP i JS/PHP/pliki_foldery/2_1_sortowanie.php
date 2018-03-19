<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pliki i foldery - sortowanie</title>
</head>
<body>
    <?php
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
                echo "<li>$value</li>";
            }
            echo "</ul>";
            echo "</p><hr>";
            
            echo "<p>Katalogi: <br>";
            echo "<ul>";
            foreach($katalogi as $value)
            {
                echo "<li>$value</li>";
            }
            echo "</ul>";
            echo "</p><hr>";
        }
    ?>
    
    <a href="2_1_sortowanie.php?sortuj=0">Sortuj malejaco</a>
    <a href="2_1_sortowanie.php?sortuj=1">Sortuj rosnaco</a>
</body>
</html>