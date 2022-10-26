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
        <h2> Switch - 02</h2>
        <form action="switch_02.php" method="get">
            <label for="dia">Dia da semana: </label>
            <input type="number" name="dia" id="dia" min="2" max="8" placeholder="Dia da semana" required><br>

            <input type="submit" value="Analisar">
            <a href="javascript:history.go(-1)">Voltar</a><br><br>

        </form>
        <?php
            $dia = isset($_GET['dia']) ? $_GET['dia'] : 0;
            
            switch ($dia) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar.";
                    break;
                case 7:
                case 8:
                    echo "Descanse pequeno gafanhoto.";
                    break;
                default : 
                    echo "Dia da semana inválido.";
            };      
        ?>
    </div>
</body>
</html>