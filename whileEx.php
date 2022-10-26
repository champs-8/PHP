<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Exercício</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../Primeiros passos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h1> While Exercício</h1>
        <form action="whileEx.php" method="get">
            Inicio : <input type="number" name="inicio" id="inicio" min="-500" max="500" placeholder="Valor inicial"><br>
            Final : <input type="number" name="final" id="final" min="-500" max="500" placeholder="Valor final"> <br>
            Incremento : <select name="incre" id="incre">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>
            <input type="submit" value="Calcular">
            <a href="whileEx.php" class="botao">Voltar</a><br><br>

            <?php
            //configurando valores das variaveis
                $inicio = isset($_GET['inicio']) ? $_GET['inicio'] : '';
                $final = isset($_GET['final']) ? $_GET['final'] : '';
                $incre = isset ($_GET['incre']) ? $_GET['incre'] : '';
                switch ($incre) {
                    case 1:
                        $incre = '1';
                        break;
                    case 2: 
                        $incre = '2';
                        break;
                    case 3: 
                        $incre = '3';
                        break;
                    case 4: 
                        $incre = '4';
                        break;
                    case 5:
                        $incre = '5';
                        break;
                };
            //calculos
                if ($inicio < $final) {
                    while ($inicio <= $final) {
                        echo "$inicio ";
                        $inicio += $incre;
                    }
                }
                elseif($inicio > $final) {
                    while ($inicio >= $final) {
                        echo "$inicio ";
                        $inicio -= $incre;
                    }
                }
                elseif($inicio == $final) {
                    echo $inicio;
                };
            ?>
        </form>
    </div>
</body>
</html>