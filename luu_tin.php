<?php
	session_start();
	if (!isset($_SESSION['ma_khach_hang'])) {
		echo "<script> alert('Bạn phải đăng nhập để sử dụng chức năng này');location.href='index.php'</script>";
	}
	else{
		$ma_phong_tro = $_GET['ma_phong_tro'];
		$ma_khach_hang = $_SESSION['ma_khach_hang'];
		$connect = mysqli_connect('localhost','root','','web_phong');

		mysqli_set_charset($connect,'utf8');
		$query = ("insert into quan_tam(ma_phong_tro,ma_khach_hang) values ('$ma_phong_tro','$ma_khach_hang')");


		$result = mysqli_query($connect,$query);

		if(!empty($error)){
			header("location:da_dang_ki/index_auto.php");
			$_SESSION["err"]=1;

		}
		else{
			header("location:da_dang_ki/index_auto.php");
			$_SESSION["success"]=2;
		}
	}
?>