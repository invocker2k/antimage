<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lí của admin</title>
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
			<li><a href="cac_bai_da_huy.php">Các bài đã hủy</a>
			</li>
			<li><a href="doi_mk_admin.php">Đổi mật khẩu</a></li>
			<li><a href="thay_doi_thong_tin.php">Thay đổi thông tin cá nhân</a></li>
			<li><a href="../dang_xuat.php">Đăng xuất</a></li>
		</ul>
	</div>

	<div id="main_body">
			<div class="main-content">
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
					$limit = 88;
					$offset = ($page-1)*$limit;

			//lấy tổng số sản phẩm về
					$query_count  = "select count(*) from phong_tro
					join quan
					on phong_tro.ma_quan = quan.ma_quan
					where tinh_trang = 2 and ten_quan like '%$tim_kiem%'";
					$result_count = mysqli_query($connect,$query_count);
					$row_count    = mysqli_fetch_array($result_count);
					$count        = $row_count['count(*)'];

			//đếm trang
					$count_page = ceil($count/$limit);

					$query_select  = "select * from phong_tro
					join quan
					on phong_tro.ma_quan = quan.ma_quan
					 where tinh_trang = 2 and ten_quan like '%$tim_kiem%'
					 limit $limit offset $offset ";
					$result_select = mysqli_query($connect,$query_select);

					mysqli_close($connect);
					?>
					<div align="center">
						<form>
							Tìm kiếm: 
							<input type="text" name="tim_kiem" value="<?php echo $tim_kiem ?>">
							<button>Tìm</button>
						</form>
					</div>
					<!-- MAIN CHÍNH -->
					<div class="lua_chon" style="margin-top: 20px;">
						<?php echo "<h2 align='center' style='color: #545454;'>Kết quả: $count tin bài</h2>"?>
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
									<a href="chi_tiet_phong.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" style="text-decoration: none;color: #0094FF"><?php echo($row['tieu_de']) ?></a>
								</h3>
								<dl class="dttt" style="margin: 20px 0 0 0;">
									<dt>Diện tích:</dt>
									<dd><?php echo($row['dien_tich'])?> m
										<sup>2</sup>
									</dd>
								</dl>
								<dl class="dtttt">
									<dt>Tình trạng:</dt>
									<dd style="color: #45CE30;font-size: 14px;">
										<?php
										if ($row['tinh_trang'] == 2) {
											echo "Đã hủy";
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
							</div>
						</div>
						<?php
					}
					?>
					</div>
				</div>
			</div>
		</div>
		<div align="center" style="float: left; position: absolute;top: 3150px;left: 650px;">
						<?php for($i=1; $i<=$count_page; $i++){ ?>
							<a href="?page=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>"><?php echo $i ?></a>
						<?php } ?>
					</div>

</body>
</html>