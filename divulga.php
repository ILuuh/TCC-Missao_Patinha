<?php 

include('conexao.php');

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../missaopatinha/CSS/estilo.css">
    <title>  Novidades </title>
</head>
<body>

    <!-- nav -->


 
    <!-- Começo da página-->  


  <h1>lista de ong</h1>

  <div class="pesquisar">

  <form action="divulga.php" method="get">
    <input type="text" name="buscar" placeholder="digite a pesquisa">
    <button type="submit">Pesquisar</button>
  </form>

  <br>

  <table width="600px" border="1">

  <tr>
    <td>ong</td>
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
            <td>'.$registro['nome'].'</td>
          </tr>
          ';
        }
      }else{
        echo '
          <tr>
            <td>algo deu errrado</td>
          </tr>
          ';
      }
    }

    ?>
    

  </table>
  </div>
  
</body>
</html>