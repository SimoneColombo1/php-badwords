<?php

$word = "Ma tu dormi la sotto al ponte... sotto al pontos ma stai sssscherzando... ma do dormi te... io dormo in stazione";

$simbolo = "***";

$ParagrafoCensurato = str_ireplace($_GET['censura'], $simbolo, $word);
$_GET['censura'];

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: blueviolet; color:white">
    <div style="padding: 3rem;">
        <h2> testo originale</h2>

        <p style="font-size: 1.5rem;"><?php echo $word  ?></p>
        <p> <?php echo strlen($word)  ?></p>
    </div>

    <div style="padding: 3rem;">
        <h2> testo censurato</h2>

        <p style="font-size: 1.5rem;"><?php echo $ParagrafoCensurato  ?></p>
        <p> <?php echo strlen($ParagrafoCensurato)  ?></p>
    </div>

    <form action="" method="get">

        <input type="text" name="censura" id="censura"></input>
        <input type="submit">

    </form>
</body>

</html>