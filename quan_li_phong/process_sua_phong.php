<?php
	$ma_phong_tro = $_POST['ma_phong_tro'];
	$gia = $_POST['gia'];
	$dien_tich = $_POST['dien_tich'];
	$so_luong_nguoi = $_POST['so_luong_nguoi'];
	$dien_tich = $_POST['dien_tich'];
	$so_luong_nguoi = $_POST['so_luong_nguoi'];
	$ma_quan = $_POST['ma_quan'];
	$ten_nguoi_dang = $_POST['ten_nguoi_dang'];
	$sdt_nguoi_dang = $_POST['sdt_nguoi_dang'];
	$dia_chi_phong = $_POST['dia_chi_phong'];
	$tieu_de = $_POST['tieu_de'];
	$noi_dung_chi_tiet = $_POST['noi_dung_chi_tiet'];
	$connect = mysqli_connect('localhost','root','','web_phong');

	mysqli_set_charset($connect,'utf8');
	$query = ("UPDATE phong_tro SET gia='$gia',dien_tich='$dien_tich',so_luong_nguoi='$so_luong_nguoi',dien_tich='$dien_tich',so_luong_nguoi='$so_luong_nguoi',ma_quan='$ma_quan',ten_nguoi_dang='$ten_nguoi_dang',sdt_nguoi_dang='$sdt_nguoi_dang',dia_chi_phong='$dia_chi_phong',tieu_de='$tieu_de',noi_dung_chi_tiet='$noi_dung_chi_tiet' WHERE ma_phong_tro = $ma_phong_tro");
	$result = mysqli_query($connect,$query);
	if(!empty($error) || $uploadOk==0){
		header("location:quan_li_phong_dang.php?success");
	}
	else{
		header("location:quan_li_phong_dang.php?error");
	}
?>