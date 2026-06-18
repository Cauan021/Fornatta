<?php

require_once "banco/conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (email, senha)
            VALUES ('$email', '$senha')";

    mysqli_query($conexao, $sql);

    echo "Usuário cadastrado com sucesso!";

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>

    <h1>Cadastro</h1>

    <form method="POST">
        <input type="email" name="email">
        <input type="password" name="senha">
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>