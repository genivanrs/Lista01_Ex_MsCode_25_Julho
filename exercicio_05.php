<?php
// Configuração do banco de dados
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$dbname = "empresa";

// Cria uma conexão com o banco de dados
$conexao = new mysqli($nome_servidor, $nome_usuario, $senha, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Cria a tabela "produtos"
$sql_create_table = "CREATE TABLE produtos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    pagamento DATE NOT NULL,
    valor DECIMAL(10, 2) NOT NULL
)";

if ($conexao->query($sql_create_table) === TRUE) {
    echo "Tabela 'produtos' criada com sucesso!<br>";
} else {
    echo "Erro ao criar a tabela: " . $conexao->error;
}

// Insere os registros na tabela
$sql_insert = "INSERT INTO produtos (titulo, pagamento, valor) VALUES
    ('canetas', '2019-07-05', 180),
    ('notebook', '2019-07-01', 1200),
    ('macbook', '2019-07-02', 2100),
    ('microfone', '2019-07-05', 90),
    ('matricula alura', '2019-07-09', 900),
    ('gasolina reembolso diretor', '2019-06-10', 200)";

if ($conexao->query($sql_insert) === TRUE) {
    echo "Registros inseridos com sucesso!<br>";
} else {
    echo "Erro ao inserir registros: " . $conexao->error;
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
