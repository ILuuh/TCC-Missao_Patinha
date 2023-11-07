<?php
session_Start();
session_destroy();
header("location:indexUser.php");
?>