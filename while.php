<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../Primeiros passos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h1> While </h1>
        <form action="while.php" method="get">
            <?php
                echo "<h4>Exercicio 1</h4>";
                $c = 1;
                while ($c <= 10) {
                    echo "$c<br>";
                    $c++;   
                };
                $d = 10;
                while ($d >= 1) {
                    echo "$d<br>";
                    $d--;
                };

                echo "<h4>Exercicio 2</h4>";

                // nao pode colocar aspas duplas dentro de um echo
                $linhas = 1;
                while ($linhas <= 5) {
                    //substitui os valores pela valor da variavel
                    echo "Valor $linhas: <input type='number' name='v$linhas' id='v$linhas' min='0' max='100' value='0'><br>";
                    $linhas++;
                };
                //tentar resolver Igual Guanabara
                echo"<input type='submit' value='Calcular'><br>";

                echo "<h4>Exercicio 3</h4>";

                $i = 1;
                while ($i <= 5) {
                    $valor = "num".$i;
                    $url = "v".$i;
                    $$valor = isset($_GET[$url]) ? $_GET[$url] : 0;
                    $i++;
                };

                echo "$num1 $num2 $num3 $num4 $num5";

                
                while($i <= 5) {
                    $v = "num". $i;
                    echo "Valor $i : ". $$v . "<br>";
                }
            ?>
        </form>       
    </div>
</body>
</html>