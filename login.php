<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body style="background-image: url('imagens/Imagem\ do\ WhatsApp\ de\ 2023-11-27\ à\(s\)\ 20.58.34_8cfdd0c5.jpg'); background-size: cover;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="login.php">Login</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="text" placeholder="Procurar" aria-label="procurar">
                    <button class="btn btn-outline-success" type="submit">Procurar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center py-5">
        <form class="form" method="POST" action="cadastro.php">
            <h1 class="texto-form">Conecte-se</h1>
            <div class="col-md-6 mx-auto">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome">
            </div>
            <div class="col-md-6 mx-auto">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="col-md-6 mx-auto">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha">
            </div>
            <div class="col-md-6 mx-auto">
                <label for="role" class="form-label">Escolha sua função</label>
                <select class="form-select" id="role" name="role">
                    <option value="user">Usuário</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary" name="acao" value="cadastrar">Entrar</button>
            </div>
        </form>
    </div>


</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    setcookie("padraoUsuario-Nome", $nome, time() + 60 * 60);
    setcookie("padraoUsuario-Email", $email, time() + 60 * 60);

    echo "<script>alert('Sistema Liberado, bem vindo!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}
?>