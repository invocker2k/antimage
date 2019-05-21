<!DOCTYPE html>
<html>
<head>
	<title>Quận Hai Bà Trưng</title>
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
								<a href="dang_nhap_dang_ki/dang_ki/dang_ki.php" class="btn red add-new t frm-login">Đăng tin</a>
							</li>
							<li class="li_news">
								<a href="../da_dang_ki/tin_tuc.php">Tin tức</a>
							</li>
							<li class="li_guide">
								<a href="../da_dang_ki/huong_dan.php">Hướng dẫn</a>
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
					where tinh_trang = 1 and ma_quan = 4";
					$result_count = mysqli_query($connect,$query_count);
					$row_count    = mysqli_fetch_array($result_count);
					$count        = $row_count['count(*)'];

			//đếm trang
					$count_page = ceil($count/$limit);

					$query_select  = "select * from phong_tro where tinh_trang = 1 and ma_quan = 4";
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
									<img src="../dang_phong/anh/<?php echo $row['anh_1'] ?>" style="width: 100%;height: 100%">
								</div>
								<div class="hot">
									<div class="hot1">
										<p style="text-align: center;margin-top: 18px;">HOT</p>
								</div>
							</div>
							<div class="chu_data" style="text-align: center;">		
								<h3 class="tile">
									<a href="../chi_tiet_phong.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" style="text-decoration: none;color: #0094FF"><?php echo($row['tieu_de']) ?></a>
								</h3>
								<dl class="dttt">
									<dt>Diện tích:</dt>
									<dd><?php echo($row['dien_tich'])?> m
										<sup>2</sup>
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
									<a href="../luu_tin.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" style="text-decoration: none;color: #fff; margin-left: 105px;padding: 8px;background: #F1540D">Lưu tin</a>
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