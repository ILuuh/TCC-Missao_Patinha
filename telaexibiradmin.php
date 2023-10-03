<?php
session_start();
if(!$_SESSION['admin']){
    header("location:loginAdmin.php");
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
<?php

?>
    
    <div class="conteudo">
    <a href="telacadastroadmin.php">Cadastrar Administrador</a>
    <p></p>
    <a href="logout.php">Sair</a>
    <p></p>
    <a href="indexAdmin.php">Página Inicial</a>
    <p></p>
    <?php

        //Importando o arquivo de conexão
        include_once("conexao.php");

        $stmt = "select * from admin";

        $resultado = mysqli_query($conn, $stmt);

        if(mysqli_num_rows($resultado)>0) {
            while ($a = mysqli_fetch_assoc($resultado)) {
                echo "
                <div class='container'>
                    <div class='left box-primary'>
                        <img class='image' src='./imagem/perfil.png' alt='' />
                        <h3 class='username text-center'>".$a['nome']."</h3>
                        <a href='editarfrontadmin.php?cnpj=".$a['cnpj']."' class='btn btn-primary btn-block'><b>Editar Perfil</b></a>           
                        <a href='apagaradmin.php?cnpj=".$a['cnpj']."' class='btn btn-primary btn-block'><b>Apagar Perfil</b></a>
                    </div>
                </div><br><br>            
                ";
                echo "Email: ".$a ['email']."<br>";
                echo "Senha: " . $a['senha']."<br>";
                echo "<hr>";
            }
        }else{
            echo "Nenhum administrador encontrado.";
        }
        //Encerrando a conexão com o BD
        mysqli_close($conn);

    ?>
    </div>
    <script src="js/script.js"></script>        
    </body>
</html>

