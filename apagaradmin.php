<?php

$cnpj = $_GET['cnpj'];
include_once("conexao.php");
$stmt = "delete from admin where cnpj = '$cnpj';";

if(mysqli_query($conn,$stmt)){
    header("Location:telaexibiradmin.php");
}else{
    echo "Erro ao apagar registro".mysqli_Error($conn)."<br>";
    echo "<a href='index.php'>Voltar</a>";
}
mysqli_close($conn);

?>