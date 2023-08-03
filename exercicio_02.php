<!DOCTYPE html>
<html>
<head>
    <title>Ex_02 Calcular Produto Inteiros</title>
    <link rel="stylesheet" href="style_ex_02.css">
</head>
<body>
    <h1>Calcular Produto Inteiros Ímpares</h1>
    <form method="post" action="" id="form">
        <label for="num_impar">Digite os números ímpares separados por vírgula:</label>
        <input type="text" name="num_impar" id="num_impar" required>
        <button type="submit">Somar</button>
    </form>

    
    <?php
    function somaProdutoInteiroImpar($lista) {
        $num_impar = explode(',', $lista);
        $produto = 1;
        foreach ($num_impar as $produto_numerico) {
            // Converte o valor para inteiro
            $produto_numerico = intval($produto_numerico); 
            // Verifica se é ímpar
            if ($produto_numerico % 2 !== 0) { 
                $produto *= $produto_numerico;
            }
        }
        return $produto;
    }

    if (isset($_POST['num_impar'])) {
        $listaNum_impar = $_POST['num_impar'];
        $resultado = somaProdutoInteiroImpar($listaNum_impar);
        echo "<p><b>A lista de números ímpares é: $listaNum_impar<b><br><p>";
        echo "O produto dos inteiros ímpares na lista é: $resultado";
    }
    ?>

</body>
</html>
