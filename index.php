<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <?php
    $a = 3;
    $b = $a;
    $b +=17;

    $c= &$d;
    $d=12;

    echo "Valor de a: $a<br/>Valor de b: $b";
    echo "Valor de c: $c<br/>Valor de d: $d";
    ?>
</body>
</html>
