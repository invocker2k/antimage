<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tin đăng đã lưu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/khach_hang_dang_nhap/welcome_user.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../public/css/quan_li_user/luu_tin.css"> 
</head>
<body>
	<?php
	require('../kiem_tra_khach_hang.php');
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
							<?php
							$tim_kiem = "";
							if(isset($_GET['tim_kiem'])){
								$tim_kiem = $_GET['tim_kiem'];
							}
							?>
							<label class="search-form_label">
								<input type="text" name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Tìm kiếm nhanh" class="search-form_input">
								<button class="search-btn" style="float: left;position: absolute;background: #fff;border: 1px">
									<i  style="line-height: 32px;width: 22px; background: #fff" class="fa fa-search" aria-hidden="true"></i>
								</button>
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
									<a href="tin_da_luu.php">
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
									<a style="margin-top: 0px" href="../thong_tin_user/doi_mk.php">
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


		<?php
		$connect = mysqli_connect('localhost','root','','web_phong');
		mysqli_set_charset($connect,'utf8');
		if(isset($_SESSION["ma_khach_hang"])){
			$ma_khach_hang = $_SESSION["ma_khach_hang"];
		}
		$query = ("SELECT * FROM `quan_tam` JOIN phong_tro ON quan_tam.ma_phong_tro=phong_tro.ma_phong_tro WHERE quan_tam.ma_khach_hang=$ma_khach_hang");
		$result      = mysqli_query($connect,$query);
		?>
		<div class="luu_tong">
			<div class="luu_tong_1">
				<div class="trang_chu">
						<div class="trang_chu_1">
							<span style="font-size: 18px;">
								<i style="font-size: 13px;color: #14F209" class="fa fa-home" aria-hidden="true"></i>
								<a style="text-decoration: none;color: #14F209; font-size: 16px;" href="../../index.php">Trang chủ</a>
								<i style="margin-top: 10px; font-size: 11px; color: #BCABAB" class="fa fa-angle-double-right" aria-hidden="true"></i>
								<a style="text-decoration: none;color: #BBA3A3;font-size: 16px" href="#">Tin đăng đã lưu</a>
							</span>
						</div>
						<div class="trang_chu_2">
							<div class="phan_trang">
								<h1 style="font-size: 28px;     font-weight: 700;">
									Tin đăng đã lưu
								</h1>
							</div>
						</div>
					</div>
					<div class="line"></div>
					<?php
					while($row = mysqli_fetch_array($result)){
						?>
					<div class="lulu_1" style="margin-bottom: 20px;">
						<div class="lulu_anh">
							<img src="../dang_phong/anh/<?php echo($row['anh_1']); ?>" height="100%" width="100%;">
						</div>
						<div class="lulu_de"> 
							<a href="../chi_tiet_phong_co_tk.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>">
								<h3 style="font-size: 14px;margin-left: 20px"><?php echo($row['tieu_de']);?></h3>
							</a>
						</div>
						<div class="lulu_gia" style="color: red">
							<span style="margin-left: 20px"><?php echo number_format(($row['gia'])) ?></span>  <span style="color: #c3c3c3;font-size: 10pt;">Đồng/tháng</span>
						</div>
						<div class="lulu_dia_chi">
							<p style=" font-size: 15px;margin-left: 20px">Địa chỉ: <?php echo($row['dia_chi_phong']) ;?></p>
						</div>
						<div class="thong_tinn">
							<div class="anh_nguoi_dang">
								<img src="../public/images/anh_nguoi_dung.png" style="width: 100%;height: 100%">
							</div>
							<div class="ten_nguoi">
								<span style="color: #545454;margin-left: 5px"><?php echo($row['ten_nguoi_dang']) ?></span>
							</div>
							<div class="phone">
								<i class="fa fa-phone" aria-hidden="true" style="height: 100%;color: #545454"></i>
								<span style="color:#545454"><?php echo($row['sdt_nguoi_dang']) ?></span>
							</div>
							<div class="bo_luu">
								<a href="xoa_luu.php?ma_phong_tro=<?php echo($row['ma_phong_tro']);?>" class="bo">Bỏ lưu</a>
							</div>
						</div>
					</div>
					<div class="line"></div>
					<?php
			}
			?>
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

