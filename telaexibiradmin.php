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
    <link rel="stylesheet" href="../missaopatinha/CSS/loginAdm.css">
    <title>CRUD - Exibindo os dados da tabela</title>
    
</head>
<body>

<div class="comeco"><br></div>

   

    <?php

        //Importando o arquivo de conexão
        include_once("conexao.php");

        
        $user = $_SESSION['admin'];

        $stmt = "select * from admin where cnpj = '$user'";

        $resultado = mysqli_query($conn, $stmt);

        if(mysqli_num_rows($resultado)>0) {
            while ($a = mysqli_fetch_assoc($resultado)) {
                echo "
                <div class='divperfilAd1'>
                <h1 class='adm'>BEM - VINDO</h1>
                    <div class='divperfilAd'>
                     
                        <img class='image' src='./imagem/perfil.png' alt='' />
                        <h3 class='username text-center'>".$a['nome']."</h3>
                        <h3>Email: ".$a ['email']."<br></h3>
                        <h3>Senha: " . $a['senha']."<br></h3>
                        <a href='editarfrontadmin.php?cnpj=".$a['cnpj']."' class='btn btn-primary btn-block'><button class='butexibir'>EDITAR</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp            
            <a href='apagaradmin.php?cnpj=".$a['cnpj']."' class='btn btn-primary btn-block'><button class='butexibir'>APAGAR</button></a>
                    </div>
                </div>            
                ";
            }
        }else{
            echo "Nenhum administrador encontrado.";
        }
        //Encerrando a conexão com o BD
        mysqli_close($conn);

    ?>
    
                                     <!--FIM DA PÁGINA-->

    <div class="rodapeAdm">

    
        <a href="telacadastroadmin.php"><button class="butA">CADASTRAR</button></a>
        <a href="indexAdmin.php"><button class="butB">INÍCIO</button></a>
        <a href="exibircadastros.php"><button class="butB">PARCEIROS</button></a>
        <a href="logout.php"><button class="butB">SAIR</button></a>
        
        <br><br>

     </div>
      
   
     <script src="js/script.js"></script>     

    </body>

</html>

