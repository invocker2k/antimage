<!DOCTYPE html>
<html>
<head>
	<title>Khách hàng có tài khoản</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_haeder.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="public/css/chi_tiet_phong.css">
	<link rel="stylesheet" type="text/css" href="public/css/khach_hang_dang_nhap/welcome_user.css">
	<script type="text/javascript" src="public/js/chi_tiet_phong.js"></script>
</head>
<body>
	<?php
		require('kiem_tra_khach_hang.php');
	?>
	<div class="page_wrapper">
		<!-- HEADER -->
		<header class>
			<div class="container-content">
				<div class="wrapper">
					<div class="logo">
						<a href="da_dang_ki/index_auto.php">
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
							<a class="appWrapper-Header-navItemLink" href="dang_phong/dang_phong.php">Đăng tin</a>
						</div>
						<div class="box-user_2">
							<a class="appWrapper-Header-navItemLink" href="da_dang_ki/tin_tuc.php">Tin tức</a>
						</div>
						<div class="box-user_3">
							<a class="appWrapper-Header-navItemLink" href="da_dang_ki/huong_dan.php">Hướng dẫn</a>
						</div>			
					</div>
				</div>
				<div class="user_login">
					<ul class="nav_login"> 
						<li class="open">
							<a href="#" class="dropp">
								<img style="width: 90%;height: 90%; margin-top: 2px; margin-left: 2px;border-radius: 50%;" src="public/images/default-avatar.png" alt="">
							</a>
							<ul class="dropdown_menu" role="menu">
								<li>
									<?php  if (isset($_SESSION['ten_khach_hang'])) : ?>
									
										Tài khoản: <strong><?php echo $_SESSION['ten_khach_hang']; ?></strong>
									
									<?php endif ?>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">
										<i style="color: red" class="fa fa-heart" aria-hidden="true"></i>
										Đăng tin đã lưu
									</a>
								</li>
								<li>
									<a href="dang_phong/dang_phong.php">
										<i class="fa fa-plus-square" aria-hidden="true"></i>
										Đăng tin
									</a>
								</li>
								<li>
									<a href="quan_li_phong/quan_li_phong_dang.php">
										<i class="fa fa-address-card" aria-hidden="true"></i>
										Quản lí tin đăng
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a style="margin-top: 0px" href="#">
										<i class="fa fa-history" aria-hidden="true"></i>
										Lịch sử giao dịch
									</a>
								</li>
								<li>
									<a style="margin-top: 0px" href="thong_tin_user/thong_tin.php">
										<i class="fa fa-user" aria-hidden="true"></i>
										Thông tin cá nhân
									</a>
								</li>
								<li>
									<a style="margin-top: 0px" href="thong_tin_user/doi_mk.php">
										<i class="fa fa-lock" aria-hidden="true"></i>
										Đổi mật khẩu
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a style="margin-top: 0px" href="logout.php">
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


<?php
$connect = mysqli_connect('localhost','root','','web_phong');
mysqli_set_charset($connect,'utf8');
	$ma_phong_tro = $_GET['ma_phong_tro'];
	$query = "select * from phong_tro
	join quan
	on phong_tro.ma_quan = quan.ma_quan
	 where ma_phong_tro = '$ma_phong_tro'";
	$result = mysqli_query($connect,$query);
	$row = mysqli_fetch_array($result);
	mysqli_close($connect);
?>
<div class="tong_chi_tiet">
	<div class="sileshow">
		<div class="sileshow_1">
			<div class="CSSgal">
				<s id="s1"></s> 
				<s id="s2"></s>
				<s id="s3"></s>
				<s id="s4"></s>
				<div class="slider">
					<div style="background:#5b8;">
						<img src="dang_phong/anh/<?php echo($row['anh_1']); ?>" height="100%" width="100%;">
					</div>
					<div style="background:#85b;">
						<img src="dang_phong/anh/<?php echo($row['anh_2']); ?>" height="100%" width="100%;">
					</div>
					<div style="background:#e95;">
						<img src="dang_phong/anh/<?php echo($row['anh_3']); ?>" height="100%" width="100%;">
					</div>
				</div>

				<div class="prevNext">
					<div><a href="#s1"></a><a href="#s2"></a></div>
					<div><a href="#s2"></a><a href="#s3"></a></div>
					<div><a href="#s3"></a><a href="#s1"></a></div>
					<div><a href="#s1"></a><a href="#s3"></a></div>
				</div>

				<div class="bullets">
					<a href="#s1">1</a>
					<a href="#s2">2</a>
					<a href="#s3">3</a>
				</div>
			</div>
		</div>
	</div>
	<div class="noi_dung">
		<div class="noi_dung_1">
			<div class="noi_dung_letf">
				<div class="main_letf">
					<div style="float: left;padding: 0px;"> 
						<span class="type1">Cho thuê trọ</span>
						<h3 class="tieu"><?php echo($row['tieu_de']); ?></h3>
						<p class="pp"><?php echo($row['ten_quan']); ?></p>
					</div>
					<div class="chia_doi">
						<div class="chia_doi_1">
							<div class="intro_form">
								<dl class="dll">
									<dt class="dtt">Địa chỉ:</dt>
									<dd class="ddd"><?php echo($row['dia_chi_phong']); ?></dd>
								</dl>
								<div class="intro">
									<div class="i_letf" style="width: 50%;">
										<dl class="dll">
											<dt class="dtt">Giá:</dt>
											<dd class="ddd"><?php echo number_format(($row['gia'])) ?>   Đồng/tháng</dd>
										</dl>
										<dl class="dll">
											<dt class="dtt">Diện tích:</dt>
											<dd class="ddd"><?php echo($row['dien_tich']); ?> m²</dd>
										</dl>
									</div>
									<div class="i_right">
										<dl class="dll">
											<dt class="dtt">Số lượng người:</dt>
											<dd class="ddd"><?php echo($row['so_luong_nguoi']); ?></dd>
										</dl>
										<dl class="dll">
											<dt class="dtt">Ngày đăng:</dt>
											<dd class="ddd">
												<?php 
												$ngay_dang = $row['ngay_dang'];
												$thoi_gian_da_sua   = date("d-m-y", strtotime($ngay_dang));
												echo $thoi_gian_da_sua; 
												?>
											</dd>
										</dl>
									</div>
								</div>
							</div>
							<div class="line"></div>
							<div class="conten">
								<h2 style="color: #545454;">Thông tin</h2>
								<p class="ppp">
									<?php echo($row['noi_dung_chi_tiet']); ?>
								</p>
							</div>
							<div class="line"></div>
							<h2 style="color: #545454;">Liên hệ chính chủ</h2>
							<div class="box-info-bottom">
								<dl class="dlllll">
									<dt class="uuu">
										<i class="fa fa-user"></i>
									</dt>
									<dd>
										<h3 class="hrr">Chủ trọ</h3>
									</dd>
								</dl>
								<dl class="dlllll">
									<dt class="uuu">
										<i class="fa fa-user-secret" aria-hidden="true"></i>
									</dt>
									<dd>
										<h3 class="hrr"><?php echo($row['ten_nguoi_dang']); ?></h3>
									</dd>
								</dl>
								<dl class="dlllll">
									<dt class="uuu">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</dt>
									<dd>
										<h3 class="hrr"><?php echo($row['sdt_nguoi_dang']); ?></h3>
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Phần bên phải -->
			<div class="noi_dung_right">
				<div class="box-contact right">
					<h2 style="font-size: 14pt;">Liên hệ</h2>
					<div class="ngan"></div>
					<dl>
						<dt class="dt">
							<i class="fa fa-user"></i>
						</dt>
						<dd><h3 class="h3">Chủ trọ</h3></dd>
					</dl>
					<div class="phone">
						<div class="arg">
							<i class="fa fa-mobile" aria-hidden="true"></i>
							<span style="font-size: 16px;"><?php echo($row['sdt_nguoi_dang']); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require ('footer.php') ?>