<?php 
session_start();
if(empty($_SESSION['ten_khach_hang'])){
	//header form dang nhap khach hang
	header('location:../../../login/login.php');
}