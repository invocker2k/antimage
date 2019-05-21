<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Khách hàng có tài khoản</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/khach_hang_dang_nhap/welcome_user.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_footer.css">
	<script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script> 
</head>
<body>
	<?php require_once('check_kh.php'); ?>
	<div class="page_wrapper">
		<!-- HEADER -->
		<header class>
			<div class="container-content">
				<div class="wrapper">
					<div class="logo">
						<a href="">
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
								<input type="text" name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Nhập tên quận bạn muốn tìm (VD: Hai Bà Trưng)" class="search-form_input">
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
							<a class="appWrapper-Header-navItemLink" href="tin_tuc.php">Tin tức</a>
						</div>
						<div class="box-user_3">
							<a class="appWrapper-Header-navItemLink" href="huong_dan.php">Hướng dẫn</a>
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
		<!-- PHẦN MENU TÌM KIẾM -->
		<nav class="main">
			<div id="slider" class="shadow">
				<div id="mask">
					<ul >
						<li id="first" class="firstanimation">
							<a href="#">
								<img src="../public/images/ss.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>

						<li id="second" class="secondanimation">
							<a href="#">
								<img src="../public/images/bg_search.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>

						<li id="third" class="thirdanimation">
							<a href="#">
								<img src="../public/images/nha.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>

						<li id="fourth" class="fourthanimation">
							<a href="#">
								<img src="../public/images/3.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>

						<li id="fifth" class="fifthanimation">
							<a href="#">
								<img src="../public/images/banner_sli.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>
					</ul>
				</div>
				<div class="progress-bar"></div>
			</div>
		</nav>
		<!-- PHẦM MAIN CHÍNH XỬ LÍ PHP -->
		<div id="main_body">
			<div class="main-content">
				<div class="main_content_1">
					<div class="hien_thi" style="font-size: 25px;">
						Địa điểm nổi bật
					</div>
					<div class="hien_thi_anh">
						<a href="../quan/co_tai_khoan/dong_da.php" class="a_anh">
							<img src="../public/images/dai_hoc_y_ha_noi_co_thi_sinh_dat_3075_diem_1.jpg" style="width: 100%; height: 200px;border: 1px solid #eee">
							<h1 style="position: absolute;top: 145px;left: 35px;text-transform: uppercase;color: #FFFFFF; font-size: 30px;font-family: "Comic Sans MS", cursive, sans-serif;">QUẬN ĐỐNG ĐA</h1>
						</a>
					</div>
					<div class="hien_thi_anh">
						<a href="../quan/co_tai_khoan/hai_ba_trung.php" class="a_anh">
							<img src="../public/images/bk.jpg" style="width: 100%; height: 200px;border: 1px solid #eee">
							<h1 style="position: absolute;top: 145px;left: 10px;text-transform: uppercase;color: #FFFFFF; font-size: 28px;font-family: "Comic Sans MS", cursive, sans-serif;">Quận hai bà trưng</h1>
						</a>
					</div>
					<div class="hien_thi_anh">
						<a href="../quan/co_tai_khoan/cau_giay.php" class="a_anh">
							<img src="../public/images/images2224353_001.jpg" style="width: 100%; height: 200px;border: 1px solid #eee">
							<h1 style="position: absolute;top: 145px;left: 30px;text-transform: uppercase;color: #FFFFFF; font-size: 30px;font-family: "Comic Sans MS", cursive, sans-serif;">Quận Cầu giấy</h1>
						</a>
					</div>
					<div class="hien_thi_anh">
						<a href="../quan/co_tai_khoan/gia_lam.php" class="a_anh">
							<img src="../public/images/hoc-vien-nong-nghiep-viet-nam(2).jpg" style="width: 100%; height: 200px; border: 1px solid #eee">
							<h1 style="position: absolute;top: 145px;left: 110px;text-transform: uppercase;color: #FFFFFF; font-size: 30px;font-family: "Comic Sans MS", cursive, sans-serif;">GIA LÂM</h1>
						</a>
					</div>
					<?php
					$connect = mysqli_connect('localhost','root','','web_phong');
					mysqli_set_charset($connect,'utf8');
			//tìm kiếm
					$tim_kiem = "";
					if(isset($_GET['tim_kiem'])){
						$tim_kiem = $_GET['tim_kiem'];
					}

			//phân trang
					$page = 1;
					if(isset($_GET['page'])){
						$page = $_GET['page'];
					}
			//giới hạn sản phẩm trên 1 trang
					$limit = 20;
					$offset = ($page-1)*$limit;

			//lấy tổng số sản phẩm về
					$query_count  = "select count(*) from phong_tro
					join quan
					on phong_tro.ma_quan = quan.ma_quan
					where tinh_trang = 1 and ten_quan like '%$tim_kiem%'";
					$result_count = mysqli_query($connect,$query_count);
					$row_count    = mysqli_fetch_array($result_count);
					$count        = $row_count['count(*)'];

			//đếm trang
					$count_page = ceil($count/$limit);

					$query_select  = "select * from phong_tro
					join quan
					on phong_tro.ma_quan = quan.ma_quan
					where tinh_trang = 1 and ten_quan like '%$tim_kiem%'
					limit $limit offset $offset";
					$result_select = mysqli_query($connect,$query_select);
					mysqli_close($connect);
					?>
					<!-- MAIN CHÍNH -->
					<div class="lua_chon">
						<div class="hien_thi" style="font-size: 25px; color: red">
							Lựa chọn HOT
						</div>
						<?php echo "<h2 align='center' style='color: #808080;font-size: 20px;'>Kết quả:  $count Tin bài</h2>"?>
						<div class="database">
							<?php
							while($row = mysqli_fetch_array($result_select)){
								?>
								<div class="lay_du_lieu">
									<div class="img_data">
										<img src="../dang_phong/anh/<?php echo $row['anh_1'] ?>" style="width: 100%;height: 100%">
									</div>
									<div class="hot">
										<div class="hot1">
											<p style="text-align: center;margin-top: 18px;">HOT</p>
										</div>
									</div>
									<div class="chu_data">
										<span class="published">
											<?php 
											$ngay_dang = $row['ngay_dang'];
											$thoi_gian_da_sua   = date("d-m-y", strtotime($ngay_dang));
											echo $thoi_gian_da_sua; 
											?>
										</span>
										<span class="local">
											<a  style="color: #a51b0d;text-decoration: none;"><?php echo($row['ten_quan']); ?></a>
										</span>
										<h3 class="tile">
											<a href="../chi_tiet_phong_co_tk.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" style="text-decoration: none;color: #0094FF"><?php echo($row['tieu_de']) ?></a>
										</h3>
										<dl class="dttt">
											<dt>Diện tích:</dt>
											<dd><?php echo($row['dien_tich'])?> m
												<sup>2</sup>
											</dd>
										</dl>
										<dl class="dtttt">
											<dt>Tình trạng:</dt>
											<dd style="color: #45CE30;font-size: 14px;">
												<?php
												if ($row['tinh_trang'] == 1) {
													echo "Còn phòng";
												}
												else if ($row['tinh_trang'] == 3) {
													echo "Phòng đã đầy";
												}
												?>
											</dd>
										</dl>
										<div class="price">
											<div>
												<span class="san">------- <?php echo number_format(($row['gia'])) ?> --------</span><i class="i">đồng/tháng</i>
											</div>
										</div>
										<dl class="address">
											<dt>Địa chỉ: </dt>
											<dd> <?php echo($row['dia_chi_phong']) ?></dd>
										</dl>
										<h3 class="tile">
											<?php 
											if(isset($_SESSION["err"])){
												echo "<script>
													alert ('Lưu thất bại');
												</script>";
												unset($_SESSION["err"]);
											}	
											if(isset($_SESSION["success"])){
												echo "<script>
													alert ('Lưu thành công');
												</script>";
												unset($_SESSION["success"]);
											}										
											 ?>
													<a href="../luu_tin.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>?tieu_de =<?php echo ($row['tieu_de']) ?>" style="text-decoration: none;color: #fff; margin-left: 105px;padding: 8px;background: #F1540D">Lưu tin</a>
												</h3>
											</div>
										</div>
										<?php
									}
									?>
								</div>
								<div align="center" style="float: left; position: absolute;top: 3150px;left: 650px;">
									<?php for($i=1; $i<=$count_page; $i++){ ?>
										<a href="?page=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>"><?php echo $i ?></a>
									<?php } ?>
								</div>
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