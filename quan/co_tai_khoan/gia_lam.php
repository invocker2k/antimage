<!DOCTYPE html>
<html>
<head>
	<title>Quận đống đa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/khach_hang_dang_nhap/welcome_user.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_footer.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/chi_tiet_phong.css">
	 <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script> 
</head>
<body>
	<?php
		require('../../kiem_tra_khach_hang.php');
	?>
	<div class="page_wrapper">
		<!-- HEADER -->
		<header class>
			<div class="container-content">
				<div class="wrapper">
					<div class="logo">
						<a href="../../da_dang_ki/index_auto.php">
							<img src="../../public/images/logo_text_blue.png">
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
							<a class="appWrapper-Header-navItemLink" href="../../dang_phong/dang_phong.php">Đăng tin</a>
						</div>
						<div class="box-user_2">
							<a class="appWrapper-Header-navItemLink" href="../../da_dang_ki/tin_tuc.php">Tin tức</a>
						</div>
						<div class="box-user_3">
							<a class="appWrapper-Header-navItemLink" href="../../da_dang_ki/huong_dan.php">Hướng dẫn</a>
						</div>			
					</div>
				</div>
				<div class="user_login">
					<ul class="nav_login"> 
						<li class="open">
							<a href="#" class="dropp">
								<img style="width: 90%;height: 90%; margin-top: 2px; margin-left: 2px;border-radius: 50%;" src="../../public/images/default-user.png" alt="">
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
									<a href="../../dang_phong/dang_phong.php">
										<i class="fa fa-plus-square" aria-hidden="true"></i>
										Đăng tin
									</a>
								</li>
								<li>
									<a href="../../quan_li_phong/quan_li_phong_dang.php">
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
									<a style="margin-top: 0px" href="../../thong_tin_user/thong_tin.php">
										<i class="fa fa-user" aria-hidden="true"></i>
										Thông tin cá nhân
									</a>
								</li>
								<li>
									<a style="margin-top: 0px" href="../../thong_tin_user/doi_mk.php">
										<i class="fa fa-lock" aria-hidden="true"></i>
										Đổi mật khẩu
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a style="margin-top: 0px" href="../../da_dang_ki/dang_xuat.php">
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
		<div id="main_body">
			<div class="main-content">
				<div class="main_content_1">
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
					$limit = 60;
					$offset = ($page-1)*$limit;

			//lấy tổng số sản phẩm về
					$query_count  = "select count(*) from phong_tro
					where tinh_trang = 1 and ma_quan = 11";
					$result_count = mysqli_query($connect,$query_count);
					$row_count    = mysqli_fetch_array($result_count);
					$count        = $row_count['count(*)'];

			//đếm trang
					$count_page = ceil($count/$limit);

					$query_select  = "select * from phong_tro where tinh_trang = 1 and ma_quan = 11";
					$result_select = mysqli_query($connect,$query_select);
					mysqli_close($connect);
					?>
					<!-- MAIN CHÍNH -->
					<div class="lua_chon" style="margin-top:0px;">
						<?php echo "<h2 style='margin-top:10px;color: #545454;'>Kết quả: $count tin bài</h2>"?>
						<div class="line"></div>
						<div class="database">
							<?php
								while($row = mysqli_fetch_array($result_select)){
							?>
							<div class="lay_du_lieu">
								<div class="img_data">
									<img src="../../dang_phong/anh/<?php echo $row['anh_1'] ?>" style="width: 100%;height: 100%">
								</div>
								<div class="hot">
									<div class="hot1">
										<p style="text-align: center;margin-top: 18px;">HOT</p>
								</div>
							</div>
							<div class="chu_data" style="text-align: center;">		
								<h3 class="tile">
									<a href="../../chi_tiet_phong_co_tk.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" style="text-decoration: none;color: #0094FF"><?php echo($row['tieu_de']) ?></a>
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
									<a href="../../luu_tin.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" style="text-decoration: none;color: #fff; margin-left: 105px;padding: 8px;background: #F1540D">Lưu tin</a>
								</h3>
							</div>
						</div>
						<?php
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div align="center" style="float: left; position: absolute;top: 3150px;left: 650px;">
			<?php for($i=1; $i<=$count_page; $i++){ ?>
				<a href="?page=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>"><?php echo $i ?></a>
			<?php } ?>
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