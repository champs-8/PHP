<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramentros - form</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h2> Parametros - form </h2>
        <?php
        // parametro por referncia (precisa do &)


        echo "<h3>Pararametro referencia</h3>";
        $valor = 5;
        echo "$valor<br>";
        function somar(&$num) {
            echo "O valor da operação $num^2 + $num = ".$num += pow($num, 2); //5 ao quadrado mais 5 = 30
        };
        somar($valor);
        echo "<br>$valor<br>";

        //parametro por valor

        echo "<h3>Pararamtro Valor</h3>";
        $outrovalor = 8;
        echo "<br>$outrovalor<br>";
        function valor($num) {
            echo "O valor da operação $num^2 + $num = ".$num += pow($num, 2);
        }
        valor($outrovalor);
        echo "<br>$outrovalor";
        
        ?>
    </div>
</body>
</html>