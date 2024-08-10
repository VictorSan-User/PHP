<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ano = $_GET["an"];
    $idade = 2024-$ano;
    echo "Quem nasceu em $ano tem $idade anos de idade.";
    $sit = ($idade>=18) ? "<br/>É obrigado a votar": "<br/>Tem o voto facultativo";
    echo "$sit";
    ?>
</body>
</html>