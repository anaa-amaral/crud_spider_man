<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>criar novo usuário</title>
</head>
<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = $_POST["usarname"] ?? "";
    $pass = $_POST["senha"] ?? "";

    $sql = " INSERT INTO usuarios (usarname,senha) VALUE ('$user','$pass')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso você não tenha cadastro ainda, crie seu cadastro:</title>
</head>

<body>
<div class="card">
    <h3>Crie seu cadastro</h3>
    <form method="post" action="create.php">
      <input type="text" name="usarname" placeholder="Usuário" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">Entrar</button>
    </form>
    <a href="login.php">Clique aqui caso já tenha cadastro</a>
</div>

</body>

</html>