
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For - Exercício</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../Primeiros passos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h1> For - Exercício</h1>
        <?php
            $num = isset($_GET['num']) ? $_GET['num'] : '';
            echo "Analisando o número $num.<br>";
            $primo = 0;
            if ($num % 2 != 0 ) {
                if ($num % 3 != 0 && $num % 5 != 0) {
                    $primo++;
                    echo "Valores múltiplos: ";
                }
            }
        ?><br>
        <a href='for0Ex.php' class='botao'>Voltar</a>
    </div>
</body>
</html>