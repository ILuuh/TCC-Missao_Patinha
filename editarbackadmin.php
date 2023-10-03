<?php
//Recendo os dados do veiculos
$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


//Conectando ao BD
include_once("conexao.php");

//Comando sql para atualizar a tabela
$stmt = "update admin set nome = '$nome', email = '$email', senha = $senha where cnpj = '$cnpj';";

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