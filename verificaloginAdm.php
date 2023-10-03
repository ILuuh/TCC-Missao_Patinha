<?php
session_start();
if(!$_SESSION['admin']){
    header("location:loginAdmin.php?error=true");
}
?>