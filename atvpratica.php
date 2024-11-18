<?php

$conn = mysqli_connect('localhost', 'root','gerenciamento_chamados');

if (!$conn) {
    die("Conexão falhou meu chapa: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['enviar_cadastro'])) {
    $nome_cliente = mysqli_real_escape_string($conn, $_POST['nome_cliente']);
    $email_cliente = mysqli_real_escape_string($conn, $_POST['email_cliente']);
    $telefone_cliente = mysqli_real_escape_string($conn, $_POST['telefone_cliente']);
    $query = "INSERT INTO cliente (nome_cliente, email_cliente, telefone_cliente) VALUES ('$nome_cliente', '$email_cliente', '$telefone_cliente')";
    
    if (mysqli_query($conn, $query)) {
        echo 'Deu boa a inserção';
    } else {
        echo 'Não deu boa a inserção: ' . mysqli_error($conn);
    }
} else {
    echo 'Nenhum dado enviado.';
}
mysqli_close($conn);
?>
