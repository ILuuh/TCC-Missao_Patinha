<?php
session_start();
if(!$_SESSION['usuario']){
    header("location:login.php?error=true");
}
?>