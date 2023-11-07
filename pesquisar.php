<?php

include_once("conexao.php");

$pesquisar = $_POST ['pesquisar'];
$result_ong = "SELECT * from admin where nome like '%$pesquisar%' limit 5";
$resultado_ong = mysqli_query ($conn, $result_ong);

while($rows_ong = mysqli_fetch_array($resultado_ong)){
    echo "<h3>Nome da ong:</h3>".$rows_ong['nome']."<br>";
}

mysqli_close($conn);

?>