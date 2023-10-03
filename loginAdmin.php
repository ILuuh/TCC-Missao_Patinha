<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../helpet/CSS/loginAdm.css">
    <title>Login</title>
</head>
<body>

<img src="../helpet/imagem/logomp.png" width="300px" height="300px">

    <form name="login" method="post" action="logarAdmin.php">
    <label for="cnpj">CNPJ:</label><br>
    <input type="text" name="cnpj" maxlength="18" onkeypress="formatar('##.###.###/####-##', this)" required>
    <p></p>
    <label for="senha">Senha:</label><br>
    <input type="password" name="senha" required>
    <p></p>
    <input type="submit" value="Acessar">
    <p>Ainda não tem cadastro? <br>Cadastre-se <a href="telacadastroadmin.php">aqui</a></p>

    <p>Se for Usuário clique
    <a href="login.php">aqui</a></p>
    </form>
    <div>
        <?php
        if (isset($_GET['error'])) {
            echo "<p>Para Acessar precisa logar</p>";
        }
        ?>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>