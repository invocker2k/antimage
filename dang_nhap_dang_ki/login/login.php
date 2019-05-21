<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập tài khoản</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_haeder.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/css_login/login.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="../../public/js/js_login.js"></script>
</head>
<body>
	<div class="page_wrapper">
		<!-- HEADER -->
		<header class>
			<div class="container-content">
				<div class="wrapper">
					<div class="logo">
						<a href="../../index.php">
							<img src="https://tromoi.com/logo_text_blue.png">
						</a>
					</div>
					<div class="box-search">
						<form class="top-search" id="top-search">
							<label class="search-form_label">
								<input type="text" name="" placeholder="Tìm kiếm nhanh" class="search-form_input">
								<a class="search-btn" href="">
									<i class="fas fa-search"></i>
								</a>
							</label>
						</form>
					</div>
					<div class="box-user">
						<ul class="nav_top">
							<li class="li_add-new">
								<a href="../dang_ki/dang_ki.php" class="btn red add-new t frm-login">Đăng tin</a>
							</li>
							<li class="li_news">
								<a href="../../tin_tuc/tin_tuc.php">Tin tức</a>
							</li>
							<li class="li_guide">
								<a href="../../tin_tuc/huong_dan.php">Hướng dẫn</a>
							</li>
							<li class="li_register">
								<a href="../dang_ki/dang_ki.php">Đăng kí</a>
							</li>
							<li class="li_login">
								<a href="login.php">Đăng nhập</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>

			<!-- XỬ LÍ ĐĂNG NHẬP -->
			<div class="login_user">
				<div class="login_user_1">
					<div class="trang_chu">
						<div class="trang_chu_1">
							<span style="font-size: 18px;">
								<i style="font-size: 13px;color: #14F209" class="fa fa-home" aria-hidden="true"></i>
								<a style="text-decoration: none;color: #14F209; font-size: 16px;" href="../../index.php">Trang chủ</a>
								<i style="margin-top: 10px; font-size: 11px; color: #BCABAB" class="fa fa-angle-double-right" aria-hidden="true"></i>
								<a style="text-decoration: none;color: #BBA3A3;font-size: 16px" href="#">Đăng nhập</a>
							</span>
						</div>
						<div class="trang_chu_2">
							<div class="phan_trang">
								<h1 style="font-size: 28px;     font-weight: 700;">
									Đăng nhập
								</h1>
							</div>
						</div>
					</div>
					<div class="login_main">
						<div class="login_main_1">
							<div class="login_wapper">
								<!-- XỬ LÍ DATABASE -->
								<?php
								
								if (isset($_POST['bttLogin'])) {
									$con = mysqli_connect('localhost','root','','web_phong');
									$ten_khach_hang = $_POST['ten_khach_hang'];
									$mat_khau = $_POST['mat_khau'];
									$result = mysqli_query($con, "select * from khach_hang where ten_khach_hang= '$ten_khach_hang' and mat_khau = '$mat_khau'");
									if(mysqli_num_rows($result)==1) {
										session_start();
										$row = mysqli_fetch_array($result);
										$_SESSION['ten_khach_hang'] = $ten_khach_hang;
										$_SESSION['ma_khach_hang'] = $row['ma_khach_hang'];
     									header('location: ../../da_dang_ki/index_auto.php');
									}
									else
										echo "<span style='color: red;'>Tên đăng nhập hoặc mật khẩu không đúng</span>";
								}
								?>
								<form method="post">
									<div class="form_group">
										<label for="ten_khach_hang">Tên đăng nhập</label><br>
										<input type="text" name="ten_khach_hang" id="ten_khach_hang" class="form-control">
										<span id="loi_ten" class="error_name" style="color: red;"></span>
									</div>
									<div class="form_group">
										<label for="mat_khau">Mật khẩu</label><br>
										<input type="password" name="mat_khau" id="mat_khau" class="form-control">
										<span id="loi_mat_khau" class="error_name" style="color: red;"></span>
									</div>
									<!-- <div class="custom-control custom-checkbox">
										<input type="checkbox" name="nho_tai_khoan">
										<label>Nhớ mật khẩu</label>
									</div> -->
									<div class="btn_wrapper">
										<button class="btnnn btnnn-success btn-block" onclick="return dang_nhap()" name="bttLogin">
											<i class="fa fa-sign-in"></i> Đăng nhập
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="login_main_2">
							<div class="facebook">
								<div class="right">
									<p class="font-16 mgb-20">Đăng nhập bằng Facebook hoặc Google</p>
									<div class="social-connect-container">
										<div class="sc-buttons">
											<button onclick="myFunction()" class="sc-facebook">
												<span>Đăng nhập bằng Facebook</span>
											</button>
											<button onclick="myFunction()" class="sc-google">
												<span>Đăng nhập bằng Google+</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="login_main_3">
						<p style="text-align: center;margin-top: 35px;font-size:17px;">Bạn chưa có tài khoản? <a style="font-weight: bold;color: #3918E3;text-decoration: none;" href="../dang_ki/dang_ki.php">Đăng kí ngay</a></p>

					</div>
				</div>
			</div>

		<div id="footer_body">
			<div class="footer_main">
				<div class="footer_img">
					<img src="https://tromoi.com/logo.png">
				</div>
				<div class="footer_font">
					<p style="font-family: 'UVNHONGHAHEP'; font-size: 28px;color: #FFF;">PHÒNG TRỌ SINH VIÊN</p>
					<span class="span">Email:  </span>
					 duykhanhth1999@gmail.com<br>
					<span class="span">Điện thoại:</span>
					0978751451<br>
					<span class="span">Facebook:</span>
					https://www.facebook.com/khanhs.IT<br>
					<span class="span">Copyright:</span>
					© 2015 - 2018
				</div>
				<div class="footer_dong">
					
				</div>
			</div>
		</div>
		<script>
			function myFunction() {
				alert("Chức năng nâng cao chưa ra mắt ! Xin lỗi vì sự bất tiện này");
			}
		</script>