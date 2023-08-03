<?php
function verificarEspacos($str) {
    return strpos($str, ' ') !== false;
}

// Verifica se o formulário foi submetido
if (isset($_POST['string_frase'])) {
    $string_frase = $_POST['string_frase'];
    $verificarEspacos = verificarEspacos($string_frase);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ex_01_Ver_Espaços</title>
    <link rel="stylesheet" href="style_ex_01.css">
</head>
<body>
    <h1>Digite uma frase para verificar se à espaços nela</h1><br><br>
    <form method="post" action="" id="form">
        <label for="string_frase">Digite à sua frase aqui:</label>
        <input type="text" name="string_frase" id="string_frase" required>
        <button type="submit">Validar</button>
    </form>

    <?php
    if (isset($verificarEspacos)) {
        if ($verificarEspacos) {
            echo '<p>A frase contém espaços.</p>';
        } else {
            echo '<p>A frase não contém espaços.</p>';
        }
    }
    ?>
</body>
</html>
