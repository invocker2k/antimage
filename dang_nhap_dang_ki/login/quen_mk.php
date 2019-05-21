<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quên mật khẩu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_haeder.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/chi_tiet_phong.css">
	<link rel="stylesheet" type="text/css" href="quen.css">
	<script type="text/javascript" src="public/js/chi_tiet_phong.js"></script>
	 <!-- <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script>  -->
</head>
<body>
	<div class="page_wrapper">
		<!-- HEADER -->
		<header class>
			<div class="container-content">
				<div class="wrapper">
					<div class="logo">
						<a href="index.php">
							<img src="../../public/images/logo_text_blue.png">
						</a>
					</div>
					<div class="box-search">
						<form class="top-search" id="top-search">
							<?php
							$tim_kiem = "";
							if(isset($_GET['tim_kiem'])){
								$tim_kiem = $_GET['tim_kiem'];
							}
							?>
							<label class="search-form_label">
								<input type="text"  name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Tìm kiếm nhanh" class="search-form_input">
								<!-- <a class="search-btn" href="">
									<i class="fas fa-search"></i>
								</a> -->
								<button class="search-btn" style="float: left;position: absolute;background: #fff;border: 1px">
									<i  style="line-height: 32px;width: 22px; background: #fff" class="fa fa-search" aria-hidden="true"></i>
								</button>
							</label>
						</form>
					</div>
					<div class="box-user">
						<ul class="nav_top">
							<li class="li_add-new">
								<a href="dang_nhap_dang_ki/dang_ki/dang_ki.php" class="btn red add-new t frm-login">Đăng tin</a>
							</li>
							<li class="li_news">
								<a href="tin_tuc/tin_tuc.php">Tin tức</a>
							</li>
							<li class="li_guide">
								<a href="#">Hướng dẫn</a>
							</li>
							<li class="li_register">
								<a href="dang_nhap_dang_ki/dang_ki/dang_ki.php">Đăng kí</a>
							</li>
							<li class="li_login">
								<a href="dang_nhap_dang_ki/login/login.php">Đăng nhập</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<div class="quen_mk">
			 <div class="quen">
			 	 <div class="trang_chu">
						<div class="trang_chu_1">
							<span style="font-size: 18px;">
								<i style="font-size: 13px;color: #14F209" class="fa fa-home" aria-hidden="true"></i>
								<a style="text-decoration: none;color: #14F209; font-size: 16px;" href="../../index.php">Trang chủ</a>
								<i style="margin-top: 10px; font-size: 11px; color: #BCABAB" class="fa fa-angle-double-right" aria-hidden="true"></i>
								<a style="text-decoration: none;color: #BBA3A3;font-size: 16px" href="#">Quên mật khẩu</a>
							</span>
						</div>
						<div class="trang_chu_2">
							<div class="phan_trang">
								<h1 style="font-size: 28px;     font-weight: 700;">
									Bạn quên mật khẩu?
								</h1>
							</div>
						</div>
					</div>
					<div class="line"></div>
					<div class="quen_1">
						<p class="ppp">Vui lòng điền đầy đủ thông tin của bạn để lấy lại mật khẩu</p>
						<div class="ulli">
							<?php

							if (isset($_POST['bttLogin'])) {
								$con = mysqli_connect('localhost','root','','web_phong');
								$ten_khach_hang = $_POST['ten_khach_hang'];
								$email = $_POST['email'];
								$dia_chi = $_POST['dia_chi'];
								$sdt = $_POST['sdt'];
								$result = mysqli_query($con, "select * from khach_hang where ten_khach_hang= '$ten_khach_hang' and email = '$email' and dia_chi = '$dia_chi' and sdt = '$sdt'");
								if(mysqli_num_rows($result)==1) {
									header('location: tiep.php');
								}
								else
									echo "<span style='color: red;'>Tên đăng nhập hoặc mật khẩu không đúng</span>";
							}
							?>
							<form>
								<div class="ten_dn">
									<label for="ten_khach_hang" style="margin-left: 96px;">Tên đăng nhập</label><br>
									<input type="text" name="ten_khach_hang" class="form-contro">
								</div>
								<div class="ten_dn" style="margin-top: 15px;">
									<label for="email" style="margin-left: 96px;">Email</label><br>
									<input type="text" name="email" class="form-contro">
								</div>
								<div class="ten_dn" style="margin-top: 15px;">
									<label for="dia_chi" style="margin-left: 96px;">Địa chỉ</label><br>
									<input type="text" name="dia_chi" class="form-contro">
								</div>
								<div class="ten_dn" style="margin-top: 15px;">
									<label for="sdt" style="margin-left: 96px;">Số điện thoại</label><br>
									<input type="text" name="sdt" class="form-contro">
								</div>
								<div class="btn_wrapper">
									<button class="btnnn btnnn-success btn-block" onclick="return dang_nhap()" name="bttLogin" style="margin-left: 230px;margin-top: 20px;">
										<i class="fa fa-sign-in"></i> Tiếp tục
									</button>
								</div>
							</form>
						</div>
					</div>
			 </div>
		</div>

		