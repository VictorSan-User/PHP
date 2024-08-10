<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <?php
    $valor_inicial= $_GET["v"];
    $desconto= $valor_inicial*0.10;
    $valor_final = $valor_inicial-$desconto;

    echo "O produto no valor de: $valor_inicial<br/>Com o desconto de 10% ficará com: ". number_format($valor_final,2);

    ?>
</body>
</html>