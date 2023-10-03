<?php
//Recendo os dados do veiculos
$nome = $_POST['nome'];
$nomeUser = $_POST['nomeUser'];
$email = $_POST['email'];
$senha = $_POST['senha'];


//Conectando ao BD
include_once("conexao.php");

//Comando sql para atualizar a tabela
$stmt = "update usuario set nome = '$nome', email = '$email', senha = $senha where nomeUser = '$nomeUser';";

//Executando o comando sql
if(mysqli_query($conn,$stmt)){
    header("Location: telaexibir.php");
}else{
    echo "Erro ao gravar informações ".mysqli_error($conn)."<br>";
    echo "<a href='telaexibir.php'> Voltar </a>";
}
//Fechando o BD
mysqli_close($conn);

?>