<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include_once('conexao.php');

$stmtlogin = mysqli_prepare($conn,"select * from usuario where nomeUser = ? and senha = ?;");

mysqli_stmt_bind_param($stmtlogin,'ss',$usuario,$senha);

mysqli_stmt_execute($stmtlogin);

mysqli_stmt_store_result($stmtlogin);

if(mysqli_stmt_num_rows($stmtlogin)>0){
    session_start();
    $_SESSION ['usuario'] =$usuario;
    header ("Location: telaexibir.php"); 
} else {
    echo"Acesso negado <br>";
    echo "<a href= 'login.php'>Tentar novamente</a>";
}

mysqli_stmt_close($stmtlogin);

mysqli_close ($conn);
?>