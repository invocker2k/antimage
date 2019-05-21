<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Các bài đang chờ duyệt</title>
	<link rel="stylesheet" type="text/css" href="../css/quan_li.css">
	<script type="text/javascript" src="../css/quan_li.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
	<div style="margin-top: 50px;">
		<?php
		if ($_SESSION['ten_admin']) {
			$connect = mysqli_connect('localhost','root','','web_phong');
			mysqli_set_charset($connect,'utf8');
			$query = "select * from phong_tro
			join quan
			on phong_tro.ma_quan = quan.ma_quan
			where tinh_trang = 0";
			$result = mysqli_query($connect,$query);
			mysqli_close($connect);
		}
		else{
			echo "<script>alert('Bạn không phải admin');</script>";
		}
		?>
		<table border="1" style="height: 120px; margin-top: 20px; width: 100%;border: 5px solid #ddd;">
			<tr style="height: 50px;">
				<th style="width: 100px">Tin đăng</th>
				<th style="width: 100px">Quận</th>
				<th style="width: 100px">Giá</th>
				<th style="width: 100px">Diện tích</th>
				<th style="width: 100px">Xem chi tiết</th>
				<th style="width: 100px">Duyệt</th>
				<th style="width: 100px">Hủy</th>
			</tr>
			<?php while($row = mysqli_fetch_array($result)){ ?>
				<tr>
					<td>
						<div class="tong">
							<div class="tong_1">
								<img src="../../dang_phong/anh/<?php echo($row['anh_1']); ?>" height="90px" width="100%;">
							</div>
							<div class="tieu_de_tinnn">
								<h2 style="margin: 0;font-size: 18px;color: #27a7df;">
									<a href="chi_tiet_phong.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" class="aaa"><?php echo($row['tieu_de']);?></a>
								</h2>
							
								<p style="font-size: 12px;margin: 0px;color:#606060;">Ngày đăng: 
									<?php 
									$ngay_dang = $row['ngay_dang'];
									$thoi_gian_da_sua   = date("d-m-y", strtotime($ngay_dang));
									echo $thoi_gian_da_sua; 
									?>
								</p>
							</div>
							<p style=" font-size: 15px;">Địa chỉ: <?php echo($row['dia_chi_phong']) ;?></p>
							<div class="ma">
								<b style="color: #808080;">Mã tin: <?php echo($row['ma_phong_tro']); ?></b>
							</div>
						</div>
					</td>
					<td style="text-align: center;"><?php echo($row['ten_quan']); ?></td>
					<td style="text-align: center;"><?php echo number_format(($row['gia'])) ?> VND</td>
					<td style="text-align: center;"><?php echo($row['dien_tich']) ;?>m²</td>
					<td style="text-align: center;">
						<a href="chi_tiet_phong.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>">
							Xem Chi Tiết
						</a>
					</td>
					<td style="text-align: center;">
						<a href="thay_doi_tinh_trang_hoa_don.php?ma_phong_tro=<?php echo $row['ma_phong_tro'] ?> & kieu=duyet">
							Duyệt
						</a>
					</td>
					<td style="text-align: center;">
						<a href="thay_doi_tinh_trang_hoa_don.php?ma_phong_tro=<?php echo $row['ma_phong_tro'];?> & kieu=huy">
							Hủy
						</a>
					</td>
				</tr>

			<?php } ?>
		</table>
	</div>
</body>
</html>