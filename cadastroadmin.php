<?php

//Lendo os dados Formulário
$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$nomeAssoci = $_POST['nomeAssoci'];
$redeSocial = $_POST['redeSocial'];
$presidente = $_POST['presidente'];

//Conctando ao banco de dados
include_once("conexao.php");

//Comando Sql de Insert
$stmt = "insert into admin values( '$cnpj','$nome','$email','$senha', '$telefone', '$nomeAssoci', '$redeSocial', '$presidente');";

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