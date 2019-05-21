<?php
$connect = mysqli_connect('localhost','root','','web_phong');
mysqli_set_charset($connect,'utf8');
$ma_phong_tro = $_GET['ma_phong_tro'];
$query = "update phong_tro set tinh_trang = '3'
where ma_phong_tro = '$ma_phong_tro'";
$result = mysqli_query($connect,$query);
if(!empty($error)){
		header("location:quan_li_phong_dang.php");
}
else{
		header("location:quan_li_phong_dang.php");
}
?>