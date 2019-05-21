<?php 
session_start();
session_destroy();
//header form đăng nhập
header('location:dang_nhap_admin.php');