<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../Primeiros passos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h2> Switch - 01</h2>

        <h4>Escolha um tipo de operação</h4>
        <form action="switch.php" method="get">
            <label for="num"> Numero : </label>
            <input type="number" name="num" id="num" placeholder="Escolha um número" min="1" max="200"><br>
                <fieldset><legend>Operação</legend>
                    <input type="radio" name="oper" id="dobro" checked value="1">
                    <label for="dobro">Dobro</label><br>
                    <input type="radio" name="oper" id="cubo" value="2">
                    <label for="cubo">Cubo</label><br>
                    <input type="radio" name="oper" id="sqrt" value="3">
                    <label for="sqrt">Raiz quadrada</label><br>
                    <input type="submit" value="Calular" id="calcular">
                    <a href="switch_01.php">Voltar</a>
                </fieldset>
        </form>

        <?php
            //setting variables
                $num = isset($_GET['num']) ? $_GET['num'] : 0;
                $oper = isset($_GET['oper']) ? $_GET['oper'] : 1;
            
            //doing the switch   
            switch ($oper) {
                case 1 : 
                    $res = $num *= 2;
                    break;
                    
                case 2 : 
                    $res = $num ** 3 ;
                    break;
                case 3 : 
                    $sqrt = sqrt($num);
                    $res = number_format($sqrt,2, ',','.');

            }; 
            echo "O numero que voce esolheu foi $num.<br>";
            echo "O resultado da operação é <span class='foco'>$res</span>.<br>";
        ?>
    </div>
</body>
</html>