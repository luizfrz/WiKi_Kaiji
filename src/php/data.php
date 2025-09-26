<?php

$server = '';
$user = '';
$password= '';
$data = '';

$conn = new mysqli($server, $user, $password, $data);

// test connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$name = $_POST['nome'];
$phone = $_POST['telefone'];
$password1 = $_POST['senha'];
$password2 = $_POST['senha2'];

if ($password1 !== $password2) {
    die("Erro: As senhas não coincidem. Por favor, tente novamente.");
}

$passworDefault = password_hash($senha, PASSWORD_DEFAULT);

$smtp = $conn->prepare("INSERT INTO (name, phone, password1, password2) VALUES (?, ?, ?,?)");
if (!$smtp) { 
    die("Erro na preparação da consulta: " . $conn->error);
}

$smtp->bind_param("sss", $name, $phone, $passworDefault;

if (!$smtp->execute()) {
    die("Erro na execução da consulta: " . $smtp->error);
}
$smtp->close();
$conn->close();

header("location: /index.html ");
?>
   
