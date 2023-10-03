<?php

$nomeUser = $_GET['nomeUser'];
include_once("conexao.php");
$stmt = "delete from usuario where nomeUser = '$nomeUser';";

if(mysqli_query($conn,$stmt)){
    header("Location:telaexibir.php");
}else{
    echo "Erro ao apagar registro".mysqli_Error($conn)."<br>";
    echo "<a href='index.php'>Voltar</a>";
}
mysqli_close($conn);

?>