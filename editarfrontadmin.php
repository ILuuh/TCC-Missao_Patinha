<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../helpet/CSS/loginAdm.css">
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
    <form name="editar" method="post" action="editarbackadmin.php">
        <label for="cnpj">CNPJ: </label><br>
        <input type="text" name="cnpj" value="<?php echo $a['cnpj']; ?>" readonly>
        <p></p>

        <label for="nome">Nome: </label><br>
        <input type="text" name="nome" value="<?php echo $a['nome']; ?>" autofocus>
        <p></p>

        <label for="email">Email: </label><br>
        <input type="text" name="email" value="<?php echo $a['email']; ?>">
        <p></p>

        <label for="senha">Senha: </label><br>
        <input type="password" name="senha" value="<?php echo $a['senha']; ?>">
        <p></p>

        <input type="submit" value="Salvar Alterações">

    </form>
<?php
    mysqli_close($conn);
?>
    
</body>
</html>