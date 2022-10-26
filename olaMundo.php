<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Ola mundo com php</title>
    <style>
        h2 {
            background-color:green;
            color:white;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
    <div>
        <h1>Testando PHP</h1>
        <?php
            echo "<h2>olá <br> mundo!</h2>";
            $idade = 21;
            $salario = 1825.54;
            $nome = (string)"Leonardo";
            $casado = false;
            echo $idade, $salario, $nome, $casado,"<br>";
            echo $nome. " recebe ". $salario. ' reais, e tem '. $idade. ' anos!', "<br>";
            echo "$nome tem $idade anos e recebe $salario reais."
        ?>
    </div>
</body>
</html>