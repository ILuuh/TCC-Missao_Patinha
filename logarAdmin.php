<?php
$cnpj = $_POST['cnpj'];
$senha = $_POST['senha'];

include_once('conexao.php');

$stmtlogin = mysqli_prepare($conn,"select * from admin where cnpj = ? and senha = ?;");

mysqli_stmt_bind_param($stmtlogin,'ss',$cnpj,$senha);

mysqli_stmt_execute($stmtlogin);

mysqli_stmt_store_result($stmtlogin);

if(mysqli_stmt_num_rows($stmtlogin)>0){
    session_start();
    $_SESSION['admin'] =$cnpj;
    header ("Location: telaexibiradmin.php"); 
} else {
    echo"Acesso negado <br>";
    echo "<a href= 'loginAdmin.php'>Tentar novamente</a>";
}

mysqli_stmt_close($stmtlogin);

mysqli_close ($conn);
?>