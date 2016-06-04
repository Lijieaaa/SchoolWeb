<?php
//var_dump($_SESSION);
unset($_SESSION['compword']);
//session_destroy();
//var_dump($SESSION);
header("Location:../company.php");
?>