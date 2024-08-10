<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    $r = ($tipo=="s")?$n1+$n2:$n1*$n2;

    echo "Os valores inseridos foram: $n1 e $n2";
    echo "<br/>O resultado foi: $r";
    ?>
</body>
</html>
