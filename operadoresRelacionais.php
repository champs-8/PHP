<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Primeiros passos/_css/estilo.css">
    <title>Operadores Relacionais</title>
</head>
<body>
    <div>
        <h1>Operadores Relacionais</h1>
        <?php
        //pegando valores por URl
        $n1 = $_GET['x'];
        $n2 = $_GET['y'];
        echo "O n1 foi $n1 e o n2 $n2. <br>";

        // operador Unário
        $maior = $n1 > $n2 ? $maior = $n1 : $n2; 
        echo "O maior valor até agora foi $maior <br><br>";

        $res = $n1 > $n2 ? $n1+$n2 : $n1 - $n2;
        echo "Outro caso de operador Unário,<br>$n1 > $n2 ? $n1+$n2 : $n1 - $n2, <br> resultado foi $res. <br><br>";

        echo "<h4>Situação escolar<br></h4>";
        //passando valores URL
        $v1 = $_GET['a'];
        $v2 =$_GET['b'];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $v1 e $v2.<br>";

        //resultado
        $r = $tipo == 's' ? $v1 + $v2 : $v1 * $v2;
        echo "O resultado da situação foi $r. <br>";

        echo "<h4>Exercício 3</h4>";
        //utilizando valores passados acima
        $media = ($n1 + $n2)/2;

        //numero formatado com 1 casa decimal e o ponto sendo substituido pela virgula.
        echo "A nota1 foi $n1 e a nota2 foi $n2.<br>A media do aluno foi ". number_format($media, 1, ',','.').".<br>";
        //$situacao = $media > 6 ? 'APROVADO' : 'REPROVADO';
        echo "A situação do aluno é :". ($media <= 6 && $media >= 3 ? '<b>APROVADO</b>' : '<b>REPROVADO</b>'.".");

        //votação
        echo "<h4>Obrigatoriedade de voto- Exercício 4</h4>";
        echo "Os votos são obrigatórios entre 18 e 64 anos.<br>";
        //pegando valor URL
        $nascimento = $_GET['ano'];
        $idade  = 2022 - $nascimento;
        echo "Quem nasceu em $nascimento tem $idade anos de idade<br>";
        //if else
        $votar = ($idade >=18 && $idade <= 64 ? "<h5>Você é obrigado a votar.<br></h5>" : ($idade == 16 || $idade == 17 || $idade > 64 ? "<h5>O voto dessa pessoa é opcional.<br></h5>" : "<h5>Essa pessoa ainda não pode votar.<br></h5>"));
        //resultado
        echo "$votar";
        ?>
    </div>
</body>
</html>