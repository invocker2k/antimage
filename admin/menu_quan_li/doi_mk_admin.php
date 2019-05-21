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
							//lấy thông tin phòng
							if(isset($_SESSION["ma_admin"])){
								$ma_admin= $_SESSION["ma_admin"];
							}
							$query       = "select * from admin 
							where ma_admin = $ma_admin";
							$result      = mysqli_query($connect,$query);
							$row         = mysqli_fetch_array($result);
							if ($_SERVER['REQUEST_METHOD'] == 'POST') {
								$mat_khau_cu = $_POST['mat_khau_cu'];
								$mat_khau_moi = trim($_POST['mat_khau_moi']);
								$query = "select ma_admin,mat_khau from admin where mat_khau=('{$mat_khau_cu}') and ma_admin = $ma_admin";
								$result = mysqli_query($connect,$query);
								// kt_query($result,$query);
								if (mysqli_num_rows($result) == 1) {
									if (trim($_POST['mat_khau_moi']!=trim($_POST['xn_mat_khau_moi']))) {
										$loi_1="<p style='color:red;margin-top:0px;'>Mật khẩu không khớp</p>";
									}
									else{
										$query_up = "update admin set mat_khau = '{$mat_khau_moi}' where ma_admin = $ma_admin";
										$result_up = mysqli_query($connect,$query_up);
										if (mysqli_affected_rows($connect) == 1) {
											$loi_3="<p style='color:green;margin-top:0px;'>Đổi mật khẩu thành công</p>";
										}
										else{
											$loi_4="<p style='color:red;margin-top:0px;'>Đổi mật khẩu không thành công</p>";
										}
									}
								}
								else{
									$loi="<p style='color:red;margin-top:0px;'>Mật khẩu cũ không đúng</p>";
								}
							}
							
							?>
							
						</div>
					</div>
				</div>
					<?php
					if (isset($loi_3)) {
						echo $loi_3;
					}
					?>
					<?php
					if (isset($loi_4)) {
						echo $loi_4;
					}
					?>
					<?php
					if (isset($loi_5)) {
						echo $loi_5;
					}
					?>
					<form method="post" style="margin-top: 50px;margin-left: 300px;">
						<input type="hidden" name="ma_admin" value ="<?php echo ($row['ma_admin']) ?>">
						<ul>
							<li style="margin-bottom: 20px;">
								<div class="div_boder" style="margin-bottom: 5px;">Mật khẩu cũ</div>
								<div style="width: 500px">
									<input type="password" placeholder="Mật khẩu cũ" class="form_hoai" name="mat_khau_cu" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);"  >
									<?php
									if (isset($loi)) {
										echo $loi;
									}
									?>
								</div>
							</li>
							<li style="margin-bottom: 20px;">
								<div class="div_boder" style="margin-bottom: 5px;">Mật khẩu mới</div>
								<div style="width: 500px">
									<input type="password" placeholder="Mật khẩu mới" class="form_hoai" name="mat_khau_moi" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);" required>
									<?php
									if (isset($loi_1)) {
										echo $loi_1;
									}
									?>
								</div>
							</li>
							<li>
								<div class="div_boder" style="margin-bottom: 5px;">Xác nhận mật khẩu mới</div>
								<div style="width: 500px">
									<input type="password" placeholder="Xác nhận mật khẩu mới" class="form_hoai" name="xn_mat_khau_moi" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);" required>
									<?php
									if (isset($loi_1)) {
										echo $loi_1;
									}
									?>
								</div>
							</li>
						</ul>
						<div class="chinh_sua">
							<div class="chinh_sua_11">
								<button type="submit" class="luu_thay_doi">Đổi mật khẩu</button>
							</div>
						</div>
					</form>
</body>
</html>