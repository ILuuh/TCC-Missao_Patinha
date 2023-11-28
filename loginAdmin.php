<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../missaopatinha/CSS/loginAdm.css">
    <title>Login</title>
</head>
<body>


<div class="login">

<img src="../missaopatinha/imagem/logomp.png" width="200px" height="200px">

    <form name="login" method="post" action="logarAdmin.php">
    <label for="cnpj">CNPJ:</label><br>
    <input type="text" name="cnpj" maxlength="18" onkeypress="formatar('##.###.###/####-##', this)" required>
    <label for="senha">Senha:</label><br>
    <input type="password" name="senha" required>
    <button class="butlogin"> Acessar</button>
    
    <br>

    <button class="butlogin"><a href="index.php">Início</a></button>

    <p>Ainda não tem cadastro? <br>Cadastre-se <a href="telacadastroadmin.php">aqui</a></p>

    <p>Se for Usuário clique
    <a href="login.php">aqui</a></p>
    </form>
    </div>
    
    <br><br>
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