<?php 
session_start();
session_destroy();
//header form đăng nhập
header('location: ../dang_nhap_dang_ki/login/login.php');
?>