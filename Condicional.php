<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ano = $_GET["i"];
    $idade = date("Y")-$ano;

    if($idade<16){
        $voto = "e não é necessário votar";
    }
    else{
        if($idade>=16 && $idade<=18){
            $voto = "o voto opicional";
        }
        else{
            if($idade>18){
                $voto = "o voto é obrigatório";
            }
        }
    }
    echo "Sendo assim você tem $idade, e onde $voto";
    ?>
</body>
</html>