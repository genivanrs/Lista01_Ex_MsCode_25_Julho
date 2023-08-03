<!DOCTYPE html>
<html>
<head>
    <title>Ex_04 2º Maior Número</title>
    <link rel="stylesheet" href="style_ex_04.css">
</head>
<body>
    <h1>Encontrar o segundo Maior número do intervalo digitado</h1>
    <form method="post" action="" id="form">
        <label for="intervaloNumerio">Digite uma lista de números separados por vírgula:</label>
        <input type="text" name="intervaloNumerio" id="intervaloNumerio" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    function maiorSegundoNumero($lista) {
        $intervaloNumerio = array_unique($lista); 
        rsort($intervaloNumerio); 
        if (count($intervaloNumerio) >= 2) {
            return $intervaloNumerio[1]; 
        } else {
            return null; 
        }
    }

    if (isset($_POST['intervaloNumerio'])) {
        $intervaloNumerio = explode(',', $_POST['intervaloNumerio']);
        $segundoMaior = maiorSegundoNumero($intervaloNumerio);
        echo "<p><b>O segundo maior número da lista é: " . ($segundoMaior ?? "Não encontrado");
    }
    ?>
</body>
</html>

