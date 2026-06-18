<?php

require_once "banco/conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios
            WHERE email='$email'
            AND senha='$senha'";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        header("Location: painel.php");
        exit();

    } else {

        echo "Email ou senha incorretos!";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Fornatta</title>
</head>
<body>

    <h1>Login</h1>

    <form method="POST">

        <input type="email" name="email" placeholder="Email">

        <br><br>

        <input type="password" name="senha" placeholder="Senha">

        <br><br>

        <button type="submit">Entrar</button>

    </form>

</body>
</html>