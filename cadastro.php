<?php
include "conexao.php";

switch ($_POST["acao"]) {
    case "cadastrar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('{$nome}','{$email}','{$senha}')";
        $res = $conn->query($sql);
        break;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    setcookie("padraoUsuario-Nome", $nome, time() + 60 * 60);
    setcookie("padraoUsuario-Email", $email, time() + 60 * 60);

    echo "<script>alert('Sistema Liberado, bem vindo!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}
