<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h2> Rotina </h2>
        <?php
        // Procedimento

        // $num1 = isset($_GET['num1']) ? $_GET['num1'] : '';
        // $num2 = isset($_GET['num2']) ? $_GET['num2'] : '';
        // function soma($a, $b) {
        //     $s = $a + $b;
        //     echo "O valor da soma entre $a e $b é <span class='foco'>$s</span>.<br>";
        // };
        // soma($num1, $num2);


        //Função 

        $num1 = isset($_GET['num1']) ? $_GET['num1'] : '';
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : '';
        function soma($a, $b) {
            $s = $a + $b;
            return $s;
        };
        $res = soma($num1, $num2);
        echo "O valor da soma entre $num1 e $num2 é <span class='foco'>$res</span>.<br>";
        echo'<br><br>';

        // usando multiplos parametros nas funções php
        function somamult() {
            $arg = func_get_args();
            $tot = func_num_args();
            $soma = 0;
                for($i = 0; $i < $tot; $i++) {
                    $soma += $arg[$i];
                }
                return $soma;
        };
        $res = somamult(2,6,5,4,8);
        echo "A soma dos valores passados, foi de $res.<br>"
        ?>
        <a href="rotinas0.php" class="botao">Voltar</a>
    </div>
</body>
</html>
