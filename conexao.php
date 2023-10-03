<?php

//Parâmetros de conexão
$servidor   = "localhost";
$user    = "root";
$s      = "";
$bd         = "missaopatinha";

//Realizando a conexão com o BD
$conn = mysqli_connect($servidor,$user,$s,$bd);

//Verificando se ocorreu erro
if(!$conn){
    die ("Falha na conexão.".mysqli_connect_error($conn));
}

?>