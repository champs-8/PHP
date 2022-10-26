<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../primeirosPassos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h1> For</h1>
            <?php
                $n = isset($_GET['num']) ? $_GET['num'] : '1';
                for ($c = 1; $c <= 10; $c++ ) {
                    $r = $c * $n;
                    echo "$n x $c = $r<br>";
                };
            ?>
            <a href="for0.php" class="botao">Voltar</a> 
    </div>
</body>
</html>