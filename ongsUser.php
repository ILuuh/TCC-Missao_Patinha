<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../missaopatinha/CSS/estilo.css">
    <title> ONG'S</title>
</head>
<body>

    <!-- Imagem no menu -->

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
       <li ><a href="ongsAdmin.php"> <button><Label>ONG'S</Label></button></a></li>
       <li><a href="divulgaOngUser.php"><button>NOVIDADE</button></a></li>
       <li><a href="telaexibirUser.php"><button>PERFIL</button></a></li>
     </ul> 
</div>

  </nav>

 
    <!-- Começo da página-->  

<div id="a">

  
<div class="ongs">

<div class="pesquisar">
<div class="busca">
<form  action="ongs.php" method="get">
  <input type="text" required name="buscar" placeholder="Confira se a Ong que procura esta cadastrada" class="barra">
<div class="divbut">
  <button type="submit" class="butA">PESQUISAR</button>  <button type="reset" class="butB">LIMPAR</button>
  </div>
</form>

<br>

<table width="600px" border="1">

<tr>
  <td><h3>Ong:</h3></td>
</tr>

<?php



  include_once("conexao.php");

  if(isset($_GET['buscar'])){
    $pesquisa = $_GET['buscar'];
    $sql_code = "SELECT * FROM admin WHERE nome LIKE '%$pesquisa%'";
    $resultado = mysqli_query($conn,$sql_code);
    if(mysqli_num_Rows($resultado)>0){
      while($registro=mysqli_fetch_assoc($resultado)){
        echo '
        <tr>
          <td> Sim, a Ong '.$registro['nome'].' está cadastrada.</td>
        </tr>
        ';
      }
    }else{
      echo '
        <tr>
          <td> Não, essa Ong não está cadastrada.</td>
        </tr>
        ';
    }
    
  
  }

  ?>
  

</table>
</div>
</div>
   <hr>

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
                        <h3>".$a['nome']."</h3>
                        <h3>Email: ".$a ['email']."<br></h3>
                    </div>
                </div><br><br>            
                ";
                echo "<h3>".$a['nomeAssoci']."</h3>
                <h3>Telefone para contato</h3>
                <p>".$a['telefone']."</p>
                <h3>Redes Sociais</h3>
                <p>".$a['redeSocial']."</p>
                <h3>Presidente</h3>
                <p>".$a['presidente']."</p>";
                echo "<a href='ong1User.php'><button class='butexibir'>CONHECER</button></a>";
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
    </section>


</div>
    
</body>

</html>