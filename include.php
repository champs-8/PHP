
<!-- Vai ser feito aqui exemplos de inclusao de arquivos externos  -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h2> Include </h2>
        <?php
            include "funcoes.php";
            echo "<h1>Testando ele (new functions)</h1>";
            ola();    
            valor(5); 
            
            require "funcoes2.php";
            echo "<h1>Testando ele (new functions)</h1>";
            ola();    
            valor(5);
        ?>
    </div>
</body>
</html>