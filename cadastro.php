<?php

//Lendo os dados Formulário
$nome = $_POST['nome'];
$nomeUser = $_POST['nomeUser'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//Conctando ao banco de dados
include_once("conexao.php");

//Comando Sql de Insert
$stmt = "insert into usuario values('$nomeUser','$nome','$email','$senha');";

//Executando o comando sql
if(mysqli_query($conn,$stmt)){
    header('Location: telaexibir.php'); //Página irá aparecer caso tenha sucesso no cadastro
}else{
    echo "Erro ao cadastrar usuário.<br>".mysqli_error($conn);
    echo "<br><a href ='telacadastro.php'>Voltar</a>";   
}

//Fechando o BD
mysqli_close($conn);

?>