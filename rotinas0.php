<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas - form</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h2> Rotina - form </h2>

        Escolha dois valores para serem somados <br>

        <form action="rotinas1.php" method="get">
            <label for="num1">1° número: </label>
            <input type="number" name="num1" id="num1"><br>
            <label for="num2">2° número: </label>
            <input type="number" name="num2" id="num2"><br>
            <input type="submit" value="Somar">
            <a href="rotinas0.php" class="botao">Voltar</a>
        </form>
    </div>
</body>
</html>
