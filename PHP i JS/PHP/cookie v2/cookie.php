<?php
    if(!isset($_COOKIE['szkola'])):
        setcookie('szkola','zsk');
        $komunikat = "Cookie o nazwie szkola nie było ustawione";
    else:
        $komunikat = "Cookie o nazwie szkole jest ustawione<br>";
        $komunikat .= "Jego wartość to: ".$_COOKIE['szkola'];
    endif;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo $komunikat;
    ?>
</body>
</html>