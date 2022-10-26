<!-- aconteceu que nesse arquivo, fiz junto com o html o php, e conflitou no primeiro acesso -->
<!-- entao deve-se fazer os aquivos separados, quando for fazer ancoragem -->




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários e PHP. Pt1</title>
    <link rel="stylesheet" href="../Primeiros passos/_css/estilo.css">
</head>
<body>
    <div>
        <h1>Formulários e PHP - Parte 1</h1>

        <!-- vai informar o method e o action, escrever o codigo -->

        <form method = 'get' action="integracaohtml5_01.php">
            <h3>Informe um valor para ver a raiz quadrada dele:</h3>
            <input type="number" name='valor'>
            <input type="submit" value="calcular">
        </form>


        <!-- link para voltar ao formulario -->

        <a href="../Primeiros passos/integracaohtml5.php">Home</a>

        <?php
            echo"<br>";
            //vai receber os valores do input
            //URL
            $valor = $_GET['valor'];
            //Exponenciação
            $square = pow($valor, 2);
            $sqrt = sqrt($valor);
            $squareFormat = number_format($square,0,',','.');
            echo "O quadrado de $valor é <b>$squareFormat</b>.<br>";
            echo "A raiz quadrada de $valor é <b>".number_format($sqrt,1,',','.')."</b>.<br>";

        ?>
    </div>
</body>
</html>