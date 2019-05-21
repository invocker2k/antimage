<?php 
if(empty($_SESSION['ma_admin'])){
	//header form dang nhap khach hang
	header('location:../dang_nhap_admin.php');
}
?>