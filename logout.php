<?php 
session_start();
session_destroy();
//header form đăng nhập
header('location: index.php');
?>