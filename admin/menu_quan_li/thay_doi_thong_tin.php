<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí của admin</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
							//lấy thông tin phòng
	if(isset($_SESSION["ma_admin"])){
		$ma_admin= $_SESSION["ma_admin"];
	}
	$query       = "select * from admin 
	where ma_admin = $ma_admin";
	$result      = mysqli_query($connect,$query);
	$row         = mysqli_fetch_array($result);
	?>
	<div class="user_mani">
			<div class="user_mani_1">
				<div class="user_right" style="position: absolute;left: 300px">
					<?php
					if(isset($_GET['success'])){
						echo "<h3 style='color: green'>Cập nhật thành công</h3>";
								// header("location:gg.php");
					}
					else if(isset($_GET['error'])){
						echo "<h3 style='color: red'>Cập nhật thất bại</h3>";
					}
					?>
					<form method="post" action="update_admin.php">
						<input type="hidden" name="ma_admin" value ="<?php echo ($row['ma_admin']) ?>">
						<ul>
							<li>
								<div class="div_boder">Địa chỉ</div>
								<div style="width: 500px">
									<input type="text" placeholder="Địa chỉ" class="form_hoai" name="dia_chi" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);" value="<?php echo($row['dia_chi']) ?>" required>
								</div>
							</li>
							<li style="margin-top: 15px;">
								<div class="div_boder">Ngày sinh</div>
								<div style="width: 500px">
									<input type="date" placeholder="Địa chỉ" class="form_hoai" name="ngay_sinh" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);" value="<?php echo($row['ngay_sinh']) ?>" required>
								</div>
							</li>
							<li style="margin-top: 15px;">
								<div class="div_boder">Số điện thoại</div>
								<div style="width: 500px">
									<input type="number" placeholder="Số điện thoại" class="form_hoai" name="sdt" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);" value="<?php echo($row['sdt']) ?>" required>
								</div>
							</li>
						</ul>
						<div class="chinh_sua">
							<div class="chinh_sua_11">
								<button type="submit" class="luu_thay_doi">Lưu thay đổi</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>



	</body>
</html>