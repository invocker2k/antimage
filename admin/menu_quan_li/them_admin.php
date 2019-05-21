<?php
session_start();
$ten_admin = "";
$email    = "";
$errors = array();
$errorss = array();


$db = mysqli_connect('localhost', 'root', '', 'web_phong');
mysqli_set_charset($db,'utf8');


if (isset($_POST['reg_user'])) {
  $ten_admin = mysqli_real_escape_string($db, $_POST['ten_admin']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mat_khau = mysqli_real_escape_string($db, $_POST['mat_khau']);
  $mat_khau_1 = mysqli_real_escape_string($db, $_POST['mat_khau_1']);
  if ($mat_khau != $mat_khau_1) {
  array_push($errors, "Hai mật khẩu không khớp");
  }
  $user_check_query = "SELECT * FROM admin WHERE ten_admin='$ten_admin' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['ten_admin'] === $ten_admin) {
      array_push($errors, "Tên người dùng đã tồn tại");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email đã tồn tại");
    }
  }
  if (count($errors) == 0) {
    $mat_khau = ($mat_khau);
    $query = "INSERT INTO admin (ten_admin, email, mat_khau) 
          VALUES('$ten_admin', '$email', '$mat_khau')";
    mysqli_query($db, $query);
    $_SESSION['ma_khach_hang'] = $ma_khach_hang;
    $_SESSION['ten_admin'] = $ten_admin;
    $_SESSION['email'] = $email;
    header('location: them_admin.php');
  }
}
?>
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
	<link rel="stylesheet" type="text/css" href="../../public/css/css_login/dang_ki.css">
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
	<div class="login_main_1" style="margin-left: 300px;margin-top: 100px">
						<div class="login_wapper">
							<form method="post">
								<?php include('errors.php'); ?>
								<div class="form_group">
									<label for="ten_admin">Tên đăng nhập</label><br>
									<input type="text" name="ten_admin" id="ten_admin" class="form-control">
									<span id="loi_ten" class="error_name" style="color: red;"></span>
								</div>
								<div class="form_group">
									<label for="email">Email</label><br>
									<input type="email" name="email" id="email" class="form-control">
									<span id="loi_email" class="error_email" style="color: red;"></span>
								</div>
								<!-- thêm -->
								<div class="form_group">
									<label for="mat_khau">Mật khẩu</label><br>
									<input type="password" name="mat_khau" id="mat_khau" class="form-control">
									<span id="loi_mat_khau" class="error_name" style="color: red;"></span>
								</div>

								<div class="form_group">
									<label for="mat_khau_1">Xác nhận mật khẩu</label><br>
									<input type="password" name="mat_khau_1" id="mat_khau_1" class="form-control">
									<span id="loi_mat_khau_1" class="error_name" style="color: red;"></span>
								</div>

								<div class="btn_wrapper">
									<button class="btnnn btnnn-success btn-block" onclick="return dang_ki()" name="reg_user">
										<i class="fa fa-sign-in"></i> Thêm nhân viên
									</button>
								</div>
							</form>
						</div>
					</div>
					


</body>
</html>