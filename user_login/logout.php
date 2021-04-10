<?php
session_start();
unset($_SESSION["c_f_name"]);
unset($_SESSION["c_email"]);
unset($_SESSION["c_id"]);
unset($_SESSION["c_img"]);
header("location:../login.php");
?>
