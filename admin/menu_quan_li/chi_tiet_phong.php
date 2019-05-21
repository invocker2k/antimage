<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí của admin</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/quan_li.css">
	<script type="text/javascript" src="../css/quan_li.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_haeder.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/chi_tiet_phong.css">
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
			<li><a href="doi_mk_admin.php">Đổi mật khẩu</a></li>
			<li><a href="thay_doi_thong_tin.php">Thay đổi thông tin cá nhân</a></li>
			<li><a href="../dang_xuat.php">Đăng xuất</a></li>
		</ul>
	</div>

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
					<div style="background:#5b8;" id="btnControl">
						<img src="../../dang_phong/anh/<?php echo($row['anh_1']); ?>" height="100%" width="100%;">
					</div>
					<div style="background:#85b;">
						<img src="../../dang_phong/anh/<?php echo($row['anh_2']); ?>" height="100%" width="100%;">
					</div>
					<div style="background:#e95;">
						<img src="../../dang_phong/anh/<?php echo($row['anh_3']); ?>" height="100%" width="100%;">
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
						<p class="pp" style="margin: 23px 0px 0px 0px"><?php echo($row['ten_quan']); ?></p>
					</div>
					<div class="chia_doi">
						<div class="chia_doi_1">
							<div class="intro_form">
								<dl class="dll" style="">
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

</body>
</html>