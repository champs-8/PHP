<!-- vai ocorrer o mesmo erro inicial que houve na parte 1 -->
<!-- mas estou ciente disso -->



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Primeiros passos/_css/estilo.css">
    <title>Integração html. Pt2</title>
</head>
<body>
    <div>
        <!-- HTML -->
        <h1> Integração html - Parte 2</h1>
        <form method="get" action="integracaohtml5_02.php">
            Nome : <input type="text" placeholder = "Digite seu nome" name= 'nome'><br>
            Ano de nascimento : <input type="number" name="nasc" placeholder="AAAA"><br>
            <fieldset>
                <legend>Sexo</legend>
                <input type="radio" name="sexo" id = "masc" value="Masculino" checked>
                <label for="masc">Masculino</label>
                <input type="radio" name="sexo" id="fem" value= 'Feminino'>
                <label for="fem">Feminino</label>
            </fieldset><br>
            <input type="submit" value="Enviar"><br>
            <!-- link para voltar -->
            <a href="integracaohtml5_02.php">Voltar</a>
        </form>

        <!-- PHP -->
        <?php
            
            $nome = $_GET['nome'];
            $nasc = $_GET['nasc'];
            $sexo = $_GET['sexo'];
            // formatação da data
            $idade = date('Y') - $nasc;

            echo "$nome é do sexo $sexo e tem $idade anos."
        ?>
    </div>
</body>
</html>