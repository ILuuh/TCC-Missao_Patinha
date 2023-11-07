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
         $cnpj = $_GET['cnpj'];
        //Acessando o BD
        include_once("conexao.php");
        //Comando SQL que vai procurar o usuário na tabela
        $stmt = "select * from admin where cnpj = '$cnpj';";
        //EXecutando a instrução sql
        $resultado = mysqli_query($conn,$stmt);
        //Pegando o resultado da consulta
        $a = mysqli_fetch_assoc($resultado);
    ?>

<div class="editar">

    <form name="editar" method="post" action="editarbackadmin.php">

    <br><br>
        <label for="cnpj">CNPJ: </label><br>
        <input type="text" name="cnpj" value="<?php echo $a['cnpj']; ?>" readonly>
        <br><br>

        <label for="nome">Nome: </label><br>
        <input type="text" name="nome" value="<?php echo $a['nome']; ?>" autofocus>
        <br><br>

        <label for="email">Email: </label><br>
        <input type="text" name="email" value="<?php echo $a['email']; ?>">
        <br><br>

        <label for="senha">Senha: </label><br>
        <input type="password" name="senha" value="<?php echo $a['senha']; ?>">
        <br><br>

        <button> Salvar </button>

    </form>
    </div>
<?php
    mysqli_close($conn);
?>
    
</body>
</html>