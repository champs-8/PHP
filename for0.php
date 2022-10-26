<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For -  form</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../primeirosPassos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h1> For - form</h1>
        <form action="for1.php" method="get">
            <label for="num"> Número: </label><select name="num" id="num">
                <option value="" selected></option>
                <?php
                    for($c = 1; $c<=10; $c++) {
                        echo "<option value='$c'>$c</opition>";
                    };
                ?>
            </select>
            <input type="submit" value="Tabuada">
            <a href="for0.php" class="botao">Voltar</a>
        </form>
    </div>
</body>
</html>