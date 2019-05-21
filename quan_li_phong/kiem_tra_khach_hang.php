<?php 
session_start();
if(empty($_SESSION['ma_khach_hang'])){
	//header form dang nhap khach hang
	header('location:../dang_nhap_dang_ki/login/login.php');
}