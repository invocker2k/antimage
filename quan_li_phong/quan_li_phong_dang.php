<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí bài đăng</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/khach_hang_dang_nhap/welcome_user.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../public/css/quan_li_phong/phong.css">
	<!-- <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script> --> 
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
									<a href="#">
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

		<div class="tong_main">
			<div class="giua">
				<div class="trang_chu_1">
					<span style="font-size: 18px;">
						<i style="font-size: 13px;color: #14F209" class="fa fa-home" aria-hidden="true"></i>
						<a style="text-decoration: none;color: #14F209; font-size: 16px;" href="../../index.php">Trang chủ</a>
						<i style="margin-top: 10px; font-size: 11px; color: #BCABAB" class="fa fa-angle-double-right" aria-hidden="true"></i>
						<a style="text-decoration: none;color: #BBA3A3;font-size: 16px" href="#">Quản lí tin đăng</a>
					</span>
				</div>
				<div class="trang_chu_2">
					<div class="phan_trang">
						<h1 style="font-size: 28px;     font-weight: 700;">
							Quản lí tin đăng
						</h1>
					</div>
				</div>
				<div class="trang_chu_3">
					<?php
					$connect = mysqli_connect('localhost','root','','web_phong');
					mysqli_set_charset($connect,'utf8');
					$tim_kiem = "";
					if(isset($_GET['tim_kiem'])){
						$tim_kiem = $_GET['tim_kiem'];
					}
					if(isset($_SESSION["ma_khach_hang"])){
						$ma_khach_hang= $_SESSION["ma_khach_hang"];
					}
					$query = "select * from phong_tro
					join quan
					on phong_tro.ma_quan = quan.ma_quan
					where ten_quan like '%$tim_kiem%' and ma_khach_hang = '$ma_khach_hang' ORDER BY tinh_trang ASC
					";
					$result = mysqli_query($connect,$query);
					$count = mysqli_num_rows($result);
					mysqli_close($connect);
					?>
					<?php
					if(isset($_GET['success'])){
						echo "<h3 style='color: green'>Sửa phòng thành công</h3>";
								// header("location:gg.php");
					}
					else if(isset($_GET['error'])){
						echo "<h3 style='color: red'>Sửa phòng thất bại</h3>";
					}
					?>
					<?php
					if(isset($_GET['successs'])){
						echo "<h3 style='color: green'>Xóa thành công</h3>";
								// header("location:gg.php");
					}
					else if(isset($_GET['errorr'])){
						echo "<h3 style='color: red'>Xóa phòng thất bại</h3>";
					}
					?>
					<table border="1" style="height: 180px; margin-top: 20px; width: 100%;border: 5px solid #ddd;">
						<caption>
							<form style="margin-bottom: 20px;"> 
								<input type="text" name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Tìm kiếm theo quận huyện" class="input">
								<button style="background: green" class="button">Tìm kiếm</button>
							</form>
						</caption>
						<tr style="height: 50px;">
							<?php echo "<h3 align='center'>Có $count phòng đã đăng</h3>" ?>
							<th style="width: 250px">Tin đăng</th>
							<th style="width: 100px">Quận</th>
							<th style="width: 100px">Giá</th>
							<th style="width: 100px">Diện tích</th>
							<th style="width: 100px">Tình trạng</th>
							<th style="width: 180px">Hành động</th>
						</tr>
						<?php
						while($row = mysqli_fetch_array($result)){
							?>
							<tr style="height: 150px;">
								<td>
									<div class="tong">
										<div class="tong_1">
											<img src="../dang_phong/anh/<?php echo($row['anh_1']); ?>" height="90px" width="100%;">
										</div>
										<div class="tieu_de_tinnn">
											<h2 style="margin: 0;font-size: 18px;color: #27a7df;">
												<a href="../chi_tiet_phong_co_tk.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" class="aaa"><?php echo($row['tieu_de']);?></a>
											</h2>
											<p style="font-size: 12px;margin: 0px;color:#606060;">(
												<?php
												if ($row['tinh_trang'] == 0) {
													echo "Chưa được duyệt";
												}
												else if ($row['tinh_trang'] == 1) {
													echo "Đã duyệt";
												}
												else if ($row['tinh_trang'] == 2) {
													echo "Đã duyệt";
												}
												else{
													echo "Phòng đầy";
												}
												?>
											)</p>
											<p style="font-size: 12px;margin: 0px;color:#606060;">Ngày đăng: 
												<?php 
												$ngay_dang = $row['ngay_dang'];
												$thoi_gian_da_sua   = date("d-m-y", strtotime($ngay_dang));
												echo $thoi_gian_da_sua; 
												?>
											</p>
										</div>
										<p style="margin-left: 5px; font-size: 15px;">Địa chỉ: <?php echo($row['dia_chi_phong']) ;?></p>
										<div class="ma">
											<b>Mã tin: <?php echo($row['ma_phong_tro']); ?></b>
										</div>
									</div>
								</td>
								<td style="text-align: center;"><?php echo($row['ten_quan']); ?></td>
								<td style="text-align: center;"><?php echo number_format(($row['gia'])) ?> VND</td>
								<td style="text-align: center;"><?php echo($row['dien_tich']) ;?>m²</td>
								<td style="text-align: center;">
									<?php
									if ($row['tinh_trang'] == 0) {
										echo "Chưa được duyệt";
									}
									else if ($row['tinh_trang'] == 1) {
										echo "Đã duyệt";
									}
									else if ($row['tinh_trang'] == 2) {
										echo "Đã hủy";
									}
									else{
										echo "Phòng đầy";
									}
									?>
								</td>
								<?php if($row['tinh_trang']==0){ ?>
									<td style="text-align: center;">
										<a href="sua_phong.php?ma_phong_tro=<?php echo($row['ma_phong_tro']);?>" class="sua">
											<img src="../public/images/sua.gif">Sửa tin
										</a>                    
										<a href="xoa_phong.php?ma_phong_tro=<?php echo($row['ma_phong_tro']);?>" class="xoa">
											<img src="../public/images/xoatin.gif">
										Xóa tin</a> 
									</td>
								<?php } ?>

								<?php if($row['tinh_trang']==1){ ?>
									<td style="text-align: center;">
										<a href="phong_day.php?ma_phong_tro=<?php echo($row['ma_phong_tro']);?>" class="sua" style='color: #98E31B;'>
											<img src="../public/images/sua.gif">Phòng đầy
										</a>                    
									</td>
								<?php } ?>
							</tr>
							<?php
						}
						?>
					</table>

				</div>
			</div>
		</div>

		<!-- PHẦN FOOTER -->
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