<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura condicional - Exe</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../Primeiros passos/_css/favicon.png" type="image/x-icon">
    <style>
        span.erro {
            font-size: 14pt;
            color: red;
        }
    </style>

</head>
<body>
    <div>
        <h2> Estutura Condicional - Exercício</h2>
        <form action="estruturasCondicionais_02.php" method="get">
            <label for="n1">Nota 1: </label>
            <input type="number" name="n1" id="n1" min="0" max="10" placeholder="Primeira nota"><br>
            <label for="n2">Nota 2: </label>
            <input type="number" name="n2" id="n2" min="0" max="10" placeholder="Segunda nota"><br>
            <input type="submit" value="Calcular" id='calcular'>
            <a href="estruturasCondicionais_02.php">Voltar</a><br><br>

        </form>
        <?php

            // seeting variables
            $nota1 = isset($_GET['n1']) ? $_GET['n1'] :null;
            $nota2 = isset($_GET['n2']) ? $_GET['n2'] :null;
            $media = ($nota1 + $nota2)/2 ;
            $sitacao = '';




            if($media >= 7) {
                $situacao = 'APROVADO';
                echo "Sua média com essas notas foi $media.<br>Você está $situacao.";
            }elseif($media >= 5 && $media < 7){
                $situacao = 'RECUPERAÇÃO';
                echo "Sua média com essas notas foi $media.<br>Você está $situacao.";
            }
            //se deixar so a média, ja vai aparecer de inicio qie esta reprovado.
            elseif($media >= 0 && $media < 5 && $nota1 != '' && $nota2 != ''){
                $situacao = "REPROVADO";
                echo "Sua média com essas notas foi $media.<br>Você está $situacao.";
            };
        ?>
    </div>
    <!-- <script type="text/javascript">
        //aviso do erro caso nao tiver notas suficientes

        //alert
        let menssage = '[ERRO]! Você precisa informar as duas notas para o cálculo.';
        
        //ao clicar no submit
        document.querySelector('#calcular').addEventListener('click', () => {
            // if (document.querySelector('#n1').value||document.querySelector('#n2').value == '') {
            //     alert (menssage);
            // };
        });
    </script> -->
</body>
</html>
