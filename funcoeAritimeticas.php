<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções Aritméticas</title>
    <style>
        h2 {
            font-size: 15pt;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <h1>Funções Aritméticas</h1>
        <?php
            $v1 = $_GET['x'];
            $v2 = $_GET['y'];        
        echo "<h2>Os valores recebidos foram $v1 e $v2.</h2>";
        echo "O valor absoluto de $v2 é ". abs($v2);
        echo "<br>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
        $v3 = pow($v1, $v2);
        echo "<br>A raiz quadrada de $v2 é ". sqrt($v2);
        echo "<br>O valor de $v3 arredondado é ". round($v3);
        echo "<br>A parte inteira de $v1 é ". intval($v1);
        echo "<br>O valor de $v1 em moeda é R$ ". number_format($v1, 2, ",", ".");

        ?>
    </div>
</body>
</html>