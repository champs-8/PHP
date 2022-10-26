<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../primeirosPassos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h1> Do While - Exercício </h1>
        <form action="doWhileEx.php" method="get">
            <label for="num">Número: </label>
            <select name="num" id="num">
                <option value="" selected></option>
                <?php
                    for($c = 1; $c <= 10; $c++) {
                        echo "<option value='$c'>$c</option>";
                    };
                ?>
            </select>
            <input type="submit" value="Tabuada">
            <a href="doWhileEx.php" class="botao">Voltar</a><br><br>
        </form>
        <?php
            $numero = isset($_GET['num']) ? $_GET['num'] : null;
            
            function tabu ($num) {
                $c = 1;
                do {
                    echo "$num x $c = ".$num * $c. "<br>";
                    $c++;
                }while ($c <= 10);
            }
            // tabu($numero); poderia ser usada a função, mas ja mostraria os valores vs vazio.
            switch ($numero) {
                case '':
                    echo "Informe um valor.";
                    break;
                case 1 : 
                    tabu(1);
                    break;
                case 2 : 
                    tabu(2);
                    break;
                case 3 : 
                    tabu(3);
                    break;
                case 4 : 
                    tabu(4);
                    break;
                case 5 : 
                    tabu(5);
                    break;
                case 6 : 
                    tabu(6);
                    break;
                case 7 : 
                    tabu(7);
                    break;
                case 8 : 
                    tabu(8);
                    break;
                case 9 : 
                    tabu(9);
                    break;
                case 10 :
                    tabu(10);
                    break; 
            };
        ?>
    </div>
</body>
</html>