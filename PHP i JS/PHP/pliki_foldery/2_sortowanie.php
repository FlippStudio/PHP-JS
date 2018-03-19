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
            if(isset($_GET['sortuj']))
            {
                $sortuj = $_GET['sortuj'];
            }
            $dane = scandir($dir, $sortuj);
            echo "<li>";
            foreach($dane as $value)
            {
                if($value != "." && $value != "..")
                {
                    echo "<li>$value</li>";
                }
            }
            echo "</li>";
            closedir($folder);
        }
    ?>
    
    <a href="2_sortowanie.php?sortuj=0">Sortuj malejaco</a>
    <a href="2_sortowanie.php?sortuj=1">Sortuj rosnaco</a>
</body>
</html>