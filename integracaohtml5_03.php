<!-- foi testado as variaveis PHP fora do head e nao funcionou -->
<!-- variaveis que vao ser alteradas pelo css precisam estar no head -->




<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Primeiros passos/_css/estilo.css">
    <title>Integração html. Pt 03</title>
    <?php
        // metodo isset funcionando e agora nao vai dar erro inicialmente
        $texto = isset($_GET['text']) ? $_GET['text'] :'Texto Genérico' ;
        $tamanho = isset($_GET['tam'])? $_GET['tam'] : '12pt';
        $cor = isset($_GET['cor'])? $_GET['cor']: '#000000';
    ?>
    <style>
        span.texto {
            /* aqui vai ser passado para o css o valor que foi passado ao php pelo GET */
            font-size : <?php echo $tamanho;?>;
            color : <?php echo $cor;?>;
        }
    </style>
</head>
<body>
    <div>
        <h1>Integração html - parte 03</h1>
        <form action="integracaohtml5_03.php" method = 'get'>
            <label for="text">Texto: </label>
            <input type="text" id='text' name='text' placeholder='Digite seu texto'>
            <label for="tam">Tamanho: </label>
            <select name="tam" id="tam">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="12pt">12</option>
                <option value="14pt" selected>14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select><br>
            <label for="cor">Cor: </label>
            <input type="color" name="cor" id="cor">
            <input type="submit" id="gerar" value='Gerar'>   
        </form><br>

        <?php
            echo "<span class='texto'>$texto</span>";
        ?>
    </div>
</body>
</html>