<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura condicional</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../Primeiros passos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <!-- formulario basic -->
        <h1>Estrutura condicional</h1>
        <form action="estruturasCondicionais.php" method="get">
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name" placeholder="Ex: Alberto"><br>
            <label for="year">Ano Nascimento: </label>
            <input type="number"  name="year" id="year" placeholder="Ex: 1987" min="0" max="2022"><br>
            <input type="submit" name="verify" id="verify" value="Calcular">
            <a href="estruturasCondicionais.php">Voltar</a><br><br>
        </form>
        <?php
        //setting as variaveis
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $year = isset($_GET['year']) ? $_GET['year'] : '' ;
        $age = isset($_GET['year']) ? date("Y") - $year : '' ;
        
        //usando estrutura condicional com IF
        //configurei para nao mostrar a mensagem, pelo menos antes de informar a idade
        if($age == '') {
            echo"<i>Informe uma Idade</i><br>";
        }else{
            if($age >= 18) {
            echo" $name have $age years and can vote and drive.";
            }if($age < 18 && $age != ''){
            echo "$name have $age years and don't can vote and drive.";
            };
        }
        
        ?>
    </div>
</body>
</html>
