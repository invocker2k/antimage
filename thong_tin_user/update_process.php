<?php
if(!empty($_POST['dia_chi']) && !empty($_POST['ngay_sinh']) && !empty($_POST['sdt'])){
	$ma_khach_hang = $_POST['ma_khach_hang'];
	$dia_chi = $_POST['dia_chi'];
	$ngay_sinh = $_POST['ngay_sinh'];
	$sdt = $_POST['sdt'];
	$connect = mysqli_connect('localhost','root','','web_phong');

	mysqli_set_charset($connect,'utf8');
	$query = ("UPDATE khach_hang SET ma_khach_hang='$ma_khach_hang',dia_chi='$dia_chi',ngay_sinh='$ngay_sinh',sdt='$sdt' WHERE ma_khach_hang = $ma_khach_hang");
	$result = mysqli_query($connect,$query);
	if(!empty($error)){
		header("location:thong_tin.php?error");
	}
	else{
		header("location:thong_tin.php?success");
	}
}
else{
	header("location:thong_tin.php?error");
}
?>