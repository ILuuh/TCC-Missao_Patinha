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
    <link rel="stylesheet" href="../missaopatinha/CSS/estilo.css">
    <title> PERFIL</title>
    
</head>
<body>
    
<nav >
  <div class="divlogo">
  <a class="navbar-brand" href="indexUser.php">
 <img src="../missaopatinha/imagem/logomp.png" width="120px">
</a>
</div>



  <!--menu-->

 <div class="divmenu">
    <ul class="menu_ul">
       <li><a href="indexUser.php"><button>INÍCIO</button></a></li>
       <li ><a href="ongs.php"> <button><Label>ONG'S</Label></button></a></li>
       <li><a href="divulgaOng.php"><button>NOVIDADE</button></a></li>
       <li><button><a href="logout.php">SAIR</a></button></li>
     </ul> 
</div>

  </nav>
    
    <div class="conteudo">
   
    <?php

        //Importando o arquivo de conexão
        include_once("conexao.php");

        session_start();
        $user = $_SESSION['usuario'];

        $stmt = "select * from usuario where nomeUser = '$user'";


        $resultado = mysqli_query($conn, $stmt);

        if(mysqli_num_rows($resultado)>0) {
            while ($u = mysqli_fetch_assoc($resultado)) {
                echo "
                <div class='container2'>
                    <div class='left box-primary'>
                        <img class='image' src='./imagem/perfil.png' alt='' />
                        <h3 class='username text-center'>".$u['nome']."</h3>
                        <h3 class='username text-center'>".$u['nomeUser']."</h3>
                        <h3>Email: ".$u ['email']."<br></h3>
                        <h3>Senha: " . $u['senha']."<br></h3>
                        <a href='editarfront.php?nomeUser=".$u['nomeUser']."' class='btn btn-primary btn-block'><b><button class='butexibir'>Editar Perfil</button></b></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp           
                        <a href='apagar.php?nomeUser=".$u['nomeUser']."' class='btn btn-primary btn-block'><b><button  class='butexibir'>Apagar Perfil</button></b></a>
                    </div>
                </div><br><br>            
                ";
                echo "";
                echo "";
                echo "";
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