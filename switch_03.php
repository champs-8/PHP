<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="../Primeiros passos/_css/favicon.png" type="image/x-icon">
</head>
<body>
    <div>
        <h2> Switch - 03</h2>
        <form action="switch_03.php" method="get">
            <label for="estado">Estado : </label>
            <select name="estados" id="estados" required>
                <option value="0">Acre</option >
                <option value="1">Rondonia</option>
                <option value="2">Roraima</option>
                <option value="3">Amapá</option>
                <option value="4">Amazonas</option>
                <option value="5">Pará</option>
                <option value="6">Tocantins</option>
                <option value="7">Bahia</option>
                <option value="8">Sergipe</option>
                <option value="9">Pernambuco</option>
                <option value="10">Ceará</option>
                <option value="11">Rio Grande do Norte</option>
                <option value="12">Alagoas</option>
                <option value="26">Paraíba</option>
                <option value="13">Piauí</option>
                <option value="14">Maranhão</option>
                <option value="15">Mato Grosso do Sul</option>
                <option value="16">Mato Grosso</option>
                <option value="17">Goiás</option>
                <option value="18">Distrito Federal</option>
                <option value="19">Minas Gerais</option>
                <option value="20">São Paulo</option>
                <option value="21">Rio de Janeiro</option>
                <option value="22">Espirito Santo</option>
                <option value="23">Rio Grande do Sul</option>
                <option value="24">Paraná</option>
                <option value="25">Santa Catarina</option>
            </select>
            <input type="submit" value="Verificar">
            <a href="switch_03.php">Voltar</a>
        </form>
        <?php
            $estado = isset($_GET['estados']) ? $_GET['estados']:'';
            switch ($estado) {
                case 0:
                case 1:
                case 2:
                case 3:
                case 4:
                case 5: 
                case 6:
                    $regiao = "Norte";
                    break;
                case 7:
                case 8:
                case 9:
                case 10:
                case 11:
                case 12:
                case 13:
                case 14:
                case 26:
                    $regiao = "Nordeste";
                    break;
                case 15: 
                case 16: 
                case 17: 
                case 18:
                    $regiao = "Centro-oeste";
                    break;
                case 19:
                case 20:
                case 21:
                case 22:
                    $regiao = "Sudeste";
                    break;
                case 23:
                case 24:
                case 25:
                    $regiao = "Sul";
                    break;
            };      
                echo "Você mora na região <span class='foco'>$regiao</span>.";
        ?>
    </div>
</body>
</html>