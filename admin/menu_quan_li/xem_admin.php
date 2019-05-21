<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí của admin</title>
	<link rel="stylesheet" type="text/css" href="../css/quan_li.css">
	<script type="text/javascript" src="../css/quan_li.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_haeder.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/chi_tiet_phong.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/quan_li_user/thong_tin_user.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/quan_li_phong/phong.css">
	<script type="text/javascript" src="public/js/chi_tiet_phong.js"></script>
</head>
<body>
	<?php require_once('kiem_tra_admin.php');  ?>
	<div id="container">
		<ul id="menu">
			<li><a href="#">Quản lí phòng</a>
				<ul>
					<li><a href="xem_all_phong.php">Xem phòng</a></li>
				</ul>
			</li>
			<?php if($_SESSION['cap_do']==1){ ?>
				<li><a href="#">Quản lí nhân viên</a>
					<ul>
						<li><a href="xem_admin.php">Xem tất cả nhân viên</a></li>
						<li><a href="them_admin.php">Thêm nhân viên</a></li>
					</ul>
				</li>
			<?php } ?>
			<li><a href="cho_duyet.php">Các bài chờ duyệt</a>
			</li>
			<li><a href="cac_bai_da_duyet.php">Các bài đã duyệt</a>
			</li>
			<li><a href="cac_bai_da_huy.php">Các bài đã hủy</a>
			</li>
			<li><a href="doi_mk_admin.php">Đổi mật khẩu</a></li>
			<li><a href="thay_doi_thong_tin.php">Thay đổi thông tin cá nhân</a></li>
			<li><a href="../dang_xuat.php">Đăng xuất</a></li>
		</ul>
	</div>
	<?php
	$connect = mysqli_connect('localhost','root','','web_phong');
	mysqli_set_charset($connect,'utf8');
	if(isset($_SESSION["ma_admin"])){
		$ma_admin= $_SESSION["ma_admin"];
	}
	$query = "select * from admin
	where cap_do = 0";
	$result = mysqli_query($connect,$query);
	$count = mysqli_num_rows($result);
	mysqli_close($connect);
	?>
	<?php
	if(isset($_GET['successs'])){
		echo "<h3 style='color: green'>Xóa thành công</h3>";
								// header("location:gg.php");
	}
	else if(isset($_GET['errorr'])){
		echo "<h3 style='color: red'>Xóa phòng thất bại</h3>";
	}
	?>
	<table border="1" style="margin-top: 100px;">
		<tr>
			<td style="width: 150px;">Mã nhân viên</td>
			<td style="width: 150px;">Tên nhân viên</td>
			<td style="width: 150px;">Email</td>
			<td style="width: 150px;">Địa chỉ</td>
			<td style="width: 150px;">Số điện thoại</td>
			<td style="width: 150px;">Ngày sinh</td>
			<td style="width: 150px;">Hành động</td>
		</tr>
		<?php
		while($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo ($row['ma_admin']) ?></td>
			<td><?php echo ($row['ten_admin']) ?></td>
			<td><?php echo ($row['email']) ?></td>
			<td><?php echo ($row['dia_chi']) ?></td>
			<td><?php echo ($row['sdt']) ?></td>
			<td><?php echo ($row['ngay_sinh']) ?></td>
			<td>
				<a href="xoa_admin.php?ma_admin=<?php echo($row['ma_admin']);?>" class="xoa">
				Xóa nhân viên</a>
			</td>
		</tr>

	<?php } ?>
	</table>


</body>
</html>