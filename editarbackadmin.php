<?php
//Recendo os dados do veiculos
$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$nomeAssoci = $_POST['nomeAssoci'];
$redeSocial = $_POST['redeSocial'];
$presidente = $_POST['presidente'];

//Conectando ao BD
include_once("conexao.php");

//Comando sql para atualizar a tabela
$stmt = "update admin set nome = '$nome', email = '$email', senha = '$senha', telefone = '$telefone', nomeAssoci = '$nomeAssoci', 
redeSocial = '$redeSocial', presidente = '$presidente' where cnpj = '$cnpj';";

//Executando o comando sql
if(mysqli_query($conn,$stmt)){
    header("Location: telaexibiradmin.php");
}else{
    echo "Erro ao gravar informações ".mysqli_error($conn)."<br>";
    echo "<a href='telaexibir.php'> Voltar </a>";
}
//Fechando o BD
mysqli_close($conn);

?>