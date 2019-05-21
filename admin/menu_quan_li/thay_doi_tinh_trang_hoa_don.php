<?php
$connect = mysqli_connect('localhost','root','','web_phong');
mysqli_set_charset($connect,'utf8');
$ma_phong_tro = $_GET['ma_phong_tro'];
$kieu       = $_GET['kieu'];
if($kieu=="duyet"){
	$tinh_trang = 1;
}
else{
	$tinh_trang = 2;
}
$query = "update phong_tro set tinh_trang = '$tinh_trang'
where ma_phong_tro = '$ma_phong_tro'";
$result = mysqli_query($connect,$query);
if(!empty($error)){
		header("location:cho_duyet.php");
}
else{
		header("location:cho_duyet.php");
}
?>