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

                <!-- Imagem  -->

                <div class="login">

      <img src="../missaopatinha/imagem/logomp.png" class="logo" width="200px" height="200px">

                <!-- formulário -->

            <form name="login" method="post" action="logar.php">

        <label for="usuario" class="lablongin">Nome de Usuário</label><br>
           <input type="text" name="usuario" maxlength="30" required class="inplogin">

        <label for="senha">Senha</label><br>
         <input type="password" name="senha" required>
<br><br>


        <button class="butlogin">ENTRAR</button>

        <br>

        <button class="butlogin"><a href="index.php">INÍCIO</a></button>


        <p>Ainda não tem cadastro? Cadastre-se <a href="telacadastro.php">aqui</a></p>
        <p>Se for administrador clique
         <a href="loginAdmin.php">aqui</a></p>


            </form>
    
            </div>
<br><br>
        <div>

        <!-- Rodapé -->
        
    </div>

</body>
</html>