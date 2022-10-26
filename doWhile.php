<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../Primeiros passos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h1> Do While - fatorial </h1>
        <?php

        //variaveis
            $fat = isset($_GET['fat']) ? $_GET['fat'] : null;            

        //logica
            $c = $fat;
            do {
                --$c;
                echo "$fat ";
                $fat *= $c;
                //esse if serve so para pegar o ultimo resultado
                if($c == 2){
                    $res = $fat;
                }   
            }while($c > 1);

            //usei o if para nao mostrar a frase desde o inicio da aba
            if (isset($_GET['fat']) && isset($res)) {
                //tive que pegar pelo get_[] porque a variavel fat está com outro valor
                echo "<br><br>O fatorial de ".$_GET['fat']. " é <b>$res</b>.";
            };
        ?>
        <form action="doWhile.php" method="get">
            <label for="fat">Escolha um valor:</label>
            <input type="number" name="fat" id="fat" min="1" max="12" value="1"><br>
            <input type="submit" value="Calcular">
            <a href="doWhile.php" class="botao">Voltar</a>


        </form>
    </div>
</body>
</html>
