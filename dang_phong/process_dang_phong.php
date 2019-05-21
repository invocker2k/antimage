<?php
require('../dang_nhap_dang_ki/login/kiem_tra_khach_hang.php');
if(isset($_POST['button_submit'])){
	//lấy file ảnh về
	require('dang_anh.php');
	$GLOBALS['upload_anh'] = 0;
	$anh_1 = upload_anh($_FILES['anh_1'],'anh_1');
	$anh_2 = upload_anh($_FILES['anh_2'],'anh_2');
	$anh_3 = upload_anh($_FILES['anh_3'],'anh_3');
	if($GLOBALS['upload_anh']==3){
		$gia = $_POST['gia'];
		$dien_tich = $_POST['dien_tich'];
		$so_luong_nguoi = $_POST['so_luong_nguoi'];
		$ma_quan = $_POST['ma_quan'];
		$ten_nguoi_dang = $_POST['ten_nguoi_dang'];
		$sdt_nguoi_dang = $_POST['sdt_nguoi_dang'];
		$dia_chi_phong = $_POST['dia_chi_phong'];
		$tieu_de = $_POST['tieu_de'];
		$noi_dung_chi_tiet = $_POST['noi_dung_chi_tiet'];
		$ma_khach_hang = $_SESSION['ma_khach_hang'];
		$connect = mysqli_connect('localhost','root','','web_phong');

		mysqli_set_charset($connect,'utf8');
		$query = ("insert into phong_tro(ma_khach_hang,gia,dien_tich,so_luong_nguoi,ma_quan,ten_nguoi_dang,sdt_nguoi_dang,dia_chi_phong,tieu_de,noi_dung_chi_tiet,anh_1,anh_2,anh_3) values ('$ma_khach_hang','$gia','$dien_tich','$so_luong_nguoi','$ma_quan','$ten_nguoi_dang','$sdt_nguoi_dang','$dia_chi_phong','$tieu_de','$noi_dung_chi_tiet','$anh_1','$anh_2','$anh_3')");
		$result = mysqli_query($connect,$query);
		 $user = mysqli_fetch_assoc($result);
		if(!empty($error)){
			header("location:dang_phong.php?error");
		}
		else{
			header("location:dang_phong.php?success");
		}
	}
	else{
		header("location:dang_phong.php?error");
	}
}
else{
	header("location:dang_phong.php");
}

?>