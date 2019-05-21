<!DOCTYPE html>
<html>
<head>
	<title>Đăng tin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/khach_hang_dang_nhap/welcome_user.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../public/css/css_dang_phong/dang_phong_1.css">
	<script type="text/javascript" src="../public/js/dang_tin.js"></script>
	 <!-- <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script>  -->
</head>
<body>
	<?php
		require('../dang_nhap_dang_ki/login/kiem_tra_khach_hang.php');
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
							<a class="appWrapper-Header-navItemLink" href="#">Đăng tin</a>
						</div>
						<div class="box-user_2">
							<a class="appWrapper-Header-navItemLink" href="#">Tin tức</a>
						</div>
						<div class="box-user_3">
							<a class="appWrapper-Header-navItemLink" href="#">Hướng dẫn</a>
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
									<a href="#">
										Tài khoản: <strong><?php echo $_SESSION['ten_khach_hang']; ?></strong>
									</a>
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
									<a href="#">
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
									<a style="margin-top: 0px" href="#">
										<i class="fa fa-user" aria-hidden="true"></i>
										Thông tin cá nhân
									</a>
								</li>
								<li>
									<a style="margin-top: 0px" href="#">
										<i class="fa fa-lock" aria-hidden="true"></i>
										Đổi mật khẩu
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a style="margin-top: 0px" href="../dang_nhap_dang_ki/login/login.php">
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

		<div class="main_dang_phong" style="height: 1300px;">
			<div class="main_cat">
				<div class="main_giua">
					<div class="dang_phong">
						<div class="dang_phong_1">
							<div class="chu_con">
								<p style="text-align: center; margin-bottom: 5px;">Thêm mới tin</p>
							</div>
						</div>
						<div class="chu_con_2"></div>
					</div>
					<div class="main_body">
						<!-- Bên trái -->
						<div class="body_left">
							<?php
							$connect = mysqli_connect('localhost','root','','web_phong');
							mysqli_set_charset($connect,'utf8');
							//lấy thông tin phòng
							$ma_phong_tro      = $_GET['ma_phong_tro'];
							$query       = "select * from phong_tro 
							where ma_phong_tro = $ma_phong_tro";
							$result      = mysqli_query($connect,$query);
							$row         = mysqli_fetch_array($result);
							?>
							<?php
							if(isset($_GET['success'])){
								echo "<h3 style='color: green'>Đăng phòng thành công</h3>";
								// header("location:gg.php");
							}
							else if(isset($_GET['error'])){
								echo "<h3style='color: red'>Đăng phòng thất bại</h3>";
							}
							?>
							<form class="form_dang_nha" method="post" action="process_sua_phong.php" enctype="multipart/form-data">
								<input type="hidden" name="ma_phong_tro" value="<?php echo $row['ma_phong_tro'] ?>">
								<div class="thong_tin">
									<h3 class="form_title">Thông tin cơ bản</h3>
									<div class="form_dang_phong">
										<div class="from_group">
											<!-- Phần giá phòng -->
											<div class="row_1">
												<label for="gia">
													<b style="font-size: 18px;">Giá phòng</b>
													<span style="color: red">(*)</span>
												</label><br>
												<input type="number" name="gia" id="gia" class="gia" value="<?php echo $row['gia'];?>">
											</div>
											<!-- hết phần giá -->
											<!-- phần diện tích -->
											<div class="row_2">
												<label for="dien_tich">
													<b style="font-size: 18px;">Diện tích</b>
													<span style="color: red">(*)</span>
												</label><br>
												<input type="number" name="dien_tich" id="dien_tich" class="gia" value="<?php echo $row['dien_tich'];?>">
												<span style="width: 100px;height: 100px;border: 2px 2px 2px 2px;">m²</span>
											</div>
											<!-- Hết diện tích -->
											<!-- Phần số lượng người -->
											<div class="row_3">
												<label for="so_luong_nguoi">
													<b style="font-size: 18px;">Số lượng người</b>
													<span style="color: red">(*)</span>
												</label><br>
												<input type="number" name="so_luong_nguoi" id="so_luong_nguoi" class="gia" value="<?php echo $row['so_luong_nguoi'];?>">
											</div>
											<!-- Hết số lượng người -->
											<!-- Phần quận huyện -->
											<div class="row_4">
												<label for="quan_huyen">
													<b style="font-size: 18px;">Quận huyện</b>
													<span style="color: red">(*)</span>
												</label><br>
												<select class="gia" name="ma_quan" id="ma_quan">
													<option value="0" selected="selected">Quận/Huyện</option>
													<option value="1">Hoàn Kiếm</option>
													<option value="2">Ba Đình</option>
													<option value="3">Đống Đa</option>
													<option value="4">Hai Bà Trưng</option>
													<option value="5">Cầu Giấy</option>
													<option value="6">Hoàng Mai</option>
													<option value="7">Hà Đông</option>
													<option value="8">Long Biên</option>
													<option value="9">Thanh Xuân</option>
													<option value="10">Tây Hồ</option>
													<option value="11">Gia Lâm</option>
													<option value="12">Sóc Sơn</option>
													<option value="13">Thanh Trì</option>
													<option value="14">Từ Liêm</option>
													<option value="15">Sơn Tây</option>
													<option value="16">Mê Linh</option>
													<option value="17">Ba Vì</option>
													<option value="18">Chương Mỹ</option>
													<option value="19">Đan Phượng</option>
													<option value="20">Đông Anh</option>
													<option value="21">Hoài Đức</option>
													<option value="22">Mỹ Đức</option>
													<option value="23">Phú Xuyên</option>
													<option value="24">Phúc Thọ</option>
													<option value="25">Quốc Oai</option>
													<option value="26">Thạch Thất</option>
													<option value="27">Thanh Oai</option>
													<option value="28">Thường Tín</option>
													<option value="29">Ứng Hòa</option>
												</select>
											</div>
											<!-- Hết quận huyện -->

										</div>
									</div>
								</div>
								<div class="lien_he">
									<h3 class="form_title">Liên hệ với người cho thuê</h3>
									<!-- phàn đăng phòng -->
									<div class="form_dang_phong">
										<div class="from_group">
											<div class="row_1">
												<label for="ten_nguoi_dang">
													<b style="font-size: 18px;">Họ tên</b>
													<span style="color: red">(*)</span>
												</label><br>
												<input type="text" name="ten_nguoi_dang" id="ten_nguoi_dang" class="gia" placeholder="Điền đầy đủ họ tên của bạn" value="<?php echo $row['ten_nguoi_dang'];?>">
											</div>
											<div class="row_2">
												<label for="sdt_nguoi_dang">
													<b style="font-size: 18px;">Số điện thoại</b>
													<span style="color: red">(*)</span>
												</label><br>
												<input type="number" name="sdt_nguoi_dang" id="sdt_nguoi_dang" class="gia" value="<?php echo $row['sdt_nguoi_dang'];?>">
											</div>
											<div class="row_33">
												<label for="dia_chi_phong">
													<b style="font-size: 18px;">Địa chỉ</b>
													<span style="color: red">(*)</span>
												</label><br>
												<input type="text" name="dia_chi_phong" id="dia_chi_phong" class="gia" value="<?php echo $row['dia_chi_phong'];?>">
											</div>
										</div>
									</div>
									<!-- Hết phần đăng phòng -->
								</div>
								<div class="thong_tin_mo_ta">
									<h3 class="form_title">Thông tin mô tả</h3>
									<div class="form_dang_phong">
										<div class="from_group">
											<div class="row_333">
												<label for="tieu_de">
													<b style="font-size: 18px;">Tiêu đề tin</b>
													<span style="color: red">(*)</span>
												</label><br>
												<input type="text" name="tieu_de" id="tieu_de" class="gia" placeholder="Hãy đặt tiêu đề đầy đủ nghĩa, khách sẽ quan tâm hơn" value="<?php echo $row['tieu_de'];?>">
												<span id="loi_tieu_de" class="error_name" style="color: red;"></span>
												<div class="texaria">
													<label for="noi_dung">
														<b style="font-size: 18px;">Nội dung</b>
														<span style="color: red">(*)</span>
													</label><br>
													<textarea style="margin: 0px 1px 0px 0px; height: 169px; width: 99%;" id="noi_dung_chi_tiet" name="noi_dung_chi_tiet" placeholder="Nội dung tin ít nhất 10 ký tự. Bạn nên có đủ các thông tin của tin đăng: nhà vệ sinh trong hay ngoài, giá điện, nước, trọ gần khu vực nào và các thông tin thêm của trọ."><?php echo $row['noi_dung_chi_tiet'];?></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
						<!-- 		 <div class="anh_phong">
									<h3 class="form_title">Hình ảnh</h3>
									<div class="hinh_anh">
										Ảnh cũ<br>
										<img src="../dang_phong/anh/<?php echo $row['anh_1'] ?>" style="width: 100px;height: 50px;">
										<input type="hidden" name="anh_cu" value="<?php echo $row_sp['anh_1'] ?>">

										<img src="../dang_phong/anh/<?php echo $row['anh_2'] ?>" style="width: 100px;height: 50px;">
										<input type="hidden" name="anh_cu" value="<?php echo $row_sp['anh_2'] ?>">

										<img src="../dang_phong/anh/<?php echo $row['anh_3'] ?>" style="width: 100px;height: 50px;">
										<input type="hidden" name="anh_cu" value="<?php echo $row_sp['anh_3'] ?>">
									</div>
									<div id="image-preview">
										<label for="image-upload" id="image-label">Chọn ảnh</label>
										<input type="file" name="anh_1" id="image-upload" accept="image/*"/>
									</div>
									<div id="image-preview_1">
										<label for="image-upload_1" id="image-label_1">Chọn ảnh</label>
										<input type="file" name="anh_2" id="image-upload_1" accept="image/*" />
									</div>
									<div id="image-preview_2">
										<label for="image-upload_2" id="image-label_2">Chọn ảnh</label>
										<input type="file" name="anh_3" id="image-upload_2" accept="image/*"/>
									</div>
								</div>  -->
								<div class="button" style="position: absolute;top: 1000px">
									<button type="submit" class="btn btn-default" name="button_submit" value="1" onclick="return dang_tin()">Lưu tin</button>
								</div>
							</form>
						</div>
						<!-- Bên phải -->
						<div class="dang_phong_right">
							<div class="huong_dan">
								<div class="block_huongdandangtin_header">
									Hướng dẫn đăng tin
								</div>
								<div class="block_huongdandangtin_body">
									<ul>
										<li><strong>Thông tin có dấu <span class="red_require">(*)</span> là bắt buộc.</strong></li>
										<li><strong>Nội dung phải viết bằng tiếng Việt có dấu</strong></li>
										<li><strong>Tiêu đề tin không dài quá 100 kí tự</strong></li>
										<li>Các bạn nên điền đầy đủ thông tin vào các mục để tin đăng có hiệu quả hơn.</li>
										<li>Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách kéo icon tới đúng vị trí của tin rao.</li>
										<li>Tin đăng có hình ảnh rõ ràng sẽ được xem và gọi gấp nhiều lần so với tin rao không có ảnh. Hãy đăng ảnh để được giao dịch nhanh chóng!</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
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
	</div>
	<script type="text/javascript" src="../public/js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="../public/js/jquery.uploadPreview.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.uploadPreview({
				input_field: "#image-upload",
				preview_box: "#image-preview",
				label_field: "#image-label"
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.uploadPreview({
				input_field: "#image-upload_1",
				preview_box: "#image-preview_1",
				label_field: "#image-label_1",
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.uploadPreview({
				input_field: "#image-upload_2",
				preview_box: "#image-preview_2",
				label_field: "#image-label_2",
			});
		});
	</script>
</html>