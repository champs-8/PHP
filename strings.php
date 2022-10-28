<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h2> Strings </h2>
        <?php
        $prod = "leite";
        $prod2 = 'macarrão';
        $preco = 4.5;
        //onde estiver %s, sera substituido pela string que estiver na mesma posição
        // primeira parte é a string entre chaves
        // depois a quantidade argumentos que vai substituir.
        printf("O %s e o %s, estão custando R$ %.2f", $prod, $prod2, $preco);

        echo "<br><br>";
        //print_r
        $x[0] = 4;
        $x[1] = 8;
        $x[2] = 3;
        print_r($x);
        echo "<br>";
        //var_export
        var_export($x);
        echo "<br>";

        //var_dump
        $x2 = array (3,7,6,2,1,9);
        var_dump($x2);
        echo "<br>";


        //wordwrap
        $txt = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae accusantium voluptatum eos ut eveniet, explicabo architecto vel atque animi quas beatae! Est, optio dolor! Itaque saepe iste fugiat ea necessitatibus.";
        //quebra de linha de texto no codigo e na pagina
        //usar o valor  da variavel txt, com 20 caracteres em cada linha,
        //<br> quebra a linha do lado do cliente, e \n do lado do codigo inspecionado
        $res = wordwrap($txt, 20, "<br>\n", false);//true é somente se quiser quebrar palavras ao meio
        echo $res;

        //strlen
        echo "<br><br>";
        echo strlen($txt);

        
        //trim
        echo "<br><br>";
        $nome = '    Fábio Santos  ';// 19 caracteres.
        echo strlen(trim($nome)); //13 carateres, excluiu os espaços em branco no inicio e no final
        //Ltrim
        echo strlen(ltrim($nome));//16 caract, excluiu so os espaços da esquerda.
        //Rtrim
        echo strlen(rtrim($nome));//17 caract, excluiu so os espaços da direita.

        
        echo "<br><br>";

        //str_word_count
        print_r(str_word_count($txt, 2)) ;// 30 palavras nessa string
        //0 conta as palavras
        //1 cria um array onde cada palavra é uma posição
        //2 cria um array e mostra a posição a primeira letra de cada palavra 
        echo "<br><br>";

        //explode
        $site = 'curso em video';         
        $vetor = explode(" ", $site);
        //cada vez que ele encontrar um caractere que foi passado,
        // ele vai explodir jogar dentro do array.
        print_r($vetor);
        echo "<br><br>";

        //str_split
        $nome = 'faBio de sOuTo';
        print_r(str_split($nome));
        //vai pegar cada letra e colocar num indice.
        echo "<br><br>";

        //implode e join
        $t[0] = 'Curso';
        $t[1] = 'em';
        $t[2] = 'Video';
        print(join('#', $t));
        //contrario do explode, cada vez que encontrar o fim de uma palavra,
        // ele vai completar com o caractere que foi passado.
        //Curso#em#Video
        echo "<br><br>";

        //chr e ord
        $letra = chr(64);
        echo $letra;
        //vai passar o caractere do codigo passado.
        //@
        $carac = ord('F');
        echo $carac;
        //vai passar o codigo do caracter passado
        //70

        echo "<br><br>";

        //strtolower
        print (strtolower($nome));
        //deixa tudo em minusculo
        //fabio de souto
        echo "<br>";
        //strtoupper
        print (strtoupper($nome));
        //tudo maiusculo
        //FABIO DE SOUTO
        echo "<br><br>";

        //ucfirst
        print (ucfirst(strtolower($nome)));
        //primeira letra da string toda, maiuscula
        //Fabio de souto
        echo "<br><br>";

        //ucwords
        print(ucwords(strtolower($nome)));
        //primeira letra maiuscula de casa palavra
        //Fabio De Souto
        echo "<br><br>";

        //strrev
        print (strrev($nome));
        //inverte a posição de todas as letras da string
        //otuos ed oibaf        
        echo "<br><br>";


        //strpos
        $frase = 'Estou enfrentando PHP';
        print(stripos($frase, 'php'));
        //posição da primeira letra da palavra que foi passado no parametro
        //18
        //obs, a caixa precisa ser a mesma se nao for stripos, I = ignorar a caixa
        echo "<br><br>";

        //substr_count
        print(substr_count($frase, 'PHP'));
        // vai contar quantas vezes PHP vai aparecer na frase
        // a caixa importa, 1
        echo "<br><br>";

        //substr
        print(substr($site,2,8));
        //vai pegar a partir da posiçao declarada,
        //e vai andar o valor declarado.
        //rso em v
        echo "<br><br>";

        //str_pad
        print (str_pad($nome, 20, '*', STR_PAD_BOTH));
        //vai pegar $nome e vai preencher 20 espaços com * á direita ou centro ou esquerda
        //***fabio de souto***
        //preferencia preencher no final
        echo "<br><br>";

        //str_repeat
        print (str_repeat($nome , 5));
        //vai repetir o conteudo passado 5 vezes.
        print(str_repeat('-', 20));
        //----------------------------------
        echo "<br><br>";

        //str_replace
        print str_ireplace('enfrentando','amando',$frase);
        //vai passar a palavra que vai trocar,
        //ap palavra que vai ser colocada, e a variavel
        //ireplace ignora a caixa.
        echo "<br><br>";
        
        
        ?>
    </div>
</body>
</html>