<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="_css/estilo.css">
    <title>Operadores de atribuição</title>
    <style>
        body {
            font-size: 13pt;
        }
    </style>
</head>
<body>
    <div>
        <h1>Operadores de atribuição</h1>
        <?php
            $preco = $_GET['x'];
            echo "o preço do produto é R$".number_format($preco, 2, ',','.')."<br>" ;
            echo "O produto com 10% de aumento, fica no valor de R$ ".number_format($preco += $preco*0.1, 2,',','.').".";
            echo "<br>O produto com 10% de desconto, fica no valor de R$ ".number_format($preco -= $preco*0.1, 2, ',', '.').".";

            echo "<h2> Ano Informado</h2>";
            $ano = $_GET['ano'];
            echo "O ano anterior á $ano foi ".--$ano.".";

            echo "<h2>Referencias de variaveis</h2>";
            $a = 3;
            $b = $a; //3
            $b += 5; //8
            echo "O valor de a é $a.";
            echo "<br>O valor de b é $b.<br><br>";

            $c = 4;
            $d = &$c; //4 e depois 9
            $d +=5; // 9
            echo "O valor de c é $c.";
            echo "<br>O valor de d é $d."; //$c e $d agora estão ligados e o que acontece com $d, $c tambem recebe.

            echo "<h2>Variaveis de Variaveis</h2>";
            $ig = 'fabios8';
            $$ig = 'Saudade de Camila.';
            echo "<br>O valor de IG é $ig.";
            echo "<br> O valor do outro IG é ".$fabios8.".";

            //o que aconteceu é que o primeiro IG recebeu fabio s8
            //e o segundo IG recebeu como valor da variavel, o 
            //valor que estava no primeiro IG.

        ?>
    </div>
</body>
</html>