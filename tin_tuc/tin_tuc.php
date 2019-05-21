<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_haeder.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../public/css/chi_tiet_phong.css">
	<script type="text/javascript" src="public/js/chi_tiet_phong.js"></script>
	 <!-- <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script>  -->
	 	<style>
		*{
			padding: 0px;
			margin: 0px;
		}
		#top{
			height: 100%;
			width: 800px;
			margin: auto;
			background-color: black;

		}
		#menu{
			height: 30px;
			width: 800px;
			margin: auto;
			background-color: white;
		}
		#wrappei{
			height: 1000px;
			width: 800px;
			margin: auto;
		}
		#left{
			width: 618px;
			float: left;
			border-right: 1px solid white;

		}
		.new h3{
			
			margin-bottom: 5px;
		}
		.new{
			border-bottom: 1px solid white;
			margin: 5px 10px 15px 10px;
			padding-bottom: 5px;
		}
		.new img {
			border: 1px solid #cccccc;
			padding: 2px;
			float: left;
			margin-right: 5px;
		}
		#right{
			width: 178px;
			float: left;
			border: 1px solid white;
		}
	
	</style>
</head>
<body>
	<div class="page_wrapper">
		<!-- HEADER -->
		<header class>
			<div class="container-content">
				<div class="wrapper">
					<div class="logo">
						<a href="../index.php">
							<img src="../public/images/logo_text_blue.png">
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
								<a href="../dang_nhap_dang_ki/dang_ki/dang_ki.php" class="btn red add-new t frm-login">Đăng tin</a>
							</li>
							<li class="li_news">
								<a href="tin_tuc.php">Tin tức</a>
							</li>
							<li class="li_guide">
								<a href="huong_dan.php">Hướng dẫn</a>
							</li>
							<li class="li_register">
								<a href="../dang_nhap_dang_ki/dang_ki/dang_ki.php">Đăng kí</a>
							</li>
							<li class="li_login">
								<a href="../dang_nhap_dang_ki/login/login.php">Đăng nhập</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>



		<div id="top">Tiêu đề</div>
	<div id="menu"></div>
	<div id="wrappei">
		<div id="left">
			<div class="new">
				<h3>Phòng trọ bách khoa</h3>
				<img src="../public/images/anh phong tro.jpg" width="140px" height="130px">
				
					Chính chủ cần cho thuê phòng trọ tiện nghi, có ban công, máy lạnh, wc riêng biệt, rộng thoáng mát.<br>
					Địa chỉ: 363B Đường Lê Đại Hành, Phường 11, Quận 11, Hồ Chí Minh (ngay sau cây xăng Lê Đại Hành)<br>
					Giá: 2.8 - 3 triệu/tháng.<br>
					Diện tích: 18-20m2.<br>
					Liên hệ: 0979602468 A. Việt - 0913662386 Chị Linh.
				
			</div>
			<div class="new">
				<h3>Phòng trọ xây dựng</h3>
				<img src="../public/images/anh1.jpg" width="140px" height="130px">
				
					Chính chủ cần cho thuê phòng trọ tiện nghi, có ban công, máy lạnh, wc riêng biệt, rộng thoáng mát.<br>
					Địa chỉ: 363B Đường Lê Đại Hành, Phường 11, Quận 11, Hồ Chí Minh (ngay sau cây xăng Lê Đại Hành)<br>
					Giá: 2.8 - 3 triệu/tháng.<br>
					Diện tích: 18-20m2.<br>
					Liên hệ: 0979602468 A. Việt - 0913662386 Chị Linh.
				
			</div>
			<div class="new">
				<h3>Phòng trọ kinh tế quốc dân</h3>
				<img src="../public/images/anh2.jpg" width="140px" height="130px">
				
					Chính chủ cần cho thuê phòng trọ tiện nghi, có ban công, máy lạnh, wc riêng biệt, rộng thoáng mát.<br>
					Địa chỉ: 363B Đường Lê Đại Hành, Phường 11, Quận 11, Hồ Chí Minh (ngay sau cây xăng Lê Đại Hành)<br>
					Giá: 2.8 - 3 triệu/tháng.<br>
					Diện tích: 18-20m2.<br>
					Liên hệ: 0979602468 A. Việt - 0913662386 Chị Linh.
				
			</div>
			<div class="new">
				<h3>Phòng trọ giao thông vận tải</h3>
				<img src="../public/images/anh8.jpg" width="140px" height="130px">
				
					Chính chủ cần cho thuê phòng trọ tiện nghi, có ban công, máy lạnh, wc riêng biệt, rộng thoáng mát.<br>
					Địa chỉ: 363B Đường Lê Đại Hành, Phường 11, Quận 11, Hồ Chí Minh (ngay sau cây xăng Lê Đại Hành)<br>
					Giá: 2.8 - 3 triệu/tháng.<br>
					Diện tích: 18-20m2.<br>
					Liên hệ: 0979602468 A. Việt - 0913662386 Chị Linh.
				
			</div>
			<div class="new">
				<h3>Phòng trọ bệnh viện bạch mai</h3>
				<img src="../public/images/anh9.jpg" width="140px" height="130px">
				
					Chính chủ cần cho thuê phòng trọ tiện nghi, có ban công, máy lạnh, wc riêng biệt, rộng thoáng mát.<br>
					Địa chỉ: 363B Đường Lê Đại Hành, Phường 11, Quận 11, Hồ Chí Minh (ngay sau cây xăng Lê Đại Hành)<br>
					Giá: 2.8 - 3 triệu/tháng.<br>
					Diện tích: 18-20m2.<br>
					Liên hệ: 0979602468 A. Việt - 0913662386 Chị Linh.
				
			</div>
		</div>
		<div id="right">
			<img src="../public/images/anhnha.jpg" width="180px" height="150px">
			<br><br>
			<img src="../public/images/anhnha5.jpg" width="180px" height="150px">
			<br><br>
			<img src="../public/images/anhnha2.jpg" width="180px" height="150px">
			<br><br>
			<img src="../public/images/anhnha3.jpg" width="180px" height="150px">
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
	</div>
</body>
</html>