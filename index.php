<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../helpet/CSS/estilo.css">
    <title> Missão Patinha - Início </title>
</head>
<body>

    <!-- Imagem no menu -->

<nav >
  <a class="navbar-brand" href="home.html">
 <img src="../helpet/imagem/logomp.png" width="120px" >
</a>

  <!--menu-->
 
    <ul class="menu_ul">

       <li ><a href="login.php"> <button><Label>LOGIN</Label></button></a></li>
       <li><a href="telacadastro.php"><button>CADASTRO</button></a></li>
       <li><a href="<?php
        session_start();
        if(!$_SESSION['admin']){
          header("location:telaexibirAdmin.php");
        }else{
          header("location:telaexibir.php");  
        }
?>"><button>PERFIL</button></a></li>
     </ul> 

  </nav>

 
    <!-- Começo da página-->  

<div id="a">
  
  <section class="banner"></section>
     <h1>QUAL É O NOSSO OBJETIVO ?</h1>
   
     <p> 
      <br>
      <strong>Olá pessoa!</strong>
      <br>
      <br>
         Nós, equipe da Missão Patinha, desenvolvemos o site como uma
      forma de facilitar a vida das Ong's fazendo uma ferramenta pratica para
      ajudar na busca de animais de rua.</p>
      <p> Esse site tem o objetivo de ajudar a retirar animais abandonados das ruas,
      ou até mesmo a retirar de maus tratos, mas o foco são os animais.</p>
      <p> As ONGS envolvidas nessa projeto se beneficiam de uma ferramenta organizadora
      e localizadora para o seu trabalho. 
     </p>
 
     <br><br>

     <h5>obs.: CASO SEJA URGENTE VÁ A PÁGINA DE CONTATO E LIGUE PARA O NÚMERO DAS PESSOAS 
      RELACIONADAS A ONG! OU VÁ ATÉ A DELEGACIA PRESTAR A QUEIXA.</h5>

   </p>

    </section>
    
<!--Divisão de tela-->

</div>
    
      <div id="b">

    <section class="banner">
            
     <img src="../helpet/imagem/exemplo.PNG" width="200px" height="280px">  

não sei

    </section>
        
      
      </div>
        
      

</body>
</html>