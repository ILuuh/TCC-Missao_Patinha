<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../missaopatinha/CSS/loginAdm.css">
    <title>CRUD - Tela de edição</title>
</head>
<body>
    <?php
         $nomeUser = $_GET['nomeUser'];
        //Acessando o BD
        include_once("conexao.php");
        //Comando SQL que vai procurar o usuário na tabela
        $stmt = "select * from usuario where nomeUser = '$nomeUser';";
        //EXecutando a instrução sql
        $resultado = mysqli_query($conn,$stmt);
        //Pegando o resultado da consulta
        $u = mysqli_fetch_assoc($resultado);
    ?>

    <div class="editar">
    <form name="editar" method="post" action="editarback.php">

    <br><br>
        <label for="nomeUser">Nome de Usuário: </label><br>
        <input type="text" name="nomeUser" value="<?php echo $u['nomeUser']; ?>">
        <br><br>

        <label for="nome">Nome: </label><br>
        <input type="text" name="nome" value="<?php echo $u['nome']; ?>" autofocus>
        <br><br>

        <label for="email">Email: </label><br>
        <input type="text" name="email" value="<?php echo $u['email']; ?>">
        <br><br>

        <label for="senha">Senha: </label><br>
        <input type="password" name="senha" value="<?php echo $u['senha']; ?>">
        <br><br><br>

        <button> SALVAR</button>

    </form>
    </div>

    
<?php
    mysqli_close($conn);
?>
    
</body>
</html>