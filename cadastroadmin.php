<?php

//Lendo os dados Formulário
$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//Conctando ao banco de dados
include_once("conexao.php");

//Comando Sql de Insert
$stmt = "insert into admin values( '$cnpj','$nome','$email','$senha');";

//Executando o comando sql
if(mysqli_query($conn,$stmt)){
    header('Location: telaexibiradmin.php'); //Página irá aparecer caso tenha sucesso no cadastro
}else{
    echo "Erro ao cadastrar administrador.<br>".mysqli_error($conn);
    echo "<br><a href ='telacadastroadmin.php'>Voltar</a>";   
}

//Fechando o BD
mysqli_close($conn);

?>