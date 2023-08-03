<!DOCTYPE html>
<html>
<head>
    <title>Ex_03 Número Ausente entre 1 a 10</title>
    <link rel="stylesheet" href="style_ex_03.css">
</head>
<body>
    <h1>Verificar se há algum número ausente na Lista numerica de 1 a 10</h1>
    <form method="post" action="">
        <label for="lista_numerica">Digite a seguencia númerica separados por vírgula:</label>
        <input type="text" name="lista_numerica" id="lista_numerica" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    function numeroFaltante($lista_numerica) {
        $numerosCorretos = range(1, 10);
        $numerosDigitados = explode(',', $lista_numerica);
        $numerosDigitados = array_map('intval', $numerosDigitados);

        $numerosFaltantes = array_diff($numerosCorretos, $numerosDigitados);

        if (count($numerosFaltantes) === 1) {
            return reset($numerosFaltantes);
        } else {
            return null; 
        }
    }


    if (isset($_POST['lista_numerica'])) {
        $lista_numerica = $_POST['lista_numerica'];
        $numeroFaltante = numeroFaltante($lista_numerica);
        echo "<p><b>O número (s) ausente nos numeros listados: <p>" . ($numeroFaltante ?? "Nenhum número falta");
    }
?>
</body>
</html>
