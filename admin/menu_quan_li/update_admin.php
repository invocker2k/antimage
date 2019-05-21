<?php
if(!empty($_POST['dia_chi']) && !empty($_POST['ngay_sinh']) && !empty($_POST['sdt'])){
	$ma_admin = $_POST['ma_admin'];
	$dia_chi = $_POST['dia_chi'];
	$ngay_sinh = $_POST['ngay_sinh'];
	$sdt = $_POST['sdt'];
	$connect = mysqli_connect('localhost','root','','web_phong');

	mysqli_set_charset($connect,'utf8');
	$query = ("UPDATE admin SET ma_admin='$ma_admin',dia_chi='$dia_chi',ngay_sinh='$ngay_sinh',sdt='$sdt' WHERE ma_admin = $ma_admin");
	$result = mysqli_query($connect,$query);
	if(!empty($error)){
		header("location:thay_doi_thong_tin.php?error");
	}
	else{
		header("location:thay_doi_thong_tin.php?success");
	}
}
else{
	header("location:thay_doi_thong_tin.php?error");
}
?>