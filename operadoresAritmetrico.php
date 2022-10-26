<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Operador Aritméticos</h1>
        <?php
        echo "Olá mundo!<br>";
        $n1 = $_GET["a"];
        $n2 = $_GET['b'];
        $soma = $n1 + $n2;
        echo "A soma de $n1 + $n2 é igual a $soma.<br>";
        echo "A soma vale ".($n1+$n2);
        echo "<br>A subtração vale ".($n1-$n2);
        echo "<br>A multiplicação vale ".($n1*$n2);
        echo "<br>A divisão vale ".($n1/$n2);
        echo "<br>O módulo vale ".($n1%$n2);

        //http://127.0.0.1/Primeiros%20passos/operadoresAritmetrico.php?a=5&b=8
        echo "<h2> Valores Recebidos: $n1 e $n2.</h2>";

        ?>
    </div>
</body>
</html>