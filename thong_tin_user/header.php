<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin cá nhân</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/khach_hang_dang_nhap/welcome_user.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../public/css/quan_li_phong/phong.css">
	<link rel="stylesheet" type="text/css" href="../public/css/quan_li_user/thong_tin_user.css">
	 <!-- <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script> --> 
</head>
<body>
	<?php
		require('kiem_tra_kh.php');
	?>
	<div class="page_wrapper">
		<!-- HEADER -->
		<header class>
			<div class="container-content">
				<div class="wrapper">
					<div class="logo">
						<a href="../da_dang_ki/index_auto.php">
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
						<div class="box-user_1">
							<a class="appWrapper-Header-navItemLink" href="../dang_phong/dang_phong.php">Đăng tin</a>
						</div>
						<div class="box-user_2">
							<a class="appWrapper-Header-navItemLink" href="../da_dang_ki/tin_tuc.php">Tin tức</a>
						</div>
						<div class="box-user_3">
							<a class="appWrapper-Header-navItemLink" href="../da_dang_ki/huong_dan.php">Hướng dẫn</a>
						</div>			
					</div>
				</div>
				<div class="user_login">
					<ul class="nav_login"> 
						<li class="open">
							<a href="#" class="dropp">
								<img style="width: 90%;height: 90%; margin-top: 2px; margin-left: 2px;border-radius: 50%;" src="../public/images/default-avatar.png" alt="">
							</a>
							<ul class="dropdown_menu" role="menu">
								<li>
									<?php  if (isset($_SESSION['ten_khach_hang'])) : ?>
									
										Tài khoản: <strong><?php echo $_SESSION['ten_khach_hang']; ?></strong>
									
									<?php endif ?>
								</li>
								<li class="divider"></li>
								<li>
									<a href="../tin_luu/tin_da_luu.php">
										<i style="color: red" class="fa fa-heart" aria-hidden="true"></i>
										Tin đã lưu
									</a>
								</li>
								<li>
									<a href="../dang_phong/dang_phong.php">
										<i class="fa fa-plus-square" aria-hidden="true"></i>
										Đăng tin
									</a>
								</li>
								<li>
									<a href="../quan_li_phong/quan_li_phong_dang.php">
										<i class="fa fa-address-card" aria-hidden="true"></i>
										Quản lí tin đăng
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a style="margin-top: 0px" href="../thong_tin_user/thong_tin.php">
										<i class="fa fa-user" aria-hidden="true"></i>
										Thông tin cá nhân
									</a>
								</li>
								<li>
									<a style="margin-top: 0px" href="doi_mk.php">
										<i class="fa fa-lock" aria-hidden="true"></i>
										Đổi mật khẩu
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a style="margin-top: 0px" href="../logout.php">
										<i class="fa fa-power-off"></i>
										Đăng xuất
									</a>
								</li>
							</ul>
						</li>
					</ul>		
				</div>
			</div>
		</header>