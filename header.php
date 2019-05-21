<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_haeder.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="public/css/chi_tiet_phong.css">
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
							<img src="public/images/logo_text_blue.png">
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
								<input type="text"  name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Nhập tên quận bạn muốn tìm (VD: Hai Bà Trưng)" class="search-form_input">
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
								<a href="tin_tuc/huong_dan.php">Hướng dẫn</a>
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