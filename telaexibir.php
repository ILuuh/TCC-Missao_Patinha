<?php
session_start();
if(!$_SESSION['usuario']){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../helpet/CSS/estilo.css">
    <title>CRUD - Exibindo os dados da tabela</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
    <div class="conteudo">
    <a href="telacadastro.php">Cadastrar Usuário</a>
    <p></p>
    <a href="logout.php">Sair</a>
    <p></p>
    <a href="indexUser.php">Página Inicial</a>
    <p></p>
    <?php

        //Importando o arquivo de conexão
        include_once("conexao.php");

        $stmt = "select * from usuario";

        $resultado = mysqli_query($conn, $stmt);

        if(mysqli_num_rows($resultado)>0) {
            while ($u = mysqli_fetch_assoc($resultado)) {
                echo "
                <div class='container'>
                    <div class='left box-primary'>
                        <img class='image' src='./imagem/perfil.png' alt='' />
                        <h3 class='username text-center'>".$u['nome']."</h3>
                        <h3 class='username text-center'>".$u['nomeUser']."</h3>
                        <a href='editarfront.php?nomeUser=".$u['nomeUser']."' class='btn btn-primary btn-block'><b>Editar Perfil</b></a>           
                        <a href='apagar.php?nomeUser=".$u['nomeUser']."' class='btn btn-primary btn-block'><b>Apagar Perfil</b></a>
                    </div>
                </div><br><br>            
                ";
                echo "Email: ".$u ['email']."<br>";
                echo "Senha: " . $u['senha']."<br>";
                echo "<hr>";
                
                echo "Nome: " . $u['nome']."<br>";
                echo "Nome de Usuário: " . $u['nomeUser']."<br>";
                echo "Email: " . $u['email']."<br>";
                echo "Senha: " . $u['senha']."<br>";
                echo "<a href='editarfront.php?cod=".$u['nomeUser']."'>Editar</a>";
                echo "<a href='apagar.php?cod=".$u['nomeUser']."'>Apagar</a>";
                echo "<hr>";

            }
        }else{
            echo "Nenhum usuário encontrado.";
        }
        //Encerrando a conexão com o BD
        mysqli_close($conn);

    ?>
    </div>
    <script src="js/script.js"></script>        
    </body>
</html>